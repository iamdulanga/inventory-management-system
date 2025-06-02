<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExtraNeedlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extra_needles', function (Blueprint $table) {
            $table->id();
            $table->date('retrieved_date');
            $table->string('needle_type');
            $table->string('needle_size');
            $table->string('machine_number');
            $table->string('submitted_epf');
            $table->string('submitted_section');
            $table->date('delivery_date');
            $table->string('retrieved_epf');
            $table->string('retrieved_section');
            $table->string('new_machine_number')->nullable();
            $table->string('unique_identifier')->unique();
            $table->string('submitted_employee_name')->nullable();
            $table->string('retrieved_employee_name')->nullable();
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
        Schema::dropIfExists('extra_needles');
    }
}
