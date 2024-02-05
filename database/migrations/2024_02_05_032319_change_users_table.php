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
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('role_id')->nullable();
            $table->string('avarta')->nullable();
            $table->integer('deleted');
            $table->foreign('role_id')->references('id')->on('roles');
            
        });
        DB::table('users')->insert([
            'role_id'=>1,
            'name' => 'quoc trieu',
            'email'=>'kimtrieu9a@gmail.com',
            'deleted'=>0,
            'password'=> "0123456789"
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('avarta');
            $table->dropColumn('deleted');
            $table->dropForeign(['role_id']);
            $table->dropColumn('role_id');
    
        });
    }
};
