<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVitalSignsPhysicalAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vital_signs_physical_assessments', function (Blueprint $table) {
            $table->increments('id');
            $table->doubleval('pulse_rate');
            $table->doubleval('bp');
            $table->doubleval('temperature');
            $table->doubleval('respiratory_rate');
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
        Schema::dropIfExists('vital_signs_physical_assessments');
    }
}
