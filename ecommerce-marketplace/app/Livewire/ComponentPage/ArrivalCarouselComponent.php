<?php

namespace App\Livewire\ComponentPage;

use App\Models\Product;
use Illuminate\Support\Carbon;
use Livewire\Component;

class ArrivalCarouselComponent extends Component
{
    public $product;
    public function mount()
    {
        $this->product = Product::with('seller', 'images')
            ->where('status', 'active')
            ->whereBetween('created_at', [Carbon::now()->subDays(7), Carbon::now()])
            ->limit(20)
            ->get() ?? [];
    }
    public function render()
    {
        return view('livewire.component-page.arrival-carousel-component');
    }
}
