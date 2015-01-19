<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAwsAccountsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('aws_accounts', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->string('key')->unique();
                        $table->string('secret');
                        $table->string('region'); // enum
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('aws_accounts');
	}

}
