<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Books extends Migration
{  /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
       Schema::create('books', function (Blueprint $table) {
           $table->bigIncrements('id');
           $table->string('title', 255)->nullable(false); 
           $table->string('author', 255)->nullable(false);
           $table->text('description')->nullable();
           $table->unsignedBigInteger('user_id'); 
           $table->timestamps(); 

           
           $table->foreign('user_id')->references('id')->on('users');

           $table->engine = 'InnoDB';
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
