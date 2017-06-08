<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTContactTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('T_Contact', function(Blueprint $table)
		{
			$table->integer('Id_TCo', true);
			$table->string('Ste_TCl')->nullable()->index('Ste_TCl');
			$table->string('Entite_TCo')->nullable();
			$table->string('Adr_Liv_TCl')->nullable();
			$table->string('Contact_TCo')->nullable();
			$table->string('EMail_TCo')->nullable();
			$table->string('Tel_TCo')->nullable();
			$table->string('Indicatif_TCo')->nullable();
			$table->string('Port_TCo')->nullable();
			$table->string('N_Poste')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('T_Contact');
	}

}
