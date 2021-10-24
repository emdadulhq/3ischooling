<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([
            'unique_id'  => strtoupper(Str::random(5)),
            'name'       => 'Md. Imdadul Haque',
            'email'      => 'emdadulhq@gmail.com',
            'phone'      => '01922581040',
            'department' => 'Web Development',
            'photo'      => 'ict.jpg',
            'about'      => 'Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci doming id quod mazim placerat tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet.',
            'skill_bn'   => '98',
            'skill_en'   => '78',
            'skill_sp'   => '85',
            'skill_wr'   => '89',
            'link_fb'    => 'https://www.facebook.com/',
            'link_tw'    => 'https://www.twitter.com/',
            'link_li'    => 'https://www.linkedin.com/',
            'link_in'    => 'https://www.instagram.com/',
        ]);
        DB::table('teachers')->insert([
            'unique_id'  => strtoupper(Str::random(5)),
            'name'       => 'Sonjeeb Dey',
            'email'      => 'songib@gmail.com',
            'phone'      => '01922581042',
            'department' => 'Web Design',
            'photo'      => 'ict.jpg',
            'about'      => 'Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci doming id quod mazim placerat tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet.',
            'skill_bn'   => '98',
            'skill_en'   => '78',
            'skill_sp'   => '85',
            'skill_wr'   => '89',
            'link_fb'    => 'https://www.facebook.com/',
            'link_tw'    => 'https://www.twitter.com/',
            'link_li'    => 'https://www.linkedin.com/',
            'link_in'    => 'https://www.instagram.com/',
        ]);
        DB::table('teachers')->insert([
            'unique_id'  => strtoupper(Str::random(5)),
            'name'       => 'A. H. Alamin',
            'email'      => 'ahalamin@gmail.com',
            'phone'      => '01922581043',
            'department' => 'Office Application',
            'photo'      => 'ict.jpg',
            'about'      => 'Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci doming id quod mazim placerat tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet.',
            'skill_bn'   => '98',
            'skill_en'   => '78',
            'skill_sp'   => '85',
            'skill_wr'   => '89',
            'link_fb'    => 'https://www.facebook.com/',
            'link_tw'    => 'https://www.twitter.com/',
            'link_li'    => 'https://www.linkedin.com/',
            'link_in'    => 'https://www.instagram.com/',
        ]);
        DB::table('teachers')->insert([
            'unique_id'  => strtoupper(Str::random(5)),
            'name'       => 'H. R. Razib',
            'email'      => 'hrrazib@gmail.com',
            'phone'      => '01922581044',
            'department' => 'Bangla',
            'photo'      => 'ict.jpg',
            'about'      => 'Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci doming id quod mazim placerat tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet.',
            'skill_bn'   => '98',
            'skill_en'   => '78',
            'skill_sp'   => '85',
            'skill_wr'   => '89',
            'link_fb'    => 'https://www.facebook.com/',
            'link_tw'    => 'https://www.twitter.com/',
            'link_li'    => 'https://www.linkedin.com/',
            'link_in'    => 'https://www.instagram.com/',
        ]);
        DB::table('teachers')->insert([
            'unique_id'  => strtoupper(Str::random(5)),
            'name'       => 'R. K. Payel',
            'email'      => 'rkpayel@gmail.com',
            'phone'      => '01922581045',
            'department' => 'English',
            'photo'      => 'ict.jpg',
            'about'      => 'Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci doming id quod mazim placerat tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet.',
            'skill_bn'   => '98',
            'skill_en'   => '78',
            'skill_sp'   => '85',
            'skill_wr'   => '89',
            'link_fb'    => 'https://www.facebook.com/',
            'link_tw'    => 'https://www.twitter.com/',
            'link_li'    => 'https://www.linkedin.com/',
            'link_in'    => 'https://www.instagram.com/',
        ]);
        DB::table('teachers')->insert([
            'unique_id'  => strtoupper(Str::random(5)),
            'name'       => 'Didarul Haque',
            'email'      => 'didarulhq@gmail.com',
            'phone'      => '01922581046',
            'department' => 'General Education',
            'photo'      => 'ict.jpg',
            'about'      => 'Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci doming id quod mazim placerat tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet.',
            'skill_bn'   => '98',
            'skill_en'   => '78',
            'skill_sp'   => '85',
            'skill_wr'   => '89',
            'link_fb'    => 'https://www.facebook.com/',
            'link_tw'    => 'https://www.twitter.com/',
            'link_li'    => 'https://www.linkedin.com/',
            'link_in'    => 'https://www.instagram.com/',
        ]);
        DB::table('teachers')->insert([
            'unique_id'  => strtoupper(Str::random(5)),
            'name'       => 'Fariha Imdad',
            'email'      => 'farihaimdad@gmail.com',
            'phone'      => '01922581048',
            'department' => 'Graphic Design',
            'photo'      => 'ict.jpg',
            'about'      => 'Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci doming id quod mazim placerat tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet.',
            'skill_bn'   => '98',
            'skill_en'   => '78',
            'skill_sp'   => '85',
            'skill_wr'   => '89',
            'link_fb'    => 'https://www.facebook.com/',
            'link_tw'    => 'https://www.twitter.com/',
            'link_li'    => 'https://www.linkedin.com/',
            'link_in'    => 'https://www.instagram.com/',
        ]);

    }
}
