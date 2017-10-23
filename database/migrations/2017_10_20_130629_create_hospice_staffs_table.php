<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHospiceStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospice_staffs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('staff_name_id');
            $table->integer('type_of_staff_id');
            $table->integer('staff_contact_id');
            $table->integer('team_number_id');
            
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
        Schema::dropIfExists('hospice_staffs');
    }
}
