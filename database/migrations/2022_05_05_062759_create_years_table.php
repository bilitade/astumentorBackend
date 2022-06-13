<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('years', function (Blueprint $table) {
            $table->string('id', 36)->primary();
            $table->string("name");
            $table->unsignedSmallInteger("yearInNum");
            $table->timestamps();
            // $table->unsignedBigInteger('school_id')->nullable();
            // $table->foreign('school_id')->references('id')->on('schools');
            // $table->unsignedBigInteger('department_id')->nullable();

            // $table->foreign('department_id')->references('id')->on('departments');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('years');
    }
};
