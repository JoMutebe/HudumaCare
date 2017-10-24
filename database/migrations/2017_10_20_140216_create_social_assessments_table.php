<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_assessments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('marital_status_id');
            $table->integer('highest_education_level_id');
            $table->integer('occupation_id');
            $table->integer('source_of_income_id');
            $table->integer('dependents_id');
            $table->integer('school_going_children_id');
            $table->integer('house_hold_members_id');
            $table->integer('housing_transportation_id');
            $table->integer('family_support_id');
            $table->integer('social_class_id');
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
        Schema::dropIfExists('social_assessments');
    }
}
