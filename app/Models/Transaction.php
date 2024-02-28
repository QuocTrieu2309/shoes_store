<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    const STATUS_NOT_DEL = 0;
    const STATUS_DEL = 1;
    protected $fillable = [
          'order_id',
          'total_money',
          'note',
          'deleted'
    ];
    public static function boot(){
        parent::boot();
        static::creating(function ($transaction){
         $transaction->deleted = self::STATUS_NOT_DEL;
        });
    }
    public function order(){
        return $this->belongsTo(Order::class);
    }
}
