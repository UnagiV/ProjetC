<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTAbsencesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('T_Absences', function(Blueprint $table)
		{
			$table->integer('Id_Jour_F', true);
			$table->string('Collaborateur_TCa')->nullable()->index('Collaborateur_TCa');
			$table->dateTime('Date_TTaDMo')->nullable();
			$table->boolean('Ferie_TABs')->nullable()->default(0);
			$table->boolean('Abscences_TABs')->nullable()->default(0);
			$table->boolean('Conges_TABs')->nullable()->default(0);
			$table->boolean('Maladie_TABs')->nullable()->default(0);
			$table->boolean('Ecole_TABs')->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('T_Absences');
	}

}
