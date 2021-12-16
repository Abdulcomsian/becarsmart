<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WhySellCarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('why_sell_cars')->insert([
            'title' => 'Why sell your car with BeCarSmart.com?',
            'message' => 'Whether it`s time for you to upgrade your car or you simply don`t need your vehicle anymore, you will want to know how much your car is worth. Our free car valuation tool provides you with a valuation in under 60 seconds - simply enter your reg plate and a few details about your car for an accurate valuation. If you’re happy with your valuation, you can sell your car in less than an hour by booking an appointment at your local branch, which is less than 15 minutes away on average.',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
