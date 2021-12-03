<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostDelChecklistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_post_del_checklist', function (Blueprint $table) {
            $table->id();
            $table->string('active_mngt');
            $table->string('episiotomy');
            $table->string('dcc');
            $table->string('placenta');
            $table->string('observation')->nullable();
            $table->string('tear');
            $table->string('repair_done')->nullable();
            $table->string('ppiucd');
            $table->string('cct');
            $table->string('massage');
            $table->string('oxytocin');
            $table->string('misoprostol');
            $table->string('counselling_dsd');
            $table->string('fpma');
            $table->string('complications');
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
        Schema::dropIfExists('tbl_post_del_checklist');
    }
}
