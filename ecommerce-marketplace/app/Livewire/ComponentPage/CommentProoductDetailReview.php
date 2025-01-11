<?php
namespace App\Livewire\ComponentPage;

use App\Models\Review;
use Livewire\Component;
use Livewire\WithPagination;

class CommentProoductDetailReview extends Component
{
    use WithPagination;

    public $product_id;

    /**
     * Render the component with paginated reviews.
     */
    public function render()
    {
        // Use paginate() for better support with pagination links
        $reviews = Review::with('buyer')
            ->where('related_type', 'App\Models\Product')
            ->where('related_id', $this->product_id)
            ->orderByDesc('created_at')
            ->simplePaginate(3);

        return view('livewire.component-page.comment-prooduct-detail-review', [
            'reviews' => $reviews,
        ]);
    }
}

