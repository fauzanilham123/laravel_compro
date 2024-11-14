<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusinessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
https://digo.id/
        DB::table('businesses')->insert([
            
                'logo' => 'Upload image',
                'title' => 'Mepy Entertainment',
                'desc' => 'Talent Management',
                'link' => 'insert link',
                'flag' => 1
            ]);
        DB::table('businesses')->insert([
            
                'logo' => 'Upload image',
                'title' => 'Mepy Records',
                'desc' => 'Music Label, Music Recording',
                'link' => 'insert link',
                'flag' => 1
            ]);
        DB::table('businesses')->insert([
            
                'logo' => 'Upload image',
                'title' => 'Digo ID',
                'desc' => '2D Animation News',
                'link' => 'digo.id',
                'flag' => 1
            ]);
        DB::table('businesses')->insert([
            
                'logo' => 'Upload image',
                'title' => 'Hepytech',
                'desc' => 'IT Consultant (Software Research and Development)',
                'link' => 'hepytech.com',
                'flag' => 1
            ]);
    }
}
