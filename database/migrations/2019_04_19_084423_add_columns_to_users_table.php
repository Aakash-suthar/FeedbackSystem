<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assigns', function (Blueprint $table) {
            $table->increments('id');
            //$table->primary('id');   
            $table->string('faculty_id');
            $table->string('div');
            $table->string('sem');
            $table->string('course_id');
            $table->string('subject_id');
            $table->foreign('course_id')->references('id')->on('courses');
            $table->foreign('subject_id')->references('id')->on('subjects');
            $table->foreign('faculty_id')->references('id')->on('faculties');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
            Schema::dropIfExists('users');
    }
}
