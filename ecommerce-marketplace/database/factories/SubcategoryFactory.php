<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductCategory>
 */
class SubcategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Subcategory::class;
    public function definition(): array
    {
        return [
            'category_id'=>Category::factory(),
            'name'=>$this->faker->unique()->name(),
            'slug'=>Str::slug($this->faker->name()),
            'status'=>$this->faker->randomElement(['active', 'inactive'])
        ];
    }
}
