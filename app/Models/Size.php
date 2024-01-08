<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;
    const STATUS_NOT_DEL = 0;
    const STATUS_DEL = 1;
    protected $table = 'sizes';
    protected $fillable = [
        'name',
        'deleted'
    ];
    public static function boot(){
        parent::boot();
        static::creating(function ($size){
         $size->deleted = self::STATUS_NOT_DEL;
        });
    }
}
