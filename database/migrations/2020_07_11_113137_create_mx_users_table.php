<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMxUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('mx_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('txt_name');
            $table->string('password');
            $table->string('email')->unique();
            $table->string('txt_mobile');
            $table->string('txt_added_by');
            $table->string('opt_mx_status_id');
            $table->integer('int_token');
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
        Schema::dropIfExists('mx_users');
    }
}
