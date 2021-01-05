<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMxUserCredentialPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mx_user_credential_permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opt_mx_user_credential_id');
            $table->string('opt_mx_permission_id');
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
        Schema::dropIfExists('mx_user_credential_permissions');
    }
}
