<?php

namespace Database\Seeders;

use App\Models\Home\HowItWorkSection;
use App\Models\HowItWorkHeader;
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
                'file' => 'book-appointment.png',
                'title' => 'Value your Car',
                'exceed' => 'Get a free no obligation valuation above.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],

            [
                'file' => 'book-appointment.png',
                'title' => 'Book Apointment',
                'exceed' => 'Get a free no obligation valuation above.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],

            [
                'file' => 'book-appointment.png',
                'title' => 'Book Apointment',
                'exceed' => 'Get a free no obligation valuation above.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],

        ];

        $data1 = [
            'header' => 'How it Works?',
            'sub_header' => '3 Easy Steps',
        ];
        HowItWorkHeader::create($data1);
        foreach ($data as $data) {

            HowItWorkSection::create($data);
        }
    }
}
