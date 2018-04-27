<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePatientTable extends Migration {

	public function up()
	{
		Schema::create('patient', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('first_name', 100);
			$table->string('last_name', 100);
			$table->string('address', 100)->nullable();
			$table->string('phone', 100)->unique()->nullable();
			$table->bigInteger('folder_id')->unique();
			$table->string('age')->nullable();
			$table->string('email', 100)->nullable();
			$table->string('profession', 100)->nullable();
			$table->bigInteger('doctor_id');
			$table->string('family_situation', 100)->nullable();
			$table->enum('sexe', array('m', 'f'));
			$table->string('others', 200)->nullable();
			$table->datetime('delete_at');
		});
	}

	public function down()
	{
		Schema::drop('patient');
	}
}