<form wire:submit.prevent="submitReview">
    <h6 class="mb-24">Write a Review</h6>
    <span class="text-heading mb-8">
        What is it like to Product?
    </span>

    <!-- Rating Input -->
    <x-rating name="form.rating" wire:model="form.rating" />

    <!-- Review Content -->
    <x-textarea name="form.comment" label="Review Comment" required="true" placeholder="Share your thoughts about the product"
        wire:model="form.comment" />

    <!-- Submit Button -->
    <button type="submit" class="btn btn-main rounded-[50rem] mt-48">
        Submit Review
    </button>
</form>
