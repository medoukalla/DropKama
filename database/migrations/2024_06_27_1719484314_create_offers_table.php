<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {

		$table->id();
		$table->bigInteger('user_id',)->unsigned();
		$table->bigInteger('server_id',)->unsigned();
		$table->char('orderId',36);
		$table->decimal('quantity',10,3)->nullable();
		$table->decimal('total',8,3)->nullable();
		$table->string('game_id')->nullable();
		$table->string('payment')->nullable();
		$table->string('payment_info')->nullable();
		$table->string('name');
		$table->string('email');
		$table->string('discord');
		$table->enum('status',['en cours','paye','annule'])->default('en cours');
		
		$table->timestamps();
		
		$table->foreign('server_id')->references('id')->on('offer_servers');		$table->foreign('user_id')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('offers');
    }
}