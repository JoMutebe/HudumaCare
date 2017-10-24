<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientMedicationInterventionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_medication_interventions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('doze');
            $table->integer('route_id');
            $table->integer('duration');
            $table->integer('frequency');
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
        Schema::dropIfExists('patient_medication_interventions');
    }
}
