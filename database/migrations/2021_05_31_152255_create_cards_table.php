<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->integer('expirymonth');
            $table->integer('expiryyear');
            $table->string('card_bin');
            $table->string('last4digits');
            $table->string('brand');
            $table->string('issuing_country');
            $table->longtext('card_tokens');
            $table->string('type');
            $table->longText('life_time_token');
            $table->tinyInteger('is_default');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cards');
    }
}
