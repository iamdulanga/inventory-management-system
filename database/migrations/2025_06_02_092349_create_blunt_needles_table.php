<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBluntNeedlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blunt_needles', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('employee_epf_number');
            $table->string('job_number');
            $table->string('section');
            $table->string('needle_type');
            $table->string('needle_size');
            $table->string('machine_number');
            $table->string('was_needle_embedded');
            $table->string('new_needle_type');
            $table->string('new_needle_size');
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
        Schema::dropIfExists('blunt_needles');
    }
}
