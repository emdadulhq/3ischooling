<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdmissionSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admission_subjects')->insert([
            'name' => 'English',
            'slug' => 'English',
        ]);
        DB::table('admission_subjects')->insert([
            'name' => 'Math',
            'slug' => 'Math',
        ]);
        DB::table('admission_subjects')->insert([
            'name' => 'Medical',
            'slug' => 'Medical',
        ]);
        DB::table('admission_subjects')->insert([
            'name' => 'Physics',
            'slug' => 'Physics',
        ]);
        DB::table('admission_subjects')->insert([
            'name' => 'Electrical',
            'slug' => 'Electrical',
        ]);
    }
}
