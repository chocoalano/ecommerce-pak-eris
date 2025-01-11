<?php

namespace App\Livewire\ComponentPage;

use App\Models\BannerHero;
use Livewire\Component;

class BannerHeroSliderComponent extends Component
{
    public $banner_hero;
    public function mount()
    {
        $this->banner_hero = BannerHero::with('seller')->where('status', true)->get() ?? [];
    }
    public function render()
    {
        return view('livewire.component-page.banner-hero-slider-component');
    }
}
