<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTFacturesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('T_Factures', function(Blueprint $table)
		{
			$table->integer('Id_TFCl', true);
			$table->string('Ste_TCl')->nullable()->index('Ste_TCl');
			$table->string('NClient')->nullable();
			$table->string('Contact_TCo')->nullable();
			$table->string('Responsable_TCa')->nullable();
			$table->string('NFacture_TFCl')->nullable()->index('NFacture_TFCl');
			$table->string('NDevis_TDv')->nullable()->index('NDevis_TDv');
			$table->string('NCommande_TDv')->nullable()->index('NCommande_TDv');
			$table->float('Devis_Pct_TCl', 10, 0)->nullable();
			$table->string('Devis_Type_TCl')->nullable();
			$table->string('Mdr_TCl')->nullable();
			$table->string('Adr_Fact_TCl')->nullable();
			$table->float('PctTVA_TFCl', 10, 0)->nullable()->default(0.2);
			$table->float('Acpte_TFCl', 10, 0)->nullable()->default(0);
			$table->dateTime('Date_TFCl')->nullable()->default('0000-00-00 00:00:00')->index('Date_TFCl');
			$table->dateTime('Ech_TFCl')->nullable();
			$table->dateTime('Send_TFCl')->nullable();
			$table->dateTime('Cpt_TFCl')->nullable();
			$table->dateTime('Paid_TFCl')->nullable();
			$table->boolean('Avoir_TFCl')->nullable()->default(0);
			$table->text('BlNote_TFCl')->nullable();
			$table->float('Total_MO_HT_TFCl', 10, 0)->nullable()->default(0);
			$table->float('Total_Vente_HT_TFCl', 10, 0)->nullable()->default(0);
			$table->float('Total_Trajet_HT_TFCl', 10, 0)->nullable()->default(0);
			$table->float('Total_Depl_HT_TFCl', 10, 0)->nullable()->default(0);
			$table->float('Total_HT_TFCl', 10, 0)->nullable()->default(0);
			$table->float('Total_TVA_TFCl', 10, 0)->nullable()->default(0);
			$table->float('Total_TTC_TFCl', 10, 0)->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('T_Factures');
	}

}
