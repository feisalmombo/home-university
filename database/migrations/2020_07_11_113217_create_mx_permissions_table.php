<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMxPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mx_permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('txt_name');
            $table->string('opt_mx_section_id');
            $table->string('txt_display_name');
            $table->string('txt_row_value');
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
        Schema::dropIfExists('mx_permissions');
    }
}
