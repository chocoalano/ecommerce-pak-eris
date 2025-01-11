<?php

namespace App\Livewire\ComponentPage;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ShopCatalogComponent extends Component
{
    use WithPagination;

    public $selectedCategory = null;
    public $selectedSubcategory = null;

    protected $queryString = ['selectedCategory'];

    public function updatingSelectedCategory()
    {
        $this->resetPage();
    }

    public function filter($category, $subcategory)
    {
        $this->selectedCategory = $category;
        $this->selectedSubcategory = $subcategory;
    }
    public function add_cart($product_id)
    {
        dd($product_id);
    }
    public function render()
    {
        $categories = Category::with('subcategory')->get();
        $products = Product::when($this->selectedCategory, function ($query) {
            $query->whereHas('category', function ($cat) {
                $cat->where('slug', $this->selectedCategory);
            })
                ->when($this->selectedSubcategory, function ($query) {
                    $query->whereHas('subcategory', function ($sub) {
                        $sub->where('slug', $this->selectedSubcategory);
                    });
                });
        })->paginate(20);
        return view('livewire.component-page.shop-catalog-component', [
            'categories' => $categories,
            'products' => $products,
        ]);
    }
}
