<?php

namespace App\Livewire\ComponentPage;

use App\Models\Category;
use Livewire\Component;

class HeaderNavbarComponent extends Component
{
    public $category = [];
    public $navbar = [];
    public function mount()
    {
        $category = Category::with('subcategory')->get();
        $this->category = $category->toArray();
        $this->navbar = [
            ['label'=>'Home', 'route'=>route('home'), 'url'=>'/'],
            ['label'=>'Catalog', 'route'=>route('catalog'), 'url'=>'/catalog'],
            ['label'=>'Seller', 'route'=>route('seller'), 'url'=>'/seller'],
        ];
    }
    public function render()
    {
        return view('livewire.component-page.header-navbar-component');
    }
}
