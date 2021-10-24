<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            'name'       => 'Md. Songib Dey',
            'photo'      => 'photo.jpg',
            'details'    => 'Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci doming id quod mazim placerat tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet.',
            'star'       => '5',
        ]);
        DB::table('testimonials')->insert([
            'name'       => 'Md. Imdadul Haque',
            'photo'      => 'photo.jpg',
            'details'    => 'Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci doming id quod mazim placerat tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet.',
            'star'       => '5',
        ]);
        DB::table('testimonials')->insert([
            'name'       => 'A.H. Alamin',
            'photo'      => 'photo.jpg',
            'details'    => 'Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci doming id quod mazim placerat tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet.',
            'star'       => '5',
        ]);
        DB::table('testimonials')->insert([
            'name'       => 'Md. Didarul Haque',
            'photo'      => 'photo.jpg',
            'details'    => 'Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci doming id quod mazim placerat tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet.',
            'star'       => '5',
        ]);
        DB::table('testimonials')->insert([
            'name'       => 'H.R. Razib',
            'photo'      => 'photo.jpg',
            'details'    => 'Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci doming id quod mazim placerat tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet.',
            'star'       => '5',
        ]);
    }
}
