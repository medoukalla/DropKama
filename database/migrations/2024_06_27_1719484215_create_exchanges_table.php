<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExchangesTable extends Migration
{
    public function up()
    {
        Schema::create('exchanges', function (Blueprint $table) {

		$table->id();
		$table->integer('from_server',)->unsigned();
		$table->integer('to_server',)->unsigned();
		$table->integer('quantity',)->unsigned();
		$table->char('from_name',50);
		$table->char('to_name',50);
		$table->char('status',50);
		$table->char('quantity_get',250);
		$table->bigInteger('user_id',)->unsigned()->nullable();
		
		
		$table->char('orderId',36);
		$table->timestamps();
		
		$table->foreign('user_id')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('exchanges');
    }
}