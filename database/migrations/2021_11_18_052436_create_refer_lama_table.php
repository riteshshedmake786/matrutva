<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReferLamaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_refer_lama', function (Blueprint $table) {
            $table->id();
            $table->string('mother_reason');
            $table->string('mother_reason_text');
            $table->string('child_reason')->nullable();
            $table->string('child_reason_text')->nullable();
            $table->string('referal_facility');
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
        Schema::dropIfExists('tbl_refer_lama');
    }
}
