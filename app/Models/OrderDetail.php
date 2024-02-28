<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    const STATUS_NOT_DEL = 0;
    const STATUS_DEL = 1;
    protected $fillable = [
          'order_id',
          'product_detail_id',
          'quantity',
          'price',
          'deleted'
    ];
    public static function boot(){
        parent::boot();
        static::creating(function ($orderDetail){
         $orderDetail->deleted = self::STATUS_NOT_DEL;
        });
    }
    public function order(){
        return $this->belongsTo(Order::class);
    }
    public function productDetail(){
        return $this->belongsTo(ProductDetail::class);
    }
}
