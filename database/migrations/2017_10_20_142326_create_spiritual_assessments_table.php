<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpiritualAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spiritual_assessments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('belief_in_God_status_id');
            $table->integer('raised_religion_id');
            $table->integer('current_religion_id');
            $table->integer('religion_importance_status_id');
            $table->integer('prayer_id');
            $table->integer('effect_of_relationship_with_God_id');
            $table->integer('current_relationship_with_God_id');
            $table->integer('spiritual_obligations');
            $table->integer('peace_with_family_status_id');
            $table->integer('peace_with_family_status_id');
            $table->longText('hospice_help');
            $table->integer('spirituality_stage_id');
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
        Schema::dropIfExists('spiritual_assessments');
    }
}
