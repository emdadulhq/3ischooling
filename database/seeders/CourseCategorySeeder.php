<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CourseCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('course_categories')->insert([
            'name' => 'Science',
            'slug' => 'science',
        ]);
       DB::table('course_categories')->insert([
            'name' => 'Technology',
            'slug' => 'technology',
        ]);
        DB::table('course_categories')->insert([
            'name' => 'Engineering ',
            'slug' => 'engineering ',
        ]);
        DB::table('course_categories')->insert([
            'name' => 'Mathematics',
            'slug' => 'mathematics',
        ]);
        DB::table('course_categories')->insert([
            'name' => 'Ict',
            'slug' => 'ict',
        ]);
    }
}
