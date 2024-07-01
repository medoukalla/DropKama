<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferServersTable extends Migration
{
    public function up()
    {
        Schema::create('offer_servers', function (Blueprint $table) {

		$table->id();
		$table->string('name');
		$table->tinyInteger('active')->default(0);
		$table->decimal('price',8,3)->nullable();
		$table->decimal('paypal_price',8,3);
		$table->decimal('skrill_price',8,3);
		$table->decimal('cih_price',8,2);
		$table->decimal('stripe_price',8,3)->nullable();
		$table->integer('min',)->unsigned()->default('15');
		$table->integer('max',)->unsigned()->default('150');
		$table->bigInteger('map_id',)->unsigned()->nullable();
		
		$table->timestamps();
		
		$table->foreign('map_id')->references('id')->on('maps');
        });
    }

    public function down()
    {
        Schema::dropIfExists('offer_servers');
    }
}