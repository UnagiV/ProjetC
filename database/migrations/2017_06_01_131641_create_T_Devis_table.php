<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTDevisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('T_Devis', function(Blueprint $table)
		{
			$table->integer('Id_TDv', true);
			$table->dateTime('Date_TDv')->nullable()->default('0000-00-00 00:00:00');
			$table->string('NDevis_TDv')->nullable()->index('NDevis_TDv');
			$table->string('NCommande_TDv')->nullable()->index('NCommande_TDv');
			$table->string('Ste_TCl')->nullable()->index('Ste_TCl');
			$table->string('Ste_Utl')->nullable()->index('Ste_Utl');
			$table->string('Travaux_TDv')->nullable()->index('Travaux_TDv');
			$table->float('Total_HT_TDv', 10, 0)->nullable()->default(0);
			$table->float('TVA_TDv', 10, 0)->nullable()->default(0.2);
			$table->float('Total_TVA_TDv', 10, 0)->nullable()->default(0);
			$table->float('Total_TTC_TDv', 10, 0)->nullable()->default(0);
			$table->integer('Id_Acpte_TTa')->nullable()->unique('Id_Acpte_TTa');
			$table->float('Acpte_Pct_TDv', 10, 0)->nullable()->default(0.3);
			$table->boolean('Fact_Acpte_TTa')->nullable()->default(0);
			$table->dateTime('Date_Acpte_TTa')->nullable()->index('Date_Acpte_TTa');
			$table->string('NFacture_Acpte_TFCl')->nullable()->index('NFacture_Acpte_TFCl');
			$table->integer('Id_Liv_TTa')->nullable()->unique('Id_Liv_TTa');
			$table->float('Livraison_Pct_TDv', 10, 0)->nullable()->default(0);
			$table->boolean('Fact_Liv_TTa')->nullable()->default(0);
			$table->dateTime('Date_Liv_TTa')->nullable()->index('Date_Liv_TTa');
			$table->string('NFacture_Liv_TFCl')->nullable()->index('NFacture_Liv_TFCl');
			$table->integer('Id_Solde_TTa')->nullable()->unique('Id_Solde_TTa');
			$table->float('Solde_Pct_TDv', 10, 0)->nullable()->default(0.7);
			$table->boolean('Fact_Solde_TTa')->nullable()->default(0);
			$table->dateTime('Date_Solde_TTa')->nullable()->index('Date_Solde_TTa');
			$table->string('NFacture_Solde_TFCl')->nullable()->index('NFacture_Solde_TFCl');
			$table->dateTime('Date_Demande_TDv')->nullable();
			$table->string('Responsable_TCl')->nullable()->index('Responsable_TCl');
			$table->string('Machine_TTa')->nullable()->index('Machine_TTa');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('T_Devis');
	}

}
