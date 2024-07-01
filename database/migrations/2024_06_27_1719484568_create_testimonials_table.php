<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimonialsTable extends Migration
{
    public function up()
    {
        Schema::create('testimonials', function (Blueprint $table) {

		$table->id();
		$table->string('name');
		$table->string('job')->nullable();
		$table->string('avatar')->default('default');
		$table->text('testimonial');
		$table->tinyInteger('active')->default(0);
		
		
		$table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('testimonials');
    }
}