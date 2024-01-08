<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    const STATUS_NOT_DEL = 0;
    const STATUS_DEL = 1;
    protected $table = 'categories';
    protected $fillable = [
        'name',
        'deleted'
    ];
    public static function boot(){
        parent::boot();
        static::creating(function ($category){
         $category->deleted = self::STATUS_NOT_DEL;
        });
    }
}
