<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTTachesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('T_Taches', function(Blueprint $table)
		{
			$table->integer('Id_TTa', true);
			$table->string('Responsable_TCa')->nullable()->index('Responsable_TCa');
			$table->dateTime('Date_TTa')->nullable()->default('0000-00-00 00:00:00');
			$table->string('Ste_TCl')->nullable()->index('Ste_TCl');
			$table->string('Ste_Utl')->nullable()->index('Ste_Utl');
			$table->string('Adr_Liv_TCl')->nullable()->index('Adr_Liv_TCl');
			$table->string('Contact_TCo')->nullable()->index('Contact_TCo');
			$table->string('Collaborateur_TCa')->nullable()->index('Collaborateur_TCa');
			$table->string('NDevis_TDv')->nullable()->index('NDevis_TDv');
			$table->string('Devis_Type_TTa')->nullable();
			$table->string('NCommande_TDv')->nullable()->index('NCommande_TDv');
			$table->dateTime('Date_Debut_TTa')->nullable();
			$table->dateTime('Date_Fin_TTa')->nullable();
			$table->dateTime('Date_Demande_TTa')->nullable();
			$table->string('Responsable_TCl')->nullable()->index('Responsable_TCl');
			$table->string('Machine_TTa')->nullable()->index('Machine_TTa');
			$table->boolean('Garantie_TTa')->nullable()->default(0);
			$table->boolean('Facturation_TTa')->nullable()->default(0);
			$table->string('Travaux_TTa')->nullable()->index('Travaux_TTa');
			$table->text('Observations_Camei_TTa')->nullable();
			$table->text('Observations_Client_TTa')->nullable();
			$table->integer('Qte_Forfait_Nuit_TTa')->nullable()->default(0);
			$table->float('Prix_Forfait_Nuit_TTa', 10, 0)->nullable()->default(100);
			$table->float('Total_Km_TTa', 10, 0)->nullable()->default(0);
			$table->float('PeageTTC_TTa', 10, 0)->nullable()->default(0);
			$table->float('Prix_Km_TTa', 10, 0)->nullable()->default(1);
			$table->float('Total_Trajet_U_TTa', 10, 0)->nullable()->default(0);
			$table->boolean('Type_Elec')->nullable()->default(0);
			$table->boolean('Type_Tech')->nullable()->default(0);
			$table->boolean('Type_Autom')->nullable()->default(0);
			$table->boolean('Type_Etude')->nullable()->default(0);
			$table->boolean('Fact_TFCl')->nullable()->default(0);
			$table->string('NFacture_TFCl')->nullable();
			$table->dateTime('Date_TFCl')->nullable()->index('Date_TFCl');
			$table->float('Total_MO_HT_TTa', 10, 0)->nullable()->default(0);
			$table->float('Total_Achat_HT_TTa', 10, 0)->nullable()->default(0);
			$table->float('Total_Vente_HT_TTa', 10, 0)->nullable()->default(0);
			$table->float('Total_Trajet_HT_TTa', 10, 0)->nullable()->default(0);
			$table->float('Total_Depl_HT_TTa', 10, 0)->nullable()->default(0);
			$table->float('Total_HT_TTa', 10, 0)->nullable()->default(0);
			$table->float('TVA_TTa', 10, 0)->nullable()->default(0.2);
			$table->float('Total_TVA_TTa', 10, 0)->nullable()->default(0);
			$table->float('Total_TTC_TTa', 10, 0)->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('T_Taches');
	}

}
