<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Seller;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        // Kumpulan brand berdasarkan kategori
        $brands = [
            'electronic' => [
                'Apple', 'Samsung', 'Sony', 'LG', 'Panasonic', 'Philips', 'Sharp', 'Toshiba',
                'Dell', 'HP', 'Lenovo', 'Asus', 'Acer', 'Microsoft', 'Google', 'Huawei',
                'Xiaomi', 'Oppo', 'Vivo', 'OnePlus', 'Nokia', 'Motorola', 'Canon', 'Nikon',
                'Fujifilm', 'GoPro', 'JBL', 'Bose', 'Sennheiser', 'Beats', 'Razer', 'Corsair',
                'Alienware', 'MSI', 'Intel', 'AMD', 'NVIDIA', 'Logitech', 'Epson', 'Brother',
                'Casio', 'Anker', 'Dyson', 'Bang & Olufsen', 'Harman Kardon', 'Seagate',
                'Western Digital', 'Kingston', 'Sandisk', 'TP-Link', 'Netgear', 'ZTE', 'Realme'
            ],
            'fashion' => [
                'Gucci', 'Louis Vuitton', 'Chanel', 'Prada', 'Hermès', 'Dior', 'Versace',
                'Balenciaga', 'Fendi', 'Givenchy', 'Supreme', 'Off-White', 'A Bathing Ape (BAPE)',
                'Nike', 'Adidas', 'Puma', 'Reebok', 'New Balance', 'Under Armour', 'Fila', 'Champion',
                'Zara', 'H&M', 'Uniqlo', 'Levi\'s', 'Wrangler', 'Guess', 'Diesel', 'True Religion',
                'Stone Island', 'Columbia', 'Patagonia', 'Allbirds', 'Reformation', 'TOMS'
            ],
            'property' => [
                'Marriott International', 'Hilton Worldwide', 'InterContinental Hotels Group (IHG)',
                'Hyatt Hotels Corporation', 'Accor Hotels', 'Wyndham Hotels & Resorts',
                'Radisson Hotel Group', 'Four Seasons Hotels and Resorts', 'The Ritz-Carlton',
                'Fairmont Hotels and Resorts', 'Shangri-La Hotels and Resorts', 'Mandarin Oriental Hotel Group',
                'Rosewood Hotels & Resorts', 'St. Regis Hotels & Resorts', 'Aman Resorts', 'Six Senses Hotels Resorts Spas'
            ]
        ];

        // Tentukan tipe produk secara acak
        $type = $this->faker->randomElement(['electronic', 'fashion', 'property']);

        // Pilih brand berdasarkan tipe produk
        $brand = isset($brands[$type]) ? $this->faker->randomElement($brands[$type]) : null;

        return [
            'seller_id' => Seller::factory(),
            'name' => $this->faker->word(),
            'slug' => $this->faker->unique()->slug(),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->randomFloat(2, 10, 1000),
            'stock' => $this->faker->numberBetween(0, 500),
            'rating' => $this->faker->randomFloat(2, 0, 5),
            'discount' => $this->faker->randomFloat(2, 0, 5),
            'status' => $this->faker->randomElement(['active', 'inactive']),
            'type' => $type,
            'brand' => $brand,
            'payment_availablelity' => $this->faker->randomElement(['credit_card', 'bank_transfer', 'e-wallet', 'cod']),
            'promotion_set' => $this->faker->numberBetween(0, 5),
            'promotion_get' => $this->faker->numberBetween(0, 5),
        ];
    }
}
