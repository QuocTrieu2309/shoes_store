<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\Promotion::factory()->create([
            'name' => 'Giam gia khuyen mai Giang Sinh',
            'type_promotion'=> 'Giảm theo phần trăm',
            'start_time'=> now(),
            'end_time'=> now()->addDay(),
            'value'=>20,
            'description'=>"Khuyen mai dac biet",
            'deleted'=> 0
        ]);
    }
}
