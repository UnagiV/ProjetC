<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTTachesDetailsMOTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('T_Taches_Details_MO', function(Blueprint $table)
		{
			$table->integer('Id_TTaDMo', true);
			$table->integer('Id_TTa')->nullable()->index('Id_TTa');
			$table->dateTime('Date_TTaDMo')->nullable();
			$table->dateTime('Aller_Depart_TTaDMo')->nullable();
			$table->dateTime('Aller_Arrivee_TTaDMo')->nullable();
			$table->dateTime('Matin_Debut_TTaDMo')->nullable();
			$table->dateTime('Matin_Fin_TTaDMo')->nullable();
			$table->dateTime('AMidi_Debut_TTaDMo')->nullable();
			$table->dateTime('AMidi_Fin_TTaDMo')->nullable();
			$table->dateTime('Retour_Depart_TTaDMo')->nullable();
			$table->dateTime('Retour_Arrivee_TTaDMo')->nullable();
			$table->float('Duree_Aller_TTaDMo', 10, 0)->nullable()->default(0);
			$table->float('Duree_W_Matin_TTaDMo', 10, 0)->nullable()->default(0);
			$table->float('Duree_W_AMidi_TTaDMo', 10, 0)->nullable()->default(0);
			$table->float('Duree_W_Jour_TTaDMo', 10, 0)->nullable()->default(0);
			$table->float('Duree_Retour_TTaDMo', 10, 0)->nullable()->default(0);
			$table->integer('Trajet_TTaDMo')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('T_Taches_Details_MO');
	}

}
