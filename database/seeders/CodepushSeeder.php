<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CodepushSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('codepushes')->insert([
            'header' => 'code push in header',
            'body' => 'code push in body',
            'footer' => 'code push in footer',
        ]);
    }
}
