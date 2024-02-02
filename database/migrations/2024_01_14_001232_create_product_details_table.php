<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('image_id')->nullable();
            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('material_id');
            $table->unsignedBigInteger('color_id');
            $table->unsignedBigInteger('size_id');
            $table->string('sku');
            $table->integer('quantity');
            $table->decimal('price',10,2);
            $table->decimal('promotional_price',10,2)->nullable();
            $table->integer('deleted');
            $table->timestamps();
        });
        DB::table('product_details')->insert([
            'product_id' => 1,
            'category_id'=>1,
            'image_id'=>1,
            'brand_id'=>1,
            'material_id'=>1,
            'color_id'=>1,
            'size_id'=>1,
            'sku'=>'12345678',
            'quantity'=>100,
            'price'=>100000,
            'deleted'=>0,
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_details');
    }
};
