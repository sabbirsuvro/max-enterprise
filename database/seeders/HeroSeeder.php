<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('heroes')->insert([
            'bgimg' => 'hero-bg.jpg',
            'img' => 'hero_4_1.png',
            'title1' => 'We are here with',
            'title2' => 'Expert',
            'wave' => 'Cleaner',
            'project' => '5',
            'cleaner' => '10',
            'customer' => '1.5',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}



