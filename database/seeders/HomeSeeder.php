<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('homes')->insert([
        'desc_section_1' => 'We are here as a digital company that aims to be the most complete and professional digital service provider in Indonesia, we care about our clients.',
        'count_bussines' => '10+',
        'count_member' => '120+',
        'count_client' => '350+',
        'count_project' => '1254+',
        'flag'=>'1',
        ]);
    }
}
