<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeroSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hero_sections')->insert([
            'header' => 'Sell Any Car Instantly',
            'sub_header' => 'No.1 Car Buying Service',
            'text' => 'Trusted, Easy & Secure Way to Sell your car',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
