<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('unique_id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('department');
            $table->string('photo');
            $table->longText('about');
            $table->string('skill_bn');
            $table->string('skill_en');
            $table->string('skill_sp');
            $table->string('skill_wr');
            $table->string('link_fb');
            $table->string('link_tw');
            $table->string('link_li');
            $table->string('link_in');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
