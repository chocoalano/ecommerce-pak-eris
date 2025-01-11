<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Color extends Model
{
    use HasFactory;

    protected $fillable = ['hexcode', 'colorname'];

    public function products()
    {
        return $this->hasManyThrough(Product::class, ProductCategoryLink::class, 'category_id', 'id', 'id', 'product_id');
    }
}
