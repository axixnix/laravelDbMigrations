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
            $table->string('payload');
            $table->enum('status',['pending','used']);
            $table->enum('type',['management','super']);
            $table->dateTime('used_at');
            $table->bigInteger('user_id');
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
