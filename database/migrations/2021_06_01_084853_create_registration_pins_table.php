<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationPinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration_pins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('payload')->unique();
            $table->enum('status',['pending','used'])->default('pending');
            $table->enum('type',['management','super'])->default('super');
            $table->dateTime('used_at')->nullable();
            $table->bigInteger('user_id')->nullable();
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
        Schema::dropIfExists('registration_pins');
    }
}
