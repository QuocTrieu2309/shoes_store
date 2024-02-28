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
        Schema::create('vouchers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->integer('quantity');
            $table->string('type');
            $table->string('status');
            $table->decimal('minimum_amount',10,2);
            $table->decimal('reduced_value');
            $table->integer('deleted');
            $table->timestamps();
        });
        DB::table('vouchers')->insert([
            'name'=>'Nganct04',
            'start_time' => now(),
            'end_time'=>now()->addDay(),
            'quantity'=>'10',
            'type'=> "Sản Phẩm",
            'status'=>'Còn Hạn',
            'minimum_amount'=>100000,
            'reduced_value'=>10000,
            'deleted'=>0
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vouchers');
    }
};
