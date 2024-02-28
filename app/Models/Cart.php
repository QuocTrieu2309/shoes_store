<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'created_date'
    ];
    public function cartDetails (){
        return $this->hasMany(CartDetail::class);
    }
    public function productDetails()
    {
        return $this->hasManyThrough(ProductDetail::class, CartDetail::class, 'cart_id', 'id', 'id', 'product_detail_id');
    }
    protected static function booted()
    {
        static::deleting(function ($cart) {
            $cart->cartDetails()->delete();
        });
    }
}
