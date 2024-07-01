<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {

		$table->id();
		$table->char('orderId',36);
		$table->integer('quantity',)->nullable();
		$table->decimal('total',8,3)->nullable();
		$table->integer('bonus',)->nullable();
		$table->enum('type',['buy','sell'])->default('buy');
		$table->string('game_id')->nullable();
		$table->string('payment')->nullable();
		$table->tinyInteger('payed')->default(0);
		$table->tinyInteger('payment_verified')->default(0);
		$table->tinyInteger('facturer')->default(0);
		$table->tinyInteger('liviser')->default(0);
		$table->tinyInteger('delivered')->default(0);
		$table->tinyInteger('order_completed')->default(0);
		$table->string('facturation_name',50)->nullable();
		$table->string('facturation_discrod',50)->nullable();
		$table->string('facturation_email',50)->nullable();
		$table->string('facturation_code',50)->nullable();
		$table->string('facturation_city',50)->nullable();
		$table->string('facturation_phone',50)->nullable();
		$table->tinyInteger('facturation_agree')->default(0);
		$table->bigInteger('server_id',)->unsigned()->nullable();
		$table->bigInteger('user_id',)->unsigned()->nullable();
		
		$table->timestamps();
		
		$table->foreign('server_id')->references('id')->on('servers');		$table->foreign('user_id')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}