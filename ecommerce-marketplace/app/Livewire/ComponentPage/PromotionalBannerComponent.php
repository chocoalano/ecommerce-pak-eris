<?php

namespace App\Livewire\ComponentPage;

use App\Models\PromoStoreOnlyEight;
use Illuminate\Support\Carbon;
use Livewire\Component;

class PromotionalBannerComponent extends Component
{
    public $promo;
    public function mount()
    {
        $this->promo = PromoStoreOnlyEight::with('seller')
            ->where(function ($promo) {
                $promo
                    ->whereDate("time_start", ">=", Carbon::now()->format("Y-m-d"))
                    ->whereDate("time_finish", "<=", Carbon::now()->format("Y-m-d"))
                    ->where('status', true);
            })->limit(8)->get() ?? [];
    }
    public function render()
    {
        return view('livewire.component-page.promotional-banner-component');
    }
}
