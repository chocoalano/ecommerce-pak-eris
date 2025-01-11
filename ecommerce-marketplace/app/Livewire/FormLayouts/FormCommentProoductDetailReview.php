<?php
namespace App\Livewire\FormLayouts;

use App\Models\Review;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class FormCommentProoductDetailReview extends Component
{
    public $product_id;
    public $form = [
        'rating' => null,
        'comment' => ''
    ];

    // Validation rules for the form
    protected $rules = [
        'form.rating' => 'required|numeric|min:1|max:5',
        'form.comment' => 'required|string|max:255',
    ];

    // Submit the review
    public function submitReview()
    {
        // Validate form data
        $this->validate();

        // Ensure the user is authenticated before submitting the review
        if (Auth::check()) {
            // Create a new review in the database
            Review::create([
                'related_type' => 'App\Models\Product', // Can be dynamic if needed
                'related_id' => $this->product_id, // Assuming you are passing product_id dynamically
                'rating' => $this->form['rating'],
                'review_text' => $this->form['comment'],
                'buyer_id' => Auth::user()->id,
            ]);
            // Optionally reset the form after submission
            $this->resetForm();
        } else {
            session()->flash('error', 'You must be logged in to submit a review.');
        }
    }

    // Reset the form fields after submission
    private function resetForm()
    {
        $this->form = [
            'rating' => null,
            'comment' => ''
        ];
    }

    public function render()
    {
        return view('livewire.form-layouts.form-comment-prooduct-detail-review');
    }
}
