<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EvolutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('evolutions')->insert([
            
                'years_record' => '2011',
                'desc' => 'We managed to solve the algorithm of reach #1st trending topic on twitter, at The end we provide twitter trending topic services.',
                'flag' => 1
            ]);
        DB::table('evolutions')->insert([
            
                'years_record' => '2011-2017',
                'desc' => 'Twitter’s trending topic is our main product, in collaborations with various companies by trusting our service to expand the reach of their promotion up to 31M.',
                'flag' => 1
            ]);
        DB::table('evolutions')->insert([
            
                'years_record' => '2018',
                'desc' => 'We developed buzzer services to several other platforms such an Instagram, Tiktok, Youtube,E-commerce which focuses on promoting campaigns, as well as SMM Panel services to make social media platforms grow.',
                'flag' => 1
            ]);
        DB::table('evolutions')->insert([
            
                'years_record' => '2019-Present',
                'desc' => 'We developed into a company named PT Hallo Bestie Widjaya Brand Hallo Bestie , to be part of the solution need by the client as a whole.',
                'flag' => 1
            ]);
    }
}
