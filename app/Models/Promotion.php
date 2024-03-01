<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;
    const STATUS_NOT_DEL = 0;
    const STATUS_DEL = 1;
    protected $table = 'promotions';
    protected $fillable = [
        'name',
        'status'
    ];

    public static function boot() {
        parent::boot();
        static::creating(function ($promotion){
            $promotion->status = self::STATUS_NOT_DEL;
        });
    }
}
