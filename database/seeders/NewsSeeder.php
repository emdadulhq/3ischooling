<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('news')->insert([
            'title' => 'Science',
            'slug' => 'science',
            'details' => 'Information and Communication Technology yields tremendous benefits for individuals, institutions, and society at large. Questions surrounding safety, data privacy, sustainability, and trust can only be resolved by combining technical expertise with social and environmental awareness. All stakeholders in ICT must, therefore, be prepared to assume responsibility for all the changes that innovation can bring.',
            'ftd_img' => 'ict.jpg',
            'news_tag_id' => '1'
        ]);
       DB::table('news')->insert([
            'title' => 'Technology',
            'slug' => 'technology',
            'details' => 'Information and Communication Technology yields tremendous benefits for individuals, institutions, and society at large. Questions surrounding safety, data privacy, sustainability, and trust can only be resolved by combining technical expertise with social and environmental awareness. All stakeholders in ICT must, therefore, be prepared to assume responsibility for all the changes that innovation can bring.',
            'ftd_img' => 'practical.png',
            'news_tag_id' => '2'
        ]);
        DB::table('news')->insert([
            'title' => 'Engineering ',
            'slug' => 'engineering ',
            'details' => 'Information and Communication Technology yields tremendous benefits for individuals, institutions, and society at large. Questions surrounding safety, data privacy, sustainability, and trust can only be resolved by combining technical expertise with social and environmental awareness. All stakeholders in ICT must, therefore, be prepared to assume responsibility for all the changes that innovation can bring. ',
            'ftd_img' => 'ict.jpg',
            'news_tag_id' => '3'
        ]);
        DB::table('news')->insert([
            'title' => 'Mathematics',
            'slug' => 'mathematics',
            'details' => 'Information and Communication Technology yields tremendous benefits for individuals, institutions, and society at large. Questions surrounding safety, data privacy, sustainability, and trust can only be resolved by combining technical expertise with social and environmental awareness. All stakeholders in ICT must, therefore, be prepared to assume responsibility for all the changes that innovation can bring.',
            'ftd_img' => 'kids.jpg',
            'news_tag_id' => '4'
        ]);
        DB::table('news')->insert([
            'title' => 'Mathematics',
            'slug' => 'mathematics',
            'details' => 'Information and Communication Technology yields tremendous benefits for individuals, institutions, and society at large. Questions surrounding safety, data privacy, sustainability, and trust can only be resolved by combining technical expertise with social and environmental awareness. All stakeholders in ICT must, therefore, be prepared to assume responsibility for all the changes that innovation can bring.',
            'ftd_img' => 'ict.jpg',
            'news_tag_id' => '4'
        ]);
    }
}
