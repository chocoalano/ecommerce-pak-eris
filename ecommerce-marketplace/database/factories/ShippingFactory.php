<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Shipping;
use App\Models\User;
use App\Models\Payment;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShippingFactory extends Factory
{
    protected $model = Shipping::class;

    public function definition()
    {
        return [
            'order_id'=>Order::factory(),
            'shipping_address'=>$this->faker->address(),
            'shipping_status'=>$this->faker->randomElement(['pending', 'shipped', 'delivered']),
            'shipping_date'=>$this->faker->dateTimeThisYear(),
            'tracking_number'=>$this->faker->randomNumber(5),
        ];
    }
}
