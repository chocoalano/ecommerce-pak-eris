<?php

namespace App\Livewire\ComponentPage;

use App\Models\Product;
use Livewire\Component;

class ProductEightOnlyFashionComponent extends Component
{
    public $productEightOnly;

    public function mount()
    {
        $this->productEightOnly = Product::with(
            'seller',
            'category',
            'subcategory',
            'color',
            'reviews',
            'images',
        )
            ->where('type', 'fashion')
            ->orderByDesc('rating')
            ->limit(8)
            ->get() ?? [];
    }
    public function render()
    {
        return view('livewire.component-page.product-eight-only-fashion-component');
    }
}
