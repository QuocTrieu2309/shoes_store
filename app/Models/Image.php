<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    const STATUS_NOT_DEL = 0;
    const STATUS_DEL = 1;
    protected $table = 'images';
    protected $fillable = [
        'product_detail_id',
        'url',
        'deleted'
    ];
    public static function boot(){
        parent::boot();
        static::creating(function ($image){
         $image->deleted = self::STATUS_NOT_DEL;
        });
    }
    public function productDetail(){
        return $this->hasOne(ProductDetail::class);
    }
}
