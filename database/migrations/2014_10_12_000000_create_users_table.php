<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('role',5)->default("user");
            $table->string('avatar',80);
            $table->string('name',30);
            $table->string('surname',30);
            $table->string('phone', 13);
            $table->string('id_number',30);
            $table->string('gender',30);
            $table->string('age',10);
            $table->string('bio',500);
            $table->string('email',50)->unique();
            $table->string('password',80);
            $table->string('blocked',20)->default("no");
            $table->string('last_login',20);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
