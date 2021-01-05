<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMxStudentResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mx_student_results', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opt_mx_exam_id');
            $table->string('opt_mx_student_id');
            $table->string('opt_mx_evaluator_id');
            $table->string('opt_mx_teacher_id');
            $table->string('txt_remarks');
            $table->float('dbl_marks', 3, 2);
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
        Schema::dropIfExists('mx_student_results');
    }
}
