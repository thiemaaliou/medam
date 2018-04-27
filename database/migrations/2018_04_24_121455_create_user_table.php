<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserTable extends Migration {

	public function up()
	{
		Schema::create('user', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('first_name', 100);
			$table->string('last_name', 100);
			$table->string('username', 100);
			$table->string('password', 500);
			$table->string('image_name', 100)->nullable();
			$table->enum('profil', array('Administrateur', 'Editeur', 'Speciale', 'Simple'));
			$table->boolean('status')->default(0);
			$table->datetime('delete_at')->nullable();
			$table->datetime('update_at')->nullable();
			$table->string('address')->nullable();
			$table->string('personnal_phone', 100)->nullable();
			$table->string('office_phone', 100)->nullable();
			$table->integer('office_id');
			$table->integer('boss_id')->nullable();
			$table->string('email', 100)->unique();
		});
	}

	public function down()
	{
		Schema::drop('user');
	}
}