<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_lesson', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lesson_code',30);
            $table->string('lesson_title',50);
            $table->string('course_section_id',100);
            $table->string('lesson_type',100);
            $table->string('attachment',100);
            $table->string('summary',500);
            $table->string('created_at',30);
            $table->string('updated_at',30);
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('course_lessons');
    }
}
