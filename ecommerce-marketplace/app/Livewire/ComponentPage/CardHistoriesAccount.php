<?php

namespace App\Livewire\ComponentPage;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;
use Livewire\Component;

class CardHistoriesAccount extends Component
{
    use WithPagination;

    public function render()
    {
        // Retrieve the authenticated user
        $user = Auth::user();

        // Query products that the user has ordered
        $histories = Product::with(['seller', 'reviews', 'images', 'orders'])
            ->whereHas('orders', function ($query) use ($user) {
                $query->where('buyer_id', $user->id);
            })
            ->paginate(10);

        // Return the view with the product histories
        return view('livewire.component-page.card-histories-account', [
            'histories' => $histories,
        ]);
    }
}
