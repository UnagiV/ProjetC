<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTCollaborateursChargesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('T_Collaborateurs_Charges', function(Blueprint $table)
		{
			$table->integer('Id_TCc', true);
			$table->string('Collaborateur_TCa')->nullable();
			$table->dateTime('Date_TCc')->nullable();
			$table->float('Prime_TCc', 10, 0)->nullable()->default(0);
			$table->float('PE_TCc', 10, 0)->nullable()->default(0);
			$table->float('Total_Cot_TCc', 10, 0)->nullable()->default(0);
			$table->float('Total_Ret_TCc', 10, 0)->nullable()->default(0);
			$table->float('Total_Salaire_TCc', 10, 0)->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('T_Collaborateurs_Charges');
	}

}
