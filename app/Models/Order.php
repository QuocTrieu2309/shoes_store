<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    const STATUS_NOT_DEL = 0;
    const STATUS_DEL = 1;
    const VNPAY_METHOD = 'Vnpay';
    const RECEIVE_METHOD = 'Thanh toán khi nhận hàng';
    const STATUS_PENDING_CONFIRM = "PENDING-CONFIRMATION";
    const STATUS_PROCESS = "PROCESSING";
    const STATUS_COMPLETE = "COMPLETED";
    const STATUS_CANCELL = "CANCELLED";
    const STATUS_PAID_PENDING_CONFIRM = "PAID_PENDING-CONFIRMATION";
    const STATUS_PAID_PROCESS = "PAID_PROCESSING";
    const STATUS_PAID_COMPLETE = "PAID_COMPLETED";
    const STATUS_PAID_CANCELL = "PAID_CANCELLED";
    
    protected $fillable = [
          'user_id',
          'total_money',
          'status',
          'payment_method',
          'address',
          'deleted'
    ];
    public static function boot(){
        parent::boot();
        static::creating(function ($order){
         $order->deleted = self::STATUS_NOT_DEL;
        });
    }
    public function transaction(){
        return $this->hasOne(Transaction::class);
    }
    public function orderDetails(){
       return $this->hasMany(OrderDetail::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    protected static function booted()
    {
        static::deleting(function ($order) {
            $order->orderDetails()->delete();
            $order->transaction()->delete();
        });
    }
}
