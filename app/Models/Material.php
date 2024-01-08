<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;
    use HasFactory;
    const STATUS_NOT_DEL = 0;
    const STATUS_DEL = 1;
    protected $table = 'materials';
    protected $fillable = [
        'name',
        'deleted'
    ];
    public static function boot(){
        parent::boot();
        static::creating(function ($material){
         $material->deleted = self::STATUS_NOT_DEL;
        });
    }
}
