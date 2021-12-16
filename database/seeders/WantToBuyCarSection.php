<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Home\QuestionnaireModel;

class WantToBuyCarSection extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questionnaire = [
            [
                'sec_heading' => 'Want to Buy A Car?',
                'sec_subHeading' => 'Fill out the form and let us find a best car you want.',
                'question' => 'What is your name?',
                'placeholder' => 'Enter your name',
                'step' => '1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],

            [
                'sec_heading' => 'Want to Buy A Car?',
                'sec_subHeading' => 'Fill out the form and let us find a best car you want.',
                'question' => 'Where are you from?',
                'placeholder' => 'Country name',
                'step' => '2',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],

            [
                'sec_heading' => 'Want to Buy A Car?',
                'sec_subHeading' => 'Fill out the form and let us find a best car you want.',
                'question' => 'How old are you?',
                'placeholder' => 'Enter your age',
                'step' => '3',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],

            [
                'sec_heading' => 'Want to Buy A Car?',
                'sec_subHeading' => 'Fill out the form and let us find a best car you want.',
                'question' => 'How did you heard about us?',
                'placeholder' => 'e.g Social media',
                'step' => '4',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],

        ];

        foreach ($questionnaire as $data) {

            QuestionnaireModel::create($data);
        }
    }
}
