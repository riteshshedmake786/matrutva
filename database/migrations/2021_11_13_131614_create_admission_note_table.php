<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionNoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_admission_notes', function (Blueprint $table) {
            $table->id();
            $table->string('chief_comp');
            $table->string('oth_comp');
            $table->date('lmp');
            $table->date('edd');
            $table->integer('gravida');
            $table->integer('para');
            $table->integer('living_children');
            $table->integer('abortions');
            $table->integer('patient_id');
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
        Schema::dropIfExists('tbl_admission_notes');
    }
}
