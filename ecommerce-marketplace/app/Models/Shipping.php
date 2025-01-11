<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Shipping extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'shipping_address',
        'shipping_status',
        'shipping_date',
        'tracking_number',
    ];
    const STATUS = ['pending' => 'Pending', 'shipped' => 'Shipped', 'delivered' => 'Delivered'];

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }
}
