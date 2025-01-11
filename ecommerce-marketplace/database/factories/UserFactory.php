<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => $this->faker->optional()->dateTime(),
            'password' => bcrypt('123456789'), // Default password
            'phone_number' => $this->faker->optional()->phoneNumber(),
            'type' => $this->faker->randomElement(['buyer', 'seller']),
            'profile_picture' => $this->faker->optional()->imageUrl(),
            'ewallet_balance' => $this->faker->randomFloat(2, 0, 10000), // Balance up to 10k
            'activation' => $this->faker->boolean(),
            'remember_token' => Str::random(10),
        ];
    }

    public function buyer()
    {
        return $this->state(fn () => ['type' => 'buyer']);
    }

    public function seller()
    {
        return $this->state(fn () => ['type' => 'seller']);
    }

    public function admin()
    {
        return $this->state(fn () => ['type' => 'admin']);
    }
}
