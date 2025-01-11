<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Payment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'order_id',
        'payment_method',
        'payment_status',
        'payment_date',
        'amount_paid',
    ];

    const PAYMENT_METHOD = [
        'credit_card' => 'Credit Card',
        'bank_transfer' => 'Bank Transfer',
        'e-wallet' => 'E-Wallet',
        'cod' => 'Cash On Delivery'
    ];
    const PAYMENT_STATUS = ['pending' => 'Pending', 'success' => 'Success', 'failed' => 'Failed'];

    public function order()
    {
        return $this->hasOne(Order::class, 'payment_id', 'id');
    }
}
