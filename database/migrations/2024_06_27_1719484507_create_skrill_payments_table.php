<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkrillPaymentsTable extends Migration
{
    public function up()
    {
        Schema::create('skrill_payments', function (Blueprint $table) {

		$table->id();
		$table->string('transaction_id');
		$table->string('mb_transaction_id');
		$table->string('invoice_id')->nullable();
		$table->string('order_from')->nullable();
		$table->string('customer_id')->nullable();
		$table->string('customer_email')->nullable();
		$table->string('biller_email');
		;
		$table->string('currency');
		$table->string('status');
		
		
		$table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('skrill_payments');
    }
}