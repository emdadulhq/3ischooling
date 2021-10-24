<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MockTestCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('mock_test_categories')->insert([
            'name' => ' For Kidz',
            'slug' => 'for-kidz-1',
            'parent_id' => null
        ]);
          DB::table('mock_test_categories')->insert([
            'name' => 'SSC',
            'slug' => 'SSC-2',
            'parent_id' => null
        ]);
          DB::table('mock_test_categories')->insert([
            'name' => 'HSC',
            'slug' => 'HSC-3',
            'parent_id' => null
        ]);
          DB::table('mock_test_categories')->insert([
            'name' => 'Admission',
            'slug' => 'admission-4',
            'parent_id' => null
        ]);
         DB::table('mock_test_categories')->insert([
            'name' => 'Physics',
            'slug' => 'physics-5',
            'parent_id' => 2
        ]);
         DB::table('mock_test_categories')->insert([
            'name' => 'Chemistry',
            'slug' => 'chemistry-6',
            'parent_id' => 2
        ]);
         DB::table('mock_test_categories')->insert([
            'name' => 'Biology',
            'slug' => 'biology-7',
            'parent_id' => 2
        ]);
         DB::table('mock_test_categories')->insert([
            'name' => 'Math',
            'slug' => 'math-8',
            'parent_id' => 2
        ]);
        DB::table('mock_test_categories')->insert([
            'name' => 'Higher Math',
            'slug' => 'higher-math-9',
            'parent_id' => 2
        ]);
        DB::table('mock_test_categories')->insert([
            'name' => 'Physics',
            'slug' => 'physics-10',
            'parent_id' => 3
        ]);
         DB::table('mock_test_categories')->insert([
            'name' => 'Chemistry',
            'slug' => 'chemistry-11',
            'parent_id' => 3
        ]);
         DB::table('mock_test_categories')->insert([
            'name' => 'Biology',
            'slug' => 'biology-12',
            'parent_id' => 3
        ]);
         DB::table('mock_test_categories')->insert([
            'name' => 'Math',
            'slug' => 'math-13',
            'parent_id' => 3
        ]);
        DB::table('mock_test_categories')->insert([
            'name' => 'Higher Math',
            'slug' => 'higher-math-14',
            'parent_id' => 3
        ]);
         DB::table('mock_test_categories')->insert([
            'name' => 'ICT',
            'slug' => 'ICT-15',
            'parent_id' => 3
        ]);
          DB::table('mock_test_categories')->insert([
            'name' => 'Engineering',
            'slug' => 'engineering-16',
            'parent_id' => 4
        ]);
          DB::table('mock_test_categories')->insert([
            'name' => 'Medical',
            'slug' => 'medical-17',
            'parent_id' => 4
        ]);
          DB::table('mock_test_categories')->insert([
            'name' => 'University A Unit',
            'slug' => 'university-A-unit-18',
            'parent_id' => 4
        ]);
          DB::table('mock_test_categories')->insert([
            'name' => 'Physics',
            'slug' => 'physics-19',
            'parent_id' => 16
        ]);
         DB::table('mock_test_categories')->insert([
            'name' => 'Chemistry',
            'slug' => 'chemistry-20',
            'parent_id' => 16
        ]);
         DB::table('mock_test_categories')->insert([
            'name' => 'Biology',
            'slug' => 'biology-21',
            'parent_id' => 16
        ]);
         DB::table('mock_test_categories')->insert([
            'name' => 'Math',
            'slug' => 'math-22',
            'parent_id' => 16
        ]);

    }
}
