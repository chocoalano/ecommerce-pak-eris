<?php

namespace Database\Seeders;

use App\Support\RajaOngkir;
use Illuminate\Database\Seeder;

class LocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // // Buat beberapa pengguna
        // User::factory(100)->create();
        // Seller::factory(50)->create();
        // // Data kategori

        // $categoriesData = [
        //     'Smartphone & Aksesoris',
        //     'Laptop & Komputer',
        //     'Televisi & Audio',
        //     'Kamera & Fotografi',
        //     'Peralatan Gaming',
        //     'Aksesoris Elektronik',
        //     'Peralatan Rumah Tangga Elektronik',
        //     'Pakaian Pria',
        //     'Sepatu Pria',
        //     'Aksesoris Pria',
        //     'Tas Pria',
        //     'Pakaian Wanita',
        //     'Sepatu Wanita',
        //     'Tas Wanita',
        //     'Aksesoris Wanita',
        //     'Pakaian Anak',
        //     'Sepatu Anak',
        //     'Aksesoris Anak',
        //     'Perawatan Wajah',
        //     'Perawatan Tubuh',
        //     'Makeup',
        //     'Parfum & Fragrance',
        //     'Suplemen Kesehatan',
        //     'Alat Kesehatan',
        //     'Makanan Instan',
        //     'Makanan Sehat',
        //     'Minuman Ringan',
        //     'Bumbu & Rempah',
        //     'Cemilan',
        //     'Kopi & Teh',
        //     'Peralatan Olahraga',
        //     'Sepatu & Pakaian Olahraga',
        //     'Camping & Hiking',
        //     'Aksesoris Gym',
        //     'Sepeda & Aksesoris',
        //     'Sparepart Kendaraan',
        //     'Aksesoris Mobil',
        //     'Aksesoris Motor',
        //     'Helm & Safety Gear',
        //     'Oli & Cairan Kendaraan',
        //     'Perabotan Rumah',
        //     'Dapur & Alat Masak',
        //     'Dekorasi Rumah',
        //     'Kebersihan Rumah',
        //     'Peralatan Kantor',
        //     'Pakaian Bayi',
        //     'Popok & Perawatan Bayi',
        //     'Mainan Anak',
        //     'Makanan Bayi',
        //     'Perlengkapan Tidur Bayi',
        //     'Musik & Instrumen',
        //     'Buku & Majalah',
        //     'Barang Koleksi',
        //     'Kerajinan Tangan',
        //     'Model Kit & Action Figure',
        //     'Voucher Game',
        //     'Pulsa & Paket Data',
        //     'Software & Lisensi',
        //     'E-Book',
        //     'Kursus Online',
        // ];

        // // Buat kategori dan simpan ke dalam array
        // $categories = [];
        // foreach ($categoriesData as $categoryName) {
        //     $categories[] = Category::create([
        //         'name' => $categoryName,
        //         'slug' => \Str::slug($categoryName),
        //         'status' => 'active',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ]);
        // }

        // // Buat beberapa produk dan hubungkan dengan kategori
        // Product::factory(1000)->create()->each(function ($product) use ($categories) {
        //     $product->category()->attach(
        //         $categories[array_rand($categories)]->id // Mengambil kategori acak
        //     );
        // });

        // // Buat beberapa pesanan
        // $orders = Order::factory(150)->create()->each(function ($order) {
        //     // Buat beberapa item pesanan untuk setiap pesanan
        //     OrderItem::factory(rand(1, 5))->create([
        //         'order_id' => $order->id,
        //         'product_id' => Product::inRandomOrder()->first()->id, // Menghubungkan dengan produk acak
        //     ]);
        // });

        // // Buat beberapa pembayaran untuk setiap pesanan
        // Payment::factory(150)->create()->each(function ($payment) {
        //     $payment->order_id = Order::inRandomOrder()->first()->id; // Menghubungkan dengan pesanan acak
        //     $payment->save();
        // });

        // // Buat beberapa keranjang untuk setiap pengguna
        // Cart::factory(100)->create()->each(function ($cart) {
        //     $cart->buyer_id = User::inRandomOrder()->first()->id; // Menghubungkan dengan pengguna acak
        //     $cart->product_id = Product::inRandomOrder()->first()->id; // Menghubungkan dengan produk acak
        //     $cart->save();
        // });
        // $seller = DB::table('sellers')
        //     ->get();

        // foreach ($seller as $index => $product) {
        //     DB::table('products')
        //         ->where('seller_id', '>=', 50) // Pastikan untuk menggunakan ID unik
        //         ->update(['seller_id' => $product->id]); // Mengupdate seller_id secara berurutan
        // }

        // // Inisialisasi Faker
        // $faker = Faker::create();
        // // Ambil semua provinsi dari RajaOngkir
        // $daftarProvinsi = RajaOngkir::provinsi()->all();
        // // Loop melalui semua seller
        // $sellers = Seller::all();
        // foreach ($sellers as $seller) {
        //     // Pilih provinsi secara acak
        //     $provinsi = $faker->randomElement($daftarProvinsi);
        //     $province = $provinsi['province_id'];
        //     // Ambil kota dari provinsi yang dipilih
        //     $daftarKota = RajaOngkir::kota()->dariProvinsi($provinsi['province_id'])->get();
        //     // Pilih kota secara acak
        //     $kota = $faker->randomElement($daftarKota);
        //     $city = $kota['city_id'];
        //     // Update kolom province dan city pada seller
        //     $seller->update([
        //         'province' => $province,
        //         'city' => $city,
        //     ]);
        // }
        // $this->call(LocationsSeeder::class);
        $daftarProvinsi = RajaOngkir::provinsi()->all();
        foreach ($daftarProvinsi as $provinceRow) {
            \App\Models\Province::create([
                'province_id' => $provinceRow['province_id'],
                'name' => $provinceRow['province'],
            ]);
            $daftarKota = RajaOngkir::kota()->dariProvinsi($provinceRow['province_id'])->get();
            foreach ($daftarKota as $cityRow) {
                \App\Models\City::create([
                    'province_id' => $provinceRow['province_id'],
                    'city_id' => $cityRow['city_id'],
                    'name' => $cityRow['city_name'],
                ]);
            }
        }
    }
}
