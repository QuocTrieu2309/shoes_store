<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;
    const STATUS_NOT_DEL = 0;
    const STATUS_DEL = 1;
    protected $table = 'colors';
    protected $fillable = [
        'name',
        'deleted'
    ];
    public static function boot(){
        parent::boot();
        static::creating(function ($color){
         $color->deleted = self::STATUS_NOT_DEL;
        });
    }
}
