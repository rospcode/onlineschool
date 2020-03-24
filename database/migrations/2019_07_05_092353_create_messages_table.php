<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('admins_id');
            $table->string('message',1000);
            $table->string('user_read');
            $table->string('admins_read');
            $table->string('type',20);
            $table->string('token',10);
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
