<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOfficeTable extends Migration {

	public function up()
	{
		Schema::create('office', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('name', 100);
			$table->string('address', 100);
			$table->string('phone', 100);
			$table->mediumInteger('bossId');
			$table->string('openingHours', 500);
		});
	}

	public function down()
	{
		Schema::drop('office');
	}
}