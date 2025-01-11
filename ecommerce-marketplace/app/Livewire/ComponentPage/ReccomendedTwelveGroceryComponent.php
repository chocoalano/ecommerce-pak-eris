<?php

namespace App\Livewire\ComponentPage;

use App\Models\Product;
use App\Models\Subcategory;
use Livewire\Component;

class ReccomendedTwelveGroceryComponent extends Component
{
    public $reccomended_welve_grocery;
    public $btntab = "pills-all";
    public $products;
    public function mount()
    {
        $this->reccomended_welve_grocery = Subcategory::whereHas('category', function ($c) {
            $c->where('name', 'Groceries');
        })
            ->where('status', 'active')
            ->orderByDesc('created_at')
            ->limit(6)
            ->get()
            ->pluck('name')
            ->toArray() ?? [];
        array_push($this->reccomended_welve_grocery, 'all');

        $this->products = Product::with('seller')
            ->whereHas('category', function ($c) {
                $c->where('name', 'Groceries');
            })
            ->where('status', 'active')
            ->limit(12)
            ->get() ?? [];
    }

    public function updateBtntab($value)
    {
        $this->btntab = $value;
    }
    public function render()
    {
        return view('livewire.component-page.reccomended-twelve-grocery-component');
    }
}
