<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMxAuditTrailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mx_audit_trails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('txt_old_record');
            $table->string('txt_new_record');
            $table->string('txt_table');
            $table->string('txt_action');
            $table->string('txt_added_by');
            $table->string('dat_attended_date');
            $table->string('txt_attended_by');
            $table->string('opt_mx_audit_trail_status_id');
            $table->integer('int_notify');
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
        Schema::dropIfExists('mx_audit_trails');
    }
}
