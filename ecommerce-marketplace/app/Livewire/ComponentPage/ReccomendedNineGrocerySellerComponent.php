<?php

namespace App\Livewire\ComponentPage;

use App\Models\Seller;
use Livewire\Component;

class ReccomendedNineGrocerySellerComponent extends Component
{
    public $grocery_seller;
    public function mount(): void
    {
        $this->grocery_seller = Seller::with('user', 'reviews')
            ->where(['store_type' => 'grocery', 'store_status' => 'active'])
            ->orderByDesc('rating')
            ->limit(9)->get() ?? [];
    }
    public function render()
    {
        return view('livewire.component-page.reccomended-nine-grocery-seller-component');
    }
}
