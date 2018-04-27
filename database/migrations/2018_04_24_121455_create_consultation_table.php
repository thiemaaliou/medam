<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConsultationTable extends Migration {

	public function up()
	{
		Schema::create('consultation', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->datetime('date');
			$table->string('act', 10);
			$table->string('motif', 100)->nullable();
			$table->string('height', 10)->nullable();
			$table->string('weight', 10)->nullable();
			$table->string('pulse', 10)->nullable();
			$table->string('observation', 500)->nullable();
			$table->string('others', 100);
		});
	}

	public function down()
	{
		Schema::drop('consultation');
	}
}