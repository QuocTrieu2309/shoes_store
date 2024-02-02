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
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_detail_id');
            $table->string('url');
            $table->integer('deleted');
            $table->timestamps();
        });
        DB::table('images')->insert([
            'product_detail_id' => '1',
            'url'=>'https://bold.vn/wp-content/uploads/2019/05/bold-academy-5.jpg',
            'deleted'=>0,
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
