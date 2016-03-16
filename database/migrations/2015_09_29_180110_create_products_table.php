<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	public function up()
	{
		Schema::create('products', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('event_id');
			$table->string('name');
			$table->string('description');
			$table->float('price');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('products');
	}
}