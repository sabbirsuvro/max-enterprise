<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('abouts')->insert([
            'img1' => 'uploads/images/img1.jpg',
            'img2' => 'uploads/images/img2.jpg',
            'img3' => 'uploads/images/img3.jpg',
            'video' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
            'year' => '18',
            'des' => '',
            'wptitle1' => 'Application/Contact',
            'wptitle2' => 'Meeting',
            'wptitle3' => 'WorkOrder',
            'wptitle4' => 'Cleaning',
            'wpdes1' => 'These services range from regular housekeeping tasks to deep cleaning, sanitation, & cleaning services.',
            'wpdes2' => 'These services range from regular housekeeping tasks to deep cleaning, sanitation, & cleaning services.',
            'wpdes3' => 'These services range from regular housekeeping tasks to deep cleaning, sanitation, & cleaning services.',
            'wpdes4' => 'These services range from regular housekeeping tasks to deep cleaning, sanitation, & cleaning services.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
