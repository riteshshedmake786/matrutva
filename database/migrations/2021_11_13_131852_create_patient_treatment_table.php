<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientTreatmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_patient_treatment', function (Blueprint $table) {
            $table->id();
            $table->string('tt')->nullable();
            $table->string('ifa')->nullable();
            $table->string('asg')->nullable();
            $table->string('calcium')->nullable();
            $table->string('other_drug')->nullable();
            $table->string('drug_name')->nullable();
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
        Schema::dropIfExists('tbl_patient_treatment');
    }
}
