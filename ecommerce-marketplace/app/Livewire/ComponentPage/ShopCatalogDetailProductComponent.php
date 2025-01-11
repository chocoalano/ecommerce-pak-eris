<?php

namespace App\Livewire\ComponentPage;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShopCatalogDetailProductComponent extends Component
{
    public $product_detail;

    public $form = [
        'qty' => 1,
        'detail_orders' => '',
    ];
    public $comment;

    protected $rules = [
        'form.qty' => 'required|numeric|min:1',
        'form.detail_orders' => 'required|string|max:255',
    ];
    public function submit()
    {
        $this->validate();

        if (Auth::check()) {
            $cart = Cart::firstOrCreate(
                ['buyer_id' => Auth::user()->id]
            );
            $cart->item()->updateOrCreate(
                ['product_id' => $this->product_detail->id],
                [
                    'qty' => $this->form['qty'],
                    'detail_orders' => $this->form['detail_orders']
                ]
            );
            session()->flash('success', 'Item added to cart successfully!');
            return redirect(route('cart'));
        } else {
            session()->flash('error', 'You must be logged in to add items to your cart.');
            return redirect(route('account'));
        }
    }
    public function render()
    {
        return view('livewire.component-page.shop-catalog-detail-product-component');
    }
}
