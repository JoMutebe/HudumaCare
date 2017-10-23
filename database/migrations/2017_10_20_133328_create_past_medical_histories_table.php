<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePastMedicalHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('past_medical_histories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('condition_id');
            $table->integer('status_id');
            $table->date('date');
            $table->longText('treatment');
            $table->string('location_of_clinic_attended');
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
        Schema::dropIfExists('past_medical_histories');
    }
}
