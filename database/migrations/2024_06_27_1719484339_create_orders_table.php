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
		$table->char('reference',36);
		$table->integer('quantity',)->nullable();
		$table->decimal('total',8,3)->nullable();
		$table->integer('bonus',)->nullable();
		$table->integer('payment_id');
		
		$table->boolean('payed')->default(false);
		$table->boolean('payment_verified')->default(false);
		$table->boolean('facturer')->default(false);
		$table->boolean('liviser')->default(false);
		$table->boolean('delivered')->default(false);
		$table->boolean('order_completed')->default(false);
		

		$table->string('facturation_name',50)->nullable();
		$table->string('facturation_discrod',50)->nullable();
		$table->string('facturation_email',50)->nullable();
		$table->string('facturation_code',50)->nullable();
		$table->string('facturation_city',50)->nullable();
		$table->string('facturation_phone',50)->nullable();
		$table->tinyInteger('facturation_agree')->default(0);

		$table->bigInteger('server_id')->unsigned();
		$table->bigInteger('user_id')->unsigned();
		
		$table->timestamps();
		
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}