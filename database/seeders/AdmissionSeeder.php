<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdmissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('admissions')->insert([
            'title' => 'Ivy Day Student Speech - Syeda Zainab Aqdas Rizvi',
            'slug' => 'Ivy-Day-Student-Speech-Syeda-Zainab-Aqdas-Rizvi',
            'link' => 'https://www.youtube.com/embed/_lkw2xtNMmk',
            'details' => 'Syeda Zainab Aqdas Rizvi, a member of the Class of 2018, delivered the student speech at Smith College’s Ivy Day celebration on Saturday, May 19.',
            'admission_subject_id' => 1,
        ]);
        DB::table('admissions')->insert([
            'title' => 'Ivy Day Student Speech - Syeda Zainab Aqdas Rizvi',
            'slug' => 'Ivy-Day-Student-Speech-Syeda-Zainab-Aqdas-Rizvi',
            'link' => 'https://www.youtube.com/embed/_lkw2xtNMmk',
            'details' => 'Syeda Zainab Aqdas Rizvi, a member of the Class of 2018, delivered the student speech at Smith College’s Ivy Day celebration on Saturday, May 19.',
            'admission_subject_id' => 2,
        ]);
        DB::table('admissions')->insert([
            'title' => 'Ivy Day Student Speech - Syeda Zainab Aqdas Rizvi',
            'slug' => 'Ivy-Day-Student-Speech-Syeda-Zainab-Aqdas-Rizvi',
            'link' => 'https://www.youtube.com/embed/_lkw2xtNMmk',
            'details' => 'Syeda Zainab Aqdas Rizvi, a member of the Class of 2018, delivered the student speech at Smith College’s Ivy Day celebration on Saturday, May 19.',
            'admission_subject_id' => 3,
        ]);
        DB::table('admissions')->insert([
            'title' => 'Ivy Day Student Speech - Syeda Zainab Aqdas Rizvi',
            'slug' => 'Ivy-Day-Student-Speech-Syeda-Zainab-Aqdas-Rizvi',
            'link' => 'https://www.youtube.com/embed/_lkw2xtNMmk',
            'details' => 'Syeda Zainab Aqdas Rizvi, a member of the Class of 2018, delivered the student speech at Smith College’s Ivy Day celebration on Saturday, May 19.',
            'admission_subject_id' => 4,
        ]);
        DB::table('admissions')->insert([
            'title' => 'Ivy Day Student Speech - Syeda Zainab Aqdas Rizvi',
            'slug' => 'Ivy-Day-Student-Speech-Syeda-Zainab-Aqdas-Rizvi',
            'link' => 'https://www.youtube.com/embed/_lkw2xtNMmk',
            'details' => 'Syeda Zainab Aqdas Rizvi, a member of the Class of 2018, delivered the student speech at Smith College’s Ivy Day celebration on Saturday, May 19.',
            'admission_subject_id' => 5,
        ]);
        DB::table('admissions')->insert([
            'title' => 'Ivy Day Student Speech - Syeda Zainab Aqdas Rizvi',
            'slug' => 'Ivy-Day-Student-Speech-Syeda-Zainab-Aqdas-Rizvi',
            'link' => 'https://www.youtube.com/embed/_lkw2xtNMmk',
            'details' => 'Syeda Zainab Aqdas Rizvi, a member of the Class of 2018, delivered the student speech at Smith College’s Ivy Day celebration on Saturday, May 19.',
            'admission_subject_id' => 1,
        ]);

    }
}
