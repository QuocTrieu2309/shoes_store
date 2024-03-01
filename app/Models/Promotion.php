<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;
    const STATUS_NOT_DEL = 0;
    const STATUS_DEL = 1;
    const TYPE_PERCENT = 'Giảm theo phần trăm';
    const TYPE_PRICE = 'Giảm theo đồng giá';
    protected $table = 'promotions';
    protected $fillable = [
        'name',
        'type_promotion',
        'start_time',
        'end_time',
        'value',
        'description',
        'deleted'
    ];

    public static function boot() {
        parent::boot();
        static::creating(function ($promotion){
            $promotion->deleted = self::STATUS_NOT_DEL;
        });
    }
}
