<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_name_id');
            $table->date('date_of_birth');
            $table->integer('gender_id')->unsigned();
            $table->integer('nationality_id')->unsigned();
            $table->integer('tribe_id')->unsigned();
            $table->integer('hiv_status_id')->unsigned();
            $table->integer('hiv_collection_method_id')->unsigned();
            $table->integer('hiv_arvs_medication_id')->unsigned();
            $table->integer('hiv_prophylaxis_medication_id')->unsigned();
            $table->integer('hiv_cd4_count_medication_id')->unsigned();
            $table->integer('religion_id')->unsigned();
            $table->integer('district_id')->unsigned();
            $table->integer('residence_id')->unsigned();
            $table->integer('patient_contact_id')->unsigned();
            $table->integer('care_giver_id')->unsigned();
            $table->integer('referred_to_by_id')->unsigned();
            $table->integer('support_given_id')->unsigned();
            $table->integer('patient_status_id')->unsigned();
            $table->integer('reason_for_visit_id')->unsigned();
            $table->integer('staff_id')->unsigned();
            $table->integer('site_of_assessment_id')->unsigned();
            $table->integer('rejected_referral_id')->unsigned();
            $table->integer('reason_for_rejection_id')->unsigned();
            $table->integer('advice_given_id')->unsigned();
            $table->integer('symptom_id')->unsigned();
            $table->integer('past_medical_history_id')->unsigned();
            $table->integer('drug_history_id')->unsigned();
            $table->integer('social_class_assessment_id')->unsigned();
            $table->integer('patient_understanding_assessment_id')->unsigned();
            $table->integer('spiritual_understanding_id')->unsigned();
            $table->integer('functional_assessment_id')->unsigned();
            $table->integer('pain_assessment_id')->unsigned();
            $table->integer('physical_assessment_id')->unsigned();
            $table->integer('patient_management_id')->unsigned();



            
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
        Schema::dropIfExists('patients');
    }
}
