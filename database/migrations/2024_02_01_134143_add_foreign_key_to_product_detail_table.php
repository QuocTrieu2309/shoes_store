<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('product_details', function (Blueprint $table) {
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('material_id')->references('id')->on('materials');
            $table->foreign('color_id')->references('id')->on('colors');
            $table->foreign('size_id')->references('id')->on('sizes');
            $table->foreign('image_id')->references('id')->on('images');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('product_details', function (Blueprint $table) {
            $table->dropForeign(['brand_id']);
            $table->dropForeign(['product_id']);
            $table->dropForeign(['category_id']);
            $table->dropForeign(['material_id']);
            $table->dropForeign(['color_id']);
            $table->dropForeign(['size_id']);
            $table->dropForeign(['image_id']);
        });
    }
};
