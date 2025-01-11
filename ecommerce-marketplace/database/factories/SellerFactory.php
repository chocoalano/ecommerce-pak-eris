<?php

namespace Database\Factories;

use App\Models\Seller;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class SellerFactory extends Factory
{
    protected $model = Seller::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'store_name' => $this->faker->unique()->company(),
            'description' => $this->faker->paragraph(),
            'logo' => $this->faker->optional()->imageUrl(),
            'store_address' => $this->faker->address(),
            'rating' => $this->faker->randomFloat(2, 0, 5), // Rating between 0-5
            'store_status' => $this->faker->randomElement(['active', 'suspended']),
        ];
    }
}
