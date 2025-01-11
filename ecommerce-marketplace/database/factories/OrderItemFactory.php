<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderItemFactory extends Factory
{
    protected $model = OrderItem::class;

    public function definition()
    {
        return [
            'order_id' => Order::factory()->hasBuyer(1)->hasPayment(1)->hasShipping(1),
            'product_id' => Product::factory()->hasCategory(2)->hasSubcategory(5)->hasImages(5),
            'qty' => $this->faker->numberBetween(1, 50),
            'item_price' => $this->faker->randomFloat(2, 10, 1000),
            'total_price' => $this->faker->randomFloat(2, 10, 1000),
        ];
    }
}
