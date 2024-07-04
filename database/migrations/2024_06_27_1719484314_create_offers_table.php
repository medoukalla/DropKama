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
		$table->bigInteger('payment_id',)->unsigned();
		$table->string('payment_info')->nullable();
		$table->string('payment_info_b')->nullable();
		$table->string('name');
		$table->string('email');
		$table->string('discord');
		$table->enum('status',['pending','progress','cancelled','completed'])->default('pending');
		
		$table->timestamps();
		
		// $table->foreign('server_id')->references('id')->on('offer_servers');		
		// $table->foreign('user_id')->references('id')->on('users');
		// $table->foreign('payment_id')->references('id')->on('payments');

        });
    }

    public function down()
    {
        Schema::dropIfExists('offers');
    }
}