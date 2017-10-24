<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientManagementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_managements', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('problem');
            $table->longText('possible_cause');
            $table->integer('general_intervention_id');
            $table->integer('medication_intervention_id');
            $table->longText('case_summary');
            $table->date_date_set('date_of_next_review');
            $table->string(' place_of_next_review');
            $table->integer('contribution_id');
            $table->string('patient_consent');
            $table->integer('patient_picture_id');
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
        Schema::dropIfExists('patient_managements');
    }
}
