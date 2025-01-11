<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Subcategory extends Model
{
    use HasFactory;
    protected $fillable = ['category_id', 'name', 'slug', 'status'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function images()
    {
        return $this->morphMany(Image::class, 'related');
    }
    public function products()
    {
        return $this->belongsToMany(Product::class,'product_subcategory_links','product_id','subcategory_id');
    }
}
