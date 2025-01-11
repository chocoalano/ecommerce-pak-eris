<?php

namespace App\Livewire\Utilities;

use Livewire\Component;

class CardProductEight extends Component
{
    public $product = [
        'id' => null,
        'slug' => null,
        'image' => null,
        'price' => null,
        'rating' => null,
        'name' => null,
        'store_name' => null,
        'stock' => null,
    ];
    public function render()
    {
        return view('livewire.utilities.card-product-eight');
    }
}
