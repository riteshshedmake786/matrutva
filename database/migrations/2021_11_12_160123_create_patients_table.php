<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_patients_data', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('doctor')->nullable();
            $table->timestamp('labor_start_time')->nullable();
            $table->string('mobno')->nullable();
            $table->string('IPD_Reg_No')->nullable();
            $table->string('aadhar_no')->nullable();
            $table->string('OPD_NO')->nullable();
            $table->string('MCTS_NO')->nullable();
            $table->integer('age')->nullable();
            $table->string('bed')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('g_relation')->nullable();
            $table->string('gaurdians_relation')->nullable();
            $table->string('g_name')->nullable();
            $table->string('birth_cn')->nullable();
            $table->string('asha')->nullable();
            $table->string('address')->nullable();
            $table->string('booked_status')->nullable();
            $table->string('bpl_status')->nullable();
            $table->integer('patient_status');
            $table->string('refered')->nullable();
            $table->integer('staff_id');
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
        Schema::dropIfExists('tbl_patients_data');
    }
}
