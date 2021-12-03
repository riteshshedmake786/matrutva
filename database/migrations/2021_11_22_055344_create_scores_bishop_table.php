<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoresBishopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_scores_bishop', function (Blueprint $table) {
            $table->id();
            $table->string('cervix_diameter');
            $table->string('position_of_cervix');
            $table->string('effacement');
            $table->string('fetal_station');
            $table->string('cervical_consistency');
            $table->integer('bishop_score');
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
        Schema::dropIfExists('tbl_scores_bishop');
    }
}
