<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('settings')->insert([
        'logo' => 'image',
        'no_telephone' => '(022) 87514100',
        'email' => 'Cs@hallobestie.com',
        'address' => 'Summarecon Bandung Magna Commercial mb 02 Rancabolang, Kec. Gedebage, Kota Bandung, Jawa Barat 40294',
        'working_hours' => 'Mon-Fri: 9am-8pm

Sat: 10am-6pm

Sun: Closed',
        'maps' => "https://www.google.com/maps/place/Hallo+Bestie/@-6.957609,107.709055,15z/data=!4m6!3m5!1s0x2e68ddbdc4d4c08b:0xd882026ed26cf46a!8m2!3d-6.9572682!4d107.6890139!16s%2Fg%2F11n5d74k16?hl=en-US&entry=ttu",
        'no_wa' =>'+62 819 1021 8498', 
        'link_fb' =>'masukkan link fb', 
        'link_ig' =>'masukkan link ig', 
        'link_twitter' =>'masukkan link twiter', 

        'flag' => 1
        ]);
    }
}
