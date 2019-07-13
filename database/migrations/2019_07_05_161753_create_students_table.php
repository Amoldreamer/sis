<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('Registration');
            $table->string('studentName');
            $table->integer('rollNo');
            $table->string('gender');
            $table->string('course');
            $table->integer('year');
            $table->integer('semester');
            $table->string('department');
            $table->string('email');
            $table->string('fatherName');
            $table->string('motherName');
            $table->integer('faPhNum');
            $table->integer('stPhNum');
            $table->string('stDOB');
            $table->string('city');
            $table->string('state');
            $table->string('stAddress');
            $table->string('imgName');
            $table->unsignedBigInteger('gender_id');
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('year_id');
            $table->unsignedBigInteger('seme_id');
            $table->unsignedBigInteger('state_id');
            $table->foreign('gender_id')->references('id')->on('genders');
            $table->foreign('course_id')->references('id')->on('courses');
            $table->foreign('year_id')->references('id')->on('years');
            $table->foreign('seme_id')->references('id')->on('semesters');
            $table->foreign('state_id')->references('id')->on('states');
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
        Schema::dropIfExists('students');
    }
}
