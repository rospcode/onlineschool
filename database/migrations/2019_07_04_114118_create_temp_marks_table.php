<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTempMarksTable extends Migration
{

    public function up()
    {
        Schema::create('temp_marks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id',5);
            $table->string('courses_id',5);
            $table->string('course_marks');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('temp_marks');
    }
}
