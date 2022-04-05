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
                'file' => 'enter_reg.png',
                'title' => 'Enter Your Reg',
                'exceed' => 'Enter Your Reg and follow the steps, answer the questions to the best of your knowledge.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],

            [
                'file' => 'valuation.png',
                'title' => 'Get Your Valuation!',
                'exceed' => 'We will get in-touch via email or phone call.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],

            [
                'file' => 'deal.png',
                'title' => 'Accept Your Quote and Arrange for Completion!',
                'exceed' => 'Once you`re happy with the price for your vehicle you can get in-touch with us and arrange a date to complete the deal',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'file' => 'sale_complete.png',
                'title' => 'Sale Complete - Get Paid',
                'exceed' => 'The best part - GETTING PAID! Before your vehicle is out of your site!',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],

        ];

        $data1 = [
            'header' => 'How it Works?',
            'sub_header' => '4 Easy Steps',
        ];
        HowItWorkHeader::create($data1);
        foreach ($data as $data) {

            HowItWorkSection::create($data);
        }
    }
}
