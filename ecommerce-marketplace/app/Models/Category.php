<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'status'];

    public function subcategory()
    {
        return $this->hasMany(Subcategory::class, 'category_id','id');
    }
    public function images()
    {
        return $this->morphMany(Image::class, 'related');
    }

    public function products()
    {
        return $this->hasManyThrough(Product::class, ProductCategoryLink::class, 'category_id', 'id', 'id', 'product_id');
    }
}
