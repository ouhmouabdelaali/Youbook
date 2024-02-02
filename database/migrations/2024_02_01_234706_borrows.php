<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Borrows extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrows', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id'); // Foreign key to students
            $table->unsignedBigInteger('book_id');   // Foreign key to books

            $table->timestamps();

            // Specify InnoDB engine
            $table->engine = 'InnoDB';

            // Foreign key constraints
            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('book_id')->references('id')->on('books');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */   public function down()
    {
        Schema::dropIfExists('borrows');
    }
}
