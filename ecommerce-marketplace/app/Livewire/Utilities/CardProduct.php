<?php

namespace App\Livewire\Utilities;

use Livewire\Component;

class CardProduct extends Component
{
    /**
     * @var array{
     *     id: int|null,
     *     slug: string|null,
     *     image: string|null,
     *     price: float|null,
     *     rating: float|null,
     *     name: string|null,
     *     store_name: string|null,
     *     stock: int|null,
     * }
     */
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
        return view('livewire.utilities.card-product');
    }
}
