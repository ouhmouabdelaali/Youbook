<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Books extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('books', function (Blueprint $table){
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->text('description')->nullable();
            $table->boolean('available')->default(true);
            $table->timestamps();

            // Specify InnoDB engine
            $table->engine = 'InnoDB';
        //
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
