<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServersTable extends Migration
{
    public function up()
    {
        Schema::create('servers', function (Blueprint $table) {

			$table->id();
			$table->string('name');
			$table->tinyInteger('switch')->default(1);
			$table->decimal('price',12,3);
			$table->string('image',100)->default('default_server.png');
			$table->bigInteger('map_id',)->unsigned()->nullable();
			
			
			$table->decimal('price_mad',12,2);
			$table->decimal('price_usd',12,3);
			$table->decimal('price_buy',12,3)->default('0.000');
			$table->integer('min',)->nullable();
			$table->integer('max',)->nullable();
			$table->tinyInteger('active')->default(1);

			$table->timestamps();
			
			$table->foreign('map_id')->references('id')->on('maps');
		
        });
    }

    public function down()
    {
        Schema::dropIfExists('servers');
    }
}