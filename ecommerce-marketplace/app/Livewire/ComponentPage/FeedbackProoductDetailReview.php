<?php

namespace App\Livewire\ComponentPage;

use App\Models\Review;
use Livewire\Component;

class FeedbackProoductDetailReview extends Component
{
    public $product_id;
    public $average = 0;
    public $stars_1 = 0;
    public $stars_2 = 0;
    public $stars_3 = 0;
    public $stars_4 = 0;
    public $stars_5 = 0;
    public $reviewers = 0;
    public function mount()
    {
        $this->average = Review::where('related_type', 'App\Models\Product')
            ->where('related_id', $this->product_id)
            ->avg('rating');  // Get the average rating

        // Count the number of reviews for each rating value (1 to 5)
        $this->stars_1 = Review::where('related_type', 'App\Models\Product')
            ->where('related_id', $this->product_id)
            ->where('rating', 1)
            ->count();

        $this->stars_2 = Review::where('related_type', 'App\Models\Product')
            ->where('related_id', $this->product_id)
            ->where('rating', 2)
            ->count();

        $this->stars_3 = Review::where('related_type', 'App\Models\Product')
            ->where('related_id', $this->product_id)
            ->where('rating', 3)
            ->count();

        $this->stars_4 = Review::where('related_type', 'App\Models\Product')
            ->where('related_id', $this->product_id)
            ->where('rating', 4)
            ->count();

        $this->stars_5 = Review::where('related_type', 'App\Models\Product')
            ->where('related_id', $this->product_id)
            ->where('rating', 5)
            ->count();

        // Count the number of unique reviewers (buyers)
        $this->reviewers = Review::where('related_type', 'App\Models\Product')
            ->where('related_id', $this->product_id)
            ->distinct('buyer_id')  // Count distinct buyers (reviewers)
            ->count('buyer_id');
    }
    public function render()
    {
        return view('livewire.component-page.feedback-prooduct-detail-review');
    }
}
