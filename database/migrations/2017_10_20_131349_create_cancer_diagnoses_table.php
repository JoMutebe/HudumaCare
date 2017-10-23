<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCancerDiagnosesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cancer_diagnoses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('site_on_body_id');
            $table->integer('state_of_cancer_id');
            $table->integer('stage_of_cancer_id');
            $table->longText('description');
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
        Schema::dropIfExists('cancer_diagnoses');
    }
}
