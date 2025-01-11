<?php
namespace Database\Factories;

use App\Models\Product;
use App\Models\Review;
use App\Models\Seller;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * The model associated with the factory.
     *
     * @var string
     */
    protected $model = Review::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $related = $this->faker->randomElement([
            Product::class,
            Seller::class,
        ]);

        return [
            'buyer_id' => User::factory(), // Assumes User model for buyers
            'related_type' => $related,
            'related_id' => $related::factory(), // Generates a related Product or Seller and gets its ID
            'rating' => $this->faker->numberBetween(1, 5), // Generates a rating between 1 and 5
            'review_text' => $this->faker->sentence(), // Generates a random review text
        ];
    }
}
