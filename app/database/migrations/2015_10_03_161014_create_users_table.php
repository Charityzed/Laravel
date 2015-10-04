<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Users', function(Blueprint $table)

		{	$table->increments('id');
			$table->string('fname');
			$table->string('lname');
			$table->string('email');
			$table->string('password');
			$table->timestamp('created_at');
			$table->timestamp('updated_at');
			//
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Users', function(Blueprint $table)
		{
			//
		});
	}

}
