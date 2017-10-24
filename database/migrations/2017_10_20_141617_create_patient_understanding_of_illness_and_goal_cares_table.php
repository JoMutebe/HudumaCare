<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientUnderstandingOfIllnessAndGoalCaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_understanding_of_illness_and_goal_cares', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('status_of_understanding_id');
            $table->integer('status_of_family_understanding_id');
            $table->integer('patient_main_distress_id');
            $table->integer('family_main_distress_id');
            $table->integer('goal_of_care_id');
            $table->integer('effect_of_illness_id');
            $table->integer('patient_most_important_need_id');
            $table->integer('hospice_explanation_status_id');
            
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
        Schema::dropIfExists('patient_understanding_of_illness_and_goal_cares');
    }
}
