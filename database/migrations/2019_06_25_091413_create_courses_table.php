<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('course_img');
            $table->string('categories_id');
            $table->string('course_status',15);
            $table->string('course_title',200);
            $table->string('course_cost',1000);
            $table->string('course_duration',30);
            $table->string('course_time',20);
            $table->string('course_notes',10000);
            $table->string('course_venue',300);
            $table->string('cost_add_notes',500)->nullable();
            $table->string('course_end',100);
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
        Schema::dropIfExists('courses');
    }
}
