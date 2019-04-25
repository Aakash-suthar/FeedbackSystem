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
        Schema::create('users', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->primary('id');
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('sem');
            $table->string('course_id');
            $table->string('phoneno');
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('course_id')->references('id')->on('courses');
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
