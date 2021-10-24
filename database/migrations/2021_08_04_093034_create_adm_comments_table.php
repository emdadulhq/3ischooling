<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adm_comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('admission_id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('comment_id')->nullable();
            $table->longText('comment_txt');
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
        Schema::dropIfExists('adm_comments');
    }
}
