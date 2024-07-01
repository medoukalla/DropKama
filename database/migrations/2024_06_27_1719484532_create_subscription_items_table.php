<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionItemsTable extends Migration
{
    public function up()
    {
        Schema::create('subscription_items', function (Blueprint $table) {

		$table->id();
		$table->bigInteger('subscription_id',)->unsigned();
		$table->string('stripe_id');
		$table->string('stripe_product');
		$table->string('stripe_price');
		$table->integer('quantity',)->nullable();
		
		
		$table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('subscription_items');
    }
}