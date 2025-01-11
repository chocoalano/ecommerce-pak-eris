<?php

namespace App\Livewire\ComponentPage;

use Livewire\Component;

class HeaderTopComponent extends Component
{
    public $header_right = [];
    public $header_left = [];
    public function mount()
    {
        $this->header_right = [
            ["label" => "About us", "url" => "/"],
            ["label" => "Registration seller", "url" => route('filament.seller.auth.register')],
            ["label" => "Returns Policy", "url" => "/"],
        ];
        $this->header_left = [
            ["label" => "Help Center", "url" => "/"],
            ["label" => "Call Center", "url" => "/"],
            ["label" => "Account", "url" => route('account')],
        ];
    }
    public function render()
    {
        return view('livewire.component-page.header-top-component');
    }
}
