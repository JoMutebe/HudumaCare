<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePastMedicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('past_medications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('drug_id');
            $table->string('reason_for_taking(');
            $table->integer('drug_duration_id');
            $table->date('date_of_discontinuation');
            $table->longText('reason_for_discontinuation');
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
        Schema::dropIfExists('past_medications');
    }
}
