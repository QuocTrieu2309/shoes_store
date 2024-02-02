<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    use HasFactory;
    const STATUS_NOT_DEL = 0;
    const STATUS_DEL = 1;
    protected $table = 'product_details';
    protected $fillable = [
        'product_id',
        'category_id',
        'image_id',
        'brand_id',
        'material_id',
        'color_id',
        'size_id',
        'sku',
        'quantity',
        'price',
        'promotional_price',
        'deleted'
    ];
    public static function boot(){
        parent::boot();
        static::creating(function ($product_detail) {
            $product_detail->deleted = self::STATUS_NOT_DEL ;
        });
    }
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function material(){
        return $this->belongsTo(Material::class);
    }
    public function color(){
        return $this->belongsTo(color::class);
    }
    public function size(){
        return $this->belongsTo(Size::class);
    }
    public function product(){
        return $this->belongsTo(Product::class);
    }
    public function image(){
        return $this->belongsTo(Image::class);
    }
    
}
