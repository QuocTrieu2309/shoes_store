<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_detail_id',
        'cart_id',
        'quantity'
    ];
    public function cart(){
        return $this->belongsTo(Cart::class);
    }
    public function productDetail(){
        return $this->belongsTo(ProductDetail::class);
    }
}
