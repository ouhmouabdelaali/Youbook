<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Use Laravel's default ID type
            $table->string('username', 255)->unique()->notNull();
            $table->string('password', 255)->notNull();
            $table->string('first_name', 255)->notNull();
            $table->string('last_name', 255)->notNull();
            $table->string('email', 255)->unique()->notNull();
            $table->string('phone_number', 20)->nullable();
            $table->enum('role', ['admin', 'student'])->notNull()->default('student');
            $table->boolean('is_active')->notNull()->default(true);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->nullable();

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
        Schema::dropIfExists('users');
    }

   
}
