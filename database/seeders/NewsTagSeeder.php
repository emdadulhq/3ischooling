<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news_tags')->insert([
            'name' => 'Science',
            'slug' => 'science',
        ]);
       DB::table('news_tags')->insert([
            'name' => 'Technology',
            'slug' => 'technology',
        ]);
        DB::table('news_tags')->insert([
            'name' => 'Engineering ',
            'slug' => 'engineering ',
        ]);
        DB::table('news_tags')->insert([
            'name' => 'Mathematics',
            'slug' => 'mathematics',
        ]);
        DB::table('news_tags')->insert([
            'name' => 'Ict',
            'slug' => 'ict',
        ]);
    }
}
