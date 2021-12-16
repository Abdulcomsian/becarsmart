<?php

namespace Database\Seeders;

use App\Models\Home\HowItWorkSection;
use Illuminate\Database\Seeder;

class HowItWorksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data = [
            [
                'header' => 'How it Works?',
                'sub_header' => '3 Easy Steps',
                'file' => 'book-appointment.png',
                'title' => 'Value your Car',
                'exceed' => 'Get a free no obligation valuation above.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],

            [
                'header' => 'How it Works?',
                'sub_header' => '3 Easy Steps',
                'file' => 'book-appointment.png',
                'title' => 'Book Apointment',
                'exceed' => 'Get a free no obligation valuation above.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],

            [
                'header' => 'How it Works?',
                'sub_header' => '3 Easy Steps',
                'file' => 'book-appointment.png',
                'title' => 'Book Apointment',
                'exceed' => 'Get a free no obligation valuation above.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],

        ];

        foreach ($data as $data) {

            HowItWorkSection::create($data);
        }
    }
}
