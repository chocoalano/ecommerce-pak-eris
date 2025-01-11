<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromoStoreOnlyEight extends Model
{
    /** @use HasFactory<\Database\Factories\PromoStoreOnlyEightFactory> */
    use HasFactory;
    protected $fillable = [
        'seller_id',
        'title',
        'text',
        'time_start',
        'time_end',
        'status',
    ];

    public function seller()
    {
        return $this->belongsTo(Seller::class, 'seller_id');
    }
}
