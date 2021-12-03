<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoresRobsonClassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_scores_robson_class', function (Blueprint $table) {
            $table->id();
            $table->string('parity');
            $table->string('pre_c_section');
            $table->integer('gestational_age');
            $table->string('fetal_presentation');
            $table->integer('no_of_fetus');
            $table->string('labor_type');
            $table->integer('robson_score');
            $table->string('patient_id');
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
        Schema::dropIfExists('tbl_scores_robson_class');
    }
}
