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
            $table->string('lastname');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('sex');
            $table->string('phone');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('occupation');
            $table->string('marital_status');
            $table->string('blood_group');
            $table->string('nok_name')->comment('Next of kin name');
            $table->string('nok_relationship')->comment('Next of kin relationship');
            $table->string('nok_phone')->comment('Next of kin phone');
            $table->string('dob')->comment('Date of birth');



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
