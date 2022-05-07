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
        Schema::create('semesters', function (Blueprint $table) {
            $table->string('id', 36)->primary();
            $table->string("name");
            // $table->string('year_id',36)->nullable();
            // $table->foreign('year_id')->references('id')->on('years');
            // $table->unsignedBigInteger('school_id')->nullable();
            // $table->foreign('school_id')->references('id')->on('schools');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('semesters');
    }
};
