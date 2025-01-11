<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductCategory>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Category::class;
    public function definition(): array
    {
        $category = ['Electronics', 'Fashion', 'Home & Furniture', 'Beauty & Personal Care', 'Sports & Outdoors', 'Books & Media', 'Toys & Baby Products', 'Groceries', 'Automotive', 'Health & Wellness'];
        return [
            'name'=>$this->faker->randomElement($category),
            'slug'=>Str::slug($this->faker->name()),
            'status'=>$this->faker->randomElement(['active', 'inactive'])
        ];
    }
}
