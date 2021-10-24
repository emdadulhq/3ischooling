<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('questions')->insert([
            'mock_test_category_id' => 1,
            'question' => 'What is one of the big differences between traditional media and social media?',
            'choice1' =>'Option 1',     
            'choice2' =>'Option 2',     
            'choice3' =>'Option 3',     
            'choice4' =>'Option 4',     
            'answer' =>'choice2',     
         ]);
         DB::table('questions')->insert([
            'mock_test_category_id' => 2,
            'question' => 'What is one of the big differences between traditional media and social media?',
            'choice1' =>'Option 1',     
            'choice2' =>'Option 2',     
            'choice3' =>'Option 3',     
            'choice4' =>'Option 4',     
            'answer' =>'choice4',     
         ]);
         DB::table('questions')->insert([
            'mock_test_category_id' => 3,
            'question' => 'What is one of the big differences between traditional media and social media?',
            'choice1' =>'Option 1',     
            'choice2' =>'Option 2',     
            'choice3' =>'Option 3',     
            'choice4' =>'Option 4',     
            'answer' =>'choice3',     
         ]);
         
    }
}
