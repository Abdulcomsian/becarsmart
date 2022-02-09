<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\QuestionaireHeading;
use Illuminate\Support\Facades\DB;

class QuestionaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questionaire_headings')->insert([
            'sec_heading' => 'Want to Buy A Car?',
            'sec_subHeading' => 'Fill out the form and let us find a best car you want.',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        // $questionnaire = [
        //     [
        //         'sec_heading' => 'Want to Buy A Car?',
        //         'sec_subHeading' => 'Fill out the form and let us find a best car you want.',
        //         'created_at' => date("Y-m-d H:i:s"),
        //         'updated_at' => date("Y-m-d H:i:s"),
        //     ],

        //     [
        //         'sec_heading' => 'Want to Buy A Car?',
        //         'sec_subHeading' => 'Fill out the form and let us find a best car you want.',
        //         'created_at' => date("Y-m-d H:i:s"),
        //         'updated_at' => date("Y-m-d H:i:s"),
        //     ],

        //     [
        //         'sec_heading' => 'Want to Buy A Car?',
        //         'sec_subHeading' => 'Fill out the form and let us find a best car you want.',
        //         'created_at' => date("Y-m-d H:i:s"),
        //         'updated_at' => date("Y-m-d H:i:s"),
        //     ],

        //     [
        //         'sec_heading' => 'Want to Buy A Car?',
        //         'sec_subHeading' => 'Fill out the form and let us find a best car you want.',
        //         'created_at' => date("Y-m-d H:i:s"),
        //         'updated_at' => date("Y-m-d H:i:s"),
        //     ],

        // ];

        // foreach ($questionnaire as $data) {

        //     QuestionaireHeading::create($data);
        // }
    }
}
