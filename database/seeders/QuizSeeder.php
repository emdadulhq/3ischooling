<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quizzes')->insert([
            'mock_test_category_id' => 1,
            'question' => 'What does HTML stand for?',
            'choice1' =>'Hyper Tag Markup Language',
            'choice2' =>'Hyper Text Markup Language',
            'choice3' =>'Hyperlinks Text Mark Language',
            'choice4' =>'Hyperlinking Text Marking Language',
            'answer' =>2,
         ]);
         DB::table('quizzes')->insert([
            'mock_test_category_id' => 2,
            'question' => 'What does CSS stand for?',
            'choice1' =>'Computing Style Sheet',
            'choice2' =>'Creative Style System',
            'choice3' =>'Cascading Style Sheet',
            'choice4' =>'Creative Styling Sheet',
            'answer' =>3,
         ]);
         DB::table('quizzes')->insert([
            'mock_test_category_id' => 3,
            'question' => 'Where should a CSS file be referenced in a HTML file?',
            'choice1' =>'Before any HTML code',
            'choice2' =>'After all HTML code',
            'choice3' =>'Inside the head section',
            'choice4' =>'Inside the body section',
            'answer' =>3,
         ]);
         DB::table('quizzes')->insert([
            'mock_test_category_id' => 3,
            'question' => 'What is the correct format for aligning written content to the center of the page in CSS?',
            'choice1' =>'Text-align:center;',
            'choice2' =>'Font-align:center;',
            'choice3' =>'Text:align-center;',
            'choice4' =>'Font:align-center;',
            'answer' =>3,
         ]);
    }
}
