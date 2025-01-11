<?php

namespace App\Livewire\ComponentPage;

use App\Models\PromoStoreOnlyEight;
use Illuminate\Support\Carbon;
use Livewire\Component;

class StoreBannerTwoOnlyComponent extends Component
{
    public $banner;
    public function mount()
    {
        $this->banner = PromoStoreOnlyEight::with('seller')
        ->where(function ($promo) {
            $promo
                ->whereDate("time_start", ">=", Carbon::now()->format("Y-m-d"))
                ->whereDate("time_finish", "<=", Carbon::now()->format("Y-m-d"))
                ->where('status', true);
        })->limit(2)->get() ?? [];
    }
    public function render()
    {
        return view('livewire.component-page.store-banner-two-only-component');
    }
}
