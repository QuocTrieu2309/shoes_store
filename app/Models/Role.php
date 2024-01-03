<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    const STATUS_ACTIVE = 'active';
    const STATUS_INACTIVE = 'inactive';
    protected $fillable = [
        'name',
        'status'
    ];

    public static function boot() {
        parent::boot();
        static::creating(function ($role){
            $role->status = self::STATUS_ACTIVE;
        });
    }
}
