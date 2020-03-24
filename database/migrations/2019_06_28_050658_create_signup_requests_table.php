<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSignupRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('signup_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id',5);
            $table->string('approved',14);
            $table->string('count_sent_mail',5);
            $table->string('read_feed',5)->default('no');
            $table->string('action',100);
            $table->string('link',90);
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
        Schema::dropIfExists('signup_requests');
    }
}
