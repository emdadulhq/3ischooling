<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([

            UserSeeder::class,
            RolePermissionSeeder::class,
            AdmissionSubjectSeeder::class,
            AdmissionSeeder::class,
            StemSubjectSeeder::class,
            StemSeeder::class,
            CourseCategorySeeder::class,
            CourseSeeder::class,
            NewsTagSeeder::class,
            NewsSeeder::class,
            MockTestCategorySeeder::class,
            TeacherSeeder::class,
            QuizSeeder::class,
            TestimonialSeeder::class,


        ]);
    }
}
