<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = [
        'related_type',
        'related_id',
        'image'
    ];

    public function related()
    {
        return $this->morphTo();
    }
}
