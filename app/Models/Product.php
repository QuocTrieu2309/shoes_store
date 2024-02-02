<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    const STATUS_NOT_DEL = 0;
    const STATUS_DEL = 1;
    protected $table = 'products';
    protected $fillable = [
        'name',
        'description',
        'deleted'
    ];
    public static function boot(){
        parent::boot();
        static::creating(function ($product) {
            $product->deleted = self::STATUS_NOT_DEL ;
        });
    }
    public function productDetails(){
        return $this->hasMany(ProductDetail::class);
    }
    public function getInfoAttribute(){
        $productDetails = $this->productDetails;
        $productDetail  = $productDetails->first();
            return [
                'image' => $productDetail->image ? $productDetail->image->url : null,
                'brand' => $productDetail->brand ? $productDetail->brand->name : null,
                'category' => $productDetail->category ? $productDetail->category->name : null,
                'material' => $productDetail->material ? $productDetail->material->name : null,
            ];
    
    }
}
