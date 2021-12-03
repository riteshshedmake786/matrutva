<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreDelChecklistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_pre_del_checklist', function (Blueprint $table) {
            $table->id();
            $table->string('spot_light');
            $table->string('gloves');
            $table->string('soap_water');
            $table->string('oxytocin');
            $table->string('pad');
            $table->string('towel');
            $table->string('scissors');
            $table->string('mucus_extractor');
            $table->string('cord_ligature');
            $table->string('bag_mask');
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
        Schema::dropIfExists('tbl_pre_del_checklist');
    }
}
