<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMissingNeedlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('missing_needles', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->date('date');
            $table->string('employee_epf_number');
            $table->string('section');
            $table->time('needle_broke_time');
            $table->time('needle_release_time');
            $table->string('attachment_path')->nullable(); // To store image/file path
            $table->timestamps(); // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('missing_needles');
    }
}
