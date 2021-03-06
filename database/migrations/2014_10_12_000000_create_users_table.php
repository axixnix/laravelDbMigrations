<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone_number')->unique()->nullable();
            $table->date('dob')->nullable();
            $table->enum('gender',['male','female'])->nullable();
            $table->timestamp('email_verified_at')->nullable();//look this up later
            $table->string('password');
            $table->string('profile_picture')->nullable()->unique();
            $table->tinyInteger('suspended')->default('0');
            $table->rememberToken();//look this up later
            $table->timestamps();

           /*







Symfony for VS Codevv



Laravelbalde snipets
laravel artisan
           */
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
