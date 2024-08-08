<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('servers', function (Blueprint $table) {
            // skrill 
			$table->decimal('price_skrill_euro',12,3)->nullable();
			$table->decimal('price_skrill_usd',12,3)->nullable();

            // paypal
			$table->decimal('price_paypal_euro',12,3)->nullable();
			$table->decimal('price_paypal_usd',12,3)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('servers', function (Blueprint $table) {
            //
        });
    }
};
