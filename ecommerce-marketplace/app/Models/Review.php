<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'buyer_id',
        'related_type',
        'related_id',
        'rating',
        'review_text',
    ];

    public function buyer()
    {
        return $this->belongsTo(User::class, 'buyer_id');
    }

    public function related()
    {
        return $this->morphTo();
    }
}
