<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Client_pageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('client_pages')->insert([
        'title' => 'Creative Ventures with Clients',
        'desc' => "We're honored to have worked with such an inspiring group of clients, and we look forward to welcoming new collaborators into our creative community. If you're considering partnering with us, we'd love to discuss how we can bring your creative ideas to life.

",
        'flag' => 1
        ]);
    }
}
