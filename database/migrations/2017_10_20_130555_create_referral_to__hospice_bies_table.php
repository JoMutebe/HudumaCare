<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReferralToHospiceBiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referral_to__hospice_bies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('staff_id');
            $table->integer('hospital_id');
            $table->integer('doctor_id');
            
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
        Schema::dropIfExists('referral_to__hospice_bies');
    }
}
