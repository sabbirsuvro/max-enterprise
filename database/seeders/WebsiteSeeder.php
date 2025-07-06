<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class WebsiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('websites')->insert([
            'name'     => 'Max Enterprice',
            'slogan'   => 'MAX Enterprise has 10 years of experience in this work field. We provide the best cleaning service, packing, and movers, pest control service in Bangladesh, house painting service.',
            'address'  => 'House 123, Road 4, Dhaka, Bangladesh',
            'phone'    => '+8801712345678',
            'hour'     => 'Sat-Thu 9am-7pm',
            'email'    => 'info@mycompanybd.com',
            'fb'       => 'https://facebook.com/',
            'twitter'  => 'https://twitter.com/',
            'linkedin' => 'https://linkedin.com/',
            'insta'    => 'https://instagram.com/',
            'youtube'  => 'https://youtube.com/',
            'logo'     => 'logo.png',
            'icon'     => 'fav.png',
            'map'     => '!1m18!1m12!1m3!1d4339.0458223437445!2d90.38542030734764!3d23.865207627469122!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c41c96811713%3A0xc00d7b9173ec4adb!2z4KaJ4Kak4KeN4Kak4Kaw4Ka-IOCmuOCnh-CmleCnjeCmn-CmsCDgp6fgp6og4Kaq4Ka-4Kaw4KeN4KaV!5e0!3m2!1sen!2sbd!4v1751826118909!5m2!1sen!2sbd',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

