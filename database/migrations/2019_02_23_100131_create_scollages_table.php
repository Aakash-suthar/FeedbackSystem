<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScollagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scollages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('email')->unique();
            $table->string('course');
            $table->string('year');
            $table->string('academicyear');
            $table->string('Q1');
            $table->string('Q2');
            $table->string('Q3');
            $table->string('Q4');
            $table->string('Q5');
            $table->string('Q6');
            $table->string('Q7');
            $table->string('suggestion')->nullable();
            $table->timestamps('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scollages');
    }
}
