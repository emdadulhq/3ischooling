<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStemCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stem_comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('stem_id');
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
        Schema::dropIfExists('stem_comments');
    }
}
