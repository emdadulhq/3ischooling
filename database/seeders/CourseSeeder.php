<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('courses')->insert([
            'title' => 'Web Development',
            'slug' => 'development-course',
            'link' => 'https://www.youtube.com/embed/kWEvrHVg8kI',
            'details' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui',
            'course_categorie_id' =>1,
        ]);
       DB::table('courses')->insert([
            'title' => 'Basic Web Design',
            'slug' => 'basic-web-design',
            'link' => 'https://www.youtube.com/embed/_lkw2xtNMmk',
            'details' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui',
            'course_categorie_id' =>2,
        ]);
       DB::table('courses')->insert([
            'title' => 'Laravel Course',
            'slug' => 'laravel-course',
            'link' => 'https://www.youtube.com/embed/ojGbaJuQXe8',
            'details' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui',
            'course_categorie_id' =>3,
        ]);
       DB::table('courses')->insert([
            'title' => 'Javascript Course',
            'slug' => 'javascript-course',
            'link' => 'https://www.youtube.com/embed/_lkw2xtNMmk',
            'details' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui',
            'course_categorie_id' =>4,
        ]);
       DB::table('courses')->insert([
            'title' => 'SASS Crush Course',
            'slug' => 'sass-crush-course',
            'link' => 'https://www.youtube.com/embed/zPd6v1ZihWQ',
            'details' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui',
            'course_categorie_id' =>5,
        ]);

    }
}
