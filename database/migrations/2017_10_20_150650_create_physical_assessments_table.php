<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhysicalAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('physical_assessments', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('general_description');
            $table->intger('vital_signs_id');
            $table->longText('skin');
            $table->longText('head');
            $table->longText('ears');
            $table->longText('neck');
            $table->longText('cvs');
            $table->longText('abdomen');
            $table->longText('rectal');
            $table->longText('neura');
            $table->longText('v/e');
            $table->longText('respiratory(');
            $table->longText('others');
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
        Schema::dropIfExists('physical_assessments');
    }
}
