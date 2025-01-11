<?php

namespace Database\Factories;

use App\Models\Image;
use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Image::class;
    public function definition(): array
    {
        $related = $this->faker->randomElement([
            Product::class,
            Category::class,
            Subcategory::class,
        ]);

        return [
            'related_type' => $related,
            'related_id' => $related::factory(), // Generates a related model and assigns its ID
            'image' => $this->faker->imageUrl(640, 480, 'business', true, 'Faker'),
        ];
    }
}
