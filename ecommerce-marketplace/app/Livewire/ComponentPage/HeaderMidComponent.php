<?php

namespace App\Livewire\ComponentPage;

use App\Models\Category;
use Livewire\Component;

class HeaderMidComponent extends Component
{
    public $category = [];
    public $category_selected;
    public $search;

    // Tambahkan aturan validasi
    protected $rules = [
        'category_selected' => 'required|exists:categories,slug',
        'search' => 'nullable|string|max:255',
    ];

    public function mount()
    {
        $this->category = Category::all()->toArray();
    }

    public function submit()
    {
        // Validasi data
        $this->validate();

        // Redirect dengan parameter yang divalidasi
        return redirect()->route("catalog", [
            "category" => $this->category_selected,
            "search" => $this->search
        ]);
    }

    public function render()
    {
        return view('livewire.component-page.header-mid-component');
    }
}
