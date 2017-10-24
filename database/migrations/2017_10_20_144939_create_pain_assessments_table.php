<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePainAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pain_assessments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id');
            $table->string('pain_name');
            $table->integer('site_on_body_id');
            $table->longText('pain_duration');
            $table->longText('pain_description');
            $table->integer('numerical_rating');
            $table->integer('periodicity_id');
            $table->longText('precipitating_factors');
            $table->longText('relieving_factors');
            $table->integer('sleep_effect_id');
            $table->integer('mobility_effect_id');
            $table->integer('effect_on_current_medication_id');
            $table->longText('possible_cause');
            

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
        Schema::dropIfExists('pain_assessments');
    }
}
