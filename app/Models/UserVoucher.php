<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserVoucher extends Model
{
    use HasFactory;
    const STATUS_NOT_DEL = 0;
    const STATUS_DEL = 1;
    protected $table = 'user_vouchers';
    protected $fillable = [
        'voucher_id',
        'user_id',
        'deleted'
    ];
    public static function boot()
    {
        parent::boot();
        static::creating(function ($userVoucher) {
            $userVoucher->deleted = self::STATUS_NOT_DEL;
        });
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function voucher()
    {
        return $this->belongsTo(Voucher::class);
    }
}
