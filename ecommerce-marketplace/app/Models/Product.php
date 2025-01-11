<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'seller_id',
        'name',
        'slug',
        'description',
        'price',
        'discount',
        'stock',
        'weight',
        'rating',
        'status',
        'type',
        'brand',
        'payment_availablelity',
        'promotion_set',
        'promotion_get',
        'primary_image',
    ];

    const STATUS = [
        'active' => 'Active',
        'inactive' => 'Inactive',
    ];
    const PAYMENT = [
        'credit_card' => 'Kartu kredit',
        'bank_transfer' => 'Transfer Bank',
        'e-wallet' => 'E-wallet',
        'cod' => 'Cash on delivery'
    ];
    const TYPE = [
        'electronic' => 'Elektronik',
        'grocery' => 'Makanan & Minuman',
        'fashion' => 'Pakaian',
        'property' => 'Properti',
    ];

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }

    public function category()
    {
        return $this->belongsToMany(Category::class, 'product_category_links', 'category_id', 'product_id');
    }
    public function subcategory()
    {
        return $this->belongsToMany(Subcategory::class, 'product_subcategory_links', 'subcategory_id', 'product_id');
    }
    public function color()
    {
        return $this->belongsToMany(Color::class, 'product_color', 'color_id', 'product_id');
    }
    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_items', 'order_id', 'product_id');
    }

    public function reviews()
    {
        return $this->morphMany(Review::class, 'related');
    }
    public function images()
    {
        return $this->morphMany(Image::class, 'related');
    }
}
