<?php

namespace Database\Factories;

use App\Models\EWalletTransaction;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EwalletTransactionFactory extends Factory
{
    protected $model = EwalletTransaction::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'transaction_type' => $this->faker->randomElement(['credit', 'debit']),
            'amount' => $this->faker->randomFloat(2, 1, 1000),
            'balance' => $this->faker->randomFloat(2, 0, 10000),
            'transaction_at' => $this->faker->optional()->dateTimeThisYear(),
        ];
    }
}
