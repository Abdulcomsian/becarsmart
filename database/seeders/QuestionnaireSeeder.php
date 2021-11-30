<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionnaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questionnaire')->insert([
        'sec_heading' => 'Want to Buy A Car?',
        'sec_subHeading' =>  'Fill out the form and let us find a best car you want.',
        'question' =>  'Hey, What is your good name',
        'placeholder' =>  'e.g John Doe',
        'step' =>  1,
        ]);
        
    }
}
