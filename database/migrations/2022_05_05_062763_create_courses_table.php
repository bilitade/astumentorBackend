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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string("courseCode");
            $table->string("courseName");
            $table->unsignedSmallInteger("creditHour");
            $table->longText('description');
            $table->string('type_id');
           
            $table->unsignedBigInteger('school_id')->nullable();
            $table->foreign('school_id')->references('id')->on('schools')->onDelete('cascade');

            $table->unsignedBigInteger('department_id')->nullable();
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');

            $table->string('year_id',36);
            $table->foreign('year_id')->references('id')->on('years')->onDelete('cascade');

            $table->string('semester_id',36);
            $table->foreign('semester_id')->references('id')->on('semesters')->onDelete('cascade');


            $table->unsignedBigInteger('resource_id')->nullable();
            $table->foreign('resource_id')->references('id')->on('resources')->onDelete('cascade');

            $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('courses');
    }
};
