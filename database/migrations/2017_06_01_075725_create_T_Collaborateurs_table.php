<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTCollaborateursTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('T_Collaborateurs', function(Blueprint $table)
		{
			$table->integer('Id_TCa', true);
			$table->string('Collaborateur_TCa')->nullable();
			$table->dateTime('Date_In_TCa')->nullable();
			$table->dateTime('Date_Out_TCa')->nullable();
			$table->integer('Acces_TCa')->nullable();
			$table->string('Responsable_TCa')->nullable();
			$table->boolean('TR_TCa')->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('T_Collaborateurs');
	}

}
