<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTakeConsentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_take_consent', function (Blueprint $table) {
            $table->id();
            $table->string('consent_for');
            $table->string('name');
            $table->integer('age');
            $table->string('address');
            $table->string('relation');
            $table->string('f_or_m_name');
            $table->string('p_relation');
            $table->string('oth_rel')->nullable();
            $table->string('attendant');
            $table->string('attendant_name');
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
        Schema::dropIfExists('tbl_take_consent');
    }
}
