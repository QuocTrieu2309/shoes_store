<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;
    const STATUS_NOT_DEL = 0;
    const STATUS_DEL = 1;
    const STATUS_ACTIVE = 'Còn Hạn';
    const STATUS_INACTIVE = 'Hết Hạn';
    const TYPE_PRODUCT  = 'Sản Phẩm';
    const TYPE_BILL  = 'Đơn Hàng';
    protected $table = 'vouchers';
    protected $fillable = [
        'name',
        'start_time',
        'end_time',
        'quantity',
        'type',
        'status',
        'minimum_amount',
        'reduced_value',
        'deleted'
    ];
    public static function boot(){
        parent::boot();
        static::creating(function ($voucher){
         $voucher->deleted = self::STATUS_NOT_DEL;
        });
    }
    public function userVouchers(){
        return $this->hasMany(UserVoucher::class);
    }
}
