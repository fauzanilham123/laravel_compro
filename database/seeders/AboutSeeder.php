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
        //

        DB::table('abouts')->insert([
            'desc' => 'We are here as a digital company that aims to be the most complete and professional digital service provider in Indonesia, we care about our clients.',
            'desc_about' => 'We come as your partner who helps and provides solutions for developing digital marketing platforms, especially social media which is currently developing. And we are the only company that provides #Trending Topic Twitter services since 2011 with guarantee.',
            'image' => 'insert image',
            'vision' => 'To be The Leading Provider of Top-Quality and Professional Digital Company & Promotion Service in The Country ',
            'misi' => 'We do business with integrity, honesty, and professionalism.

We care about our clients and aim to give them the best service possible.

We are committed to supporting your growing business.',
            'flag' => 1
        ]);
    }
}
