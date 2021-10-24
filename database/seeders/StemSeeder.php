<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('stems')->insert([
            'title' => 'Javascript Course',
            'slug' => 'javascript-course',
            'link' => 'https://www.youtube.com/embed/_lkw2xtNMmk',
            'details' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui',
            'stem_subject_id' =>1,
        ]);
       DB::table('stems')->insert([
            'title' => 'Javascript Course',
            'slug' => 'javascript-course',
            'link' => 'https://www.youtube.com/embed/_lkw2xtNMmk',
            'details' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui',
            'stem_subject_id' =>2,
        ]);
       DB::table('stems')->insert([
            'title' => 'Javascript Course',
            'slug' => 'javascript-course',
            'link' => 'https://www.youtube.com/embed/_lkw2xtNMmk',
            'details' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui',
            'stem_subject_id' =>3,
        ]);
       DB::table('stems')->insert([
            'title' => 'Javascript Course',
            'slug' => 'javascript-course',
            'link' => 'https://www.youtube.com/embed/_lkw2xtNMmk',
            'details' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui',
            'stem_subject_id' =>4,
        ]);
       DB::table('stems')->insert([
            'title' => 'Javascript Course',
            'slug' => 'javascript-course',
            'link' => 'https://www.youtube.com/embed/_lkw2xtNMmk',
            'details' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui',
            'stem_subject_id' =>5,
        ]);
       DB::table('stems')->insert([
            'title' => 'Javascript Course',
            'slug' => 'javascript-course',
            'link' => 'https://www.youtube.com/embed/_lkw2xtNMmk',
            'details' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui',
            'stem_subject_id' =>1,
        ]);
    }
}
