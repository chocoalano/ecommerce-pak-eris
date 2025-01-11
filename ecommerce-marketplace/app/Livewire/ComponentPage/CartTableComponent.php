<?php

namespace App\Livewire\ComponentPage;

use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;
use Kavist\RajaOngkir\Facades\RajaOngkir;
use Livewire\Component;
use Livewire\WithPagination;

class CartTableComponent extends Component
{
    use WithPagination;

    public $form = [];
    public $ongkir = 0;
    public $subTotal = 0;
    public $taxTotal = 0;
    public $grandTotal = 0;
    public $ongkirsetup = [
        'province' => null,
        'city' => null,
    ];

    // Lifecycle method untuk inisialisasi data awal
    public function mount()
    {
        $this->loadCartData();
        $this->loadProvince();
    }

    protected function loadProvince()
    {
        $this->ongkirsetup['province'] = RajaOngkir::provinsi()->all();
        $this->ongkirsetup['city'] = RajaOngkir::kota()->all();
    }
    public function loadCity($value)
    {
        $this->ongkirsetup['city'] = RajaOngkir::kota()->dariProvinsi($value)->get();
    }
    public function loadOngkir($value, $index)
    {
        $xplode = explode('-', $this->form[$index]['province_store']);
        $cost = RajaOngkir::ongkosKirim([
            'origin' => $xplode[0],
            'destination' => $this->form[$index]['province_shipping'],
            'weight' => round($this->form[$index]['weight']),
            'courier' => $value
        ])->get();
        $this->form[$index]['list_shipping_option'] = $cost[0]['costs'];
    }

    // Fungsi untuk memuat data cart dan inisialisasi form
    protected function loadCartData()
    {
        $cartItems = CartItem::with('cart', 'product')
            ->whereHas('cart', function ($q) {
                $q->where('buyer_id', Auth::id());
            })
            ->get();

        $this->form = $cartItems->map(function ($item) {
            return [
                "qty" => 1,
                "price" => (float) $item->product->price,
                "weight" => (float) $item->product->weight,
                "total" => 1 * (float) $item->product->price,
                "product_id" => $item->product->id,
                "province_store" => $item->product->seller->province,
                "city_store" => $item->product->seller->city,
                "province_shipping" => null,
                "city_shipping" => null,
                "courier_shipping" => null,
                "packet_shipping" => null,
                "cost_shipping" => 0,
                "list_shipping_option" => null,
            ];
        })->toArray();
        $this->updateGrandTotal();
    }

    public function selectOngkir($index, $value)
    {
        $xplode = explode('-', $value);
        $this->form[$index]['cost_shipping'] = $xplode[0];
        $this->ongkir = array_sum(array_column($this->form, 'cost_shipping'));
        $this->grandTotal = $this->grandTotal + $this->ongkir;
    }
    public function updateGrandTotal()
    {
        $this->subTotal = (float) collect($this->form)->sum('total');
        $this->taxTotal = (float) collect($this->form)->sum('total') * (1 + (float) config('app.tax'));
        $this->grandTotal = (float) $this->subTotal + (float) $this->taxTotal;
    }

    // Fungsi untuk menangani perubahan quantity
    public function handleqty($index, $qty)
    {
        // Validasi quantity
        if ($qty < 1) {
            $qty = 1;
        }

        // Perbarui form berdasarkan indeks
        $this->form[$index]['qty'] = $qty;
        $this->form[$index]['weight'] = $qty * $this->form[$index]['weight'];
        $this->form[$index]['total'] = $qty * $this->form[$index]['price'];
        // Perbarui total keseluruhan
        $this->updateGrandTotal();
    }

    public function procesed_checkout()
    {
        $filteredData = array_filter($this->form, function ($item) {
            return !empty($item['province_shipping']) &&
                   !empty($item['city_shipping']) &&
                   !empty($item['courier_shipping']) &&
                   !empty($item['packet_shipping']) &&
                   !empty($item['cost_shipping']);
        });
        dd($filteredData, $this->ongkir, $this->taxTotal, $this->grandTotal);
    }

    public function render()
    {
        // Ambil data cart untuk ditampilkan di tabel
        $cart = CartItem::with('cart', 'product')
            ->whereHas('cart', function ($q) {
                $q->where('buyer_id', Auth::id());
            })
            ->paginate(5);

        return view('livewire.component-page.cart-table-component', [
            'cart' => $cart,
        ]);
    }
}
