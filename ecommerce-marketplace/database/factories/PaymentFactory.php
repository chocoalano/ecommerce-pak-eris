<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\User;
use App\Models\Payment;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    protected $model = Payment::class;

    public function definition()
    {
        return [
            'payment_method' => $this->faker->randomElement(['credit_card', 'bank_transfer', 'e-wallet', 'cod']),
            'payment_status' => $this->faker->randomElement(['pending', 'success', 'failed']),
            'payment_date' => $this->faker->dateTimeThisYear(),
            'amount_paid' => $this->faker->randomFloat(2, 50, 1000),
        ];
    }
}
