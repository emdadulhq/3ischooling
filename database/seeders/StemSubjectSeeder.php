<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StemSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('stem_subjects')->insert([
            'name' => 'Science',
            'slug' => 'science',
            'brief_details' => 'Information and Communication Technology yields tremendous benefits for individuals, institutions, and society at large. Questions surrounding safety, data privacy, sustainability, and trust can only be resolved by combining technical expertise with social and environmental awareness. All stakeholders in ICT must, therefore, be prepared to assume responsibility for all the changes that innovation can bring.',
            'photo' => 'ict.jpg'
        ]);
       DB::table('stem_subjects')->insert([
            'name' => 'Technology',
            'slug' => 'technology',
            'brief_details' => 'Information and Communication Technology yields tremendous benefits for individuals, institutions, and society at large. Questions surrounding safety, data privacy, sustainability, and trust can only be resolved by combining technical expertise with social and environmental awareness. All stakeholders in ICT must, therefore, be prepared to assume responsibility for all the changes that innovation can bring.',
            'photo' => 'practical.png'
        ]);
        DB::table('stem_subjects')->insert([
            'name' => 'Engineering ',
            'slug' => 'engineering ',
            'brief_details' => 'Information and Communication Technology yields tremendous benefits for individuals, institutions, and society at large. Questions surrounding safety, data privacy, sustainability, and trust can only be resolved by combining technical expertise with social and environmental awareness. All stakeholders in ICT must, therefore, be prepared to assume responsibility for all the changes that innovation can bring. ',
            'photo' => 'ict.jpg'
        ]);
        DB::table('stem_subjects')->insert([
            'name' => 'Mathematics',
            'slug' => 'mathematics',
            'brief_details' => 'Information and Communication Technology yields tremendous benefits for individuals, institutions, and society at large. Questions surrounding safety, data privacy, sustainability, and trust can only be resolved by combining technical expertise with social and environmental awareness. All stakeholders in ICT must, therefore, be prepared to assume responsibility for all the changes that innovation can bring.',
            'photo' => 'kids.jpg'
        ]);
        DB::table('stem_subjects')->insert([
            'name' => 'Mathematics',
            'slug' => 'mathematics',
            'brief_details' => 'Information and Communication Technology yields tremendous benefits for individuals, institutions, and society at large. Questions surrounding safety, data privacy, sustainability, and trust can only be resolved by combining technical expertise with social and environmental awareness. All stakeholders in ICT must, therefore, be prepared to assume responsibility for all the changes that innovation can bring.',
            'photo' => 'ict.jpg'
        ]);
    }
}
