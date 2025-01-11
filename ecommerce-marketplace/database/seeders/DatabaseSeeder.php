<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\Category;
use App\Models\EwalletTransaction;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\ProductCategoryLink;
use App\Models\Subcategory;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create Faker instance
        $faker = app(\Faker\Generator::class);

        Category::factory(5)
            ->has(
                Subcategory::factory()
                    ->count(5)
                    ->state(function (array $attributes, Category $parent_category) {
                        return [
                            'category_id' => $parent_category->id,
                        ];
                    })
                    ->hasImages(function (array $attributes, Subcategory $subcategory) {
                        return [
                            'related_type' => 'App\\Models\\Subcategory',
                            'related_id' => $subcategory->id,
                        ];
                    })
            )
            ->hasImages(function (array $attributes, Category $category) {
                return [
                    'related_type' => 'App\\Models\\Category',
                    'related_id' => $category->id,
                ];
            })
            ->create();

        // Create 100 Users and Sellers
        User::factory(5)
            ->hasEwalletTransactions(50, function (array $attributes, User $u) {
                if ($u->type === 'seller') {
                    return ['user_id' => $u->id];
                }
                return [];
            })
            ->has(
                Cart::factory()
                    ->count(5)
                    ->state(function (array $attributes, User $u) {
                        return $u->type === 'buyer' ? ['buyer_id' => $u->id] : [];
                    })
                    ->hasProducts(5),
                'cart' // Nama relasi pada model User
            )
            ->hasSeller(1, function (array $attributes, User $u) {
                return $u->type === 'seller' ? ['user_id' => $u->id] : [];
            })
            ->hasOrders(5, function (array $attributes, User $u) {
                return $u->type === 'buyer' ? ['buyer_id' => $u->id] : [];
            })
            ->has(
                Order::factory()
                    ->count(5)
                    ->state(function (array $attributes, User $u) {
                        return [
                            'buyer_id' => $u->id,
                        ];
                    })
                    ->hasItem(5)
                    ->hasShipping(1),
                'orders' // Nama relasi pada model User
            )
            ->hasReviews(5, function (array $attributes, User $u) {
                return ['buyer_id' => $u->id];
            })
            ->create();
        // Create an Admin User
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@tes.tes',
            'password' => bcrypt('123456789'),
            'type' => 'admin',
            'activation' => true,
            'remember_token' => Str::random(10),
        ]);
    }
}
