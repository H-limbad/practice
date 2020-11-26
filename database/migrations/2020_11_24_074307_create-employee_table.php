<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->increments('id');
            $table->string('Name');
            $table->string('Email');
            $table->string('Number');
            $table->string('Gender');
            $table->string('City');
            $table->string('Software_skills');
            $table->string('Image');
            $table->timestamps();
    }
}
