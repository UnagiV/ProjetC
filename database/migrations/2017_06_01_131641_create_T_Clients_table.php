<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTClientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('T_Clients', function(Blueprint $table)
		{
			$table->integer('Id_TCl', true);
			$table->integer('An_TCl')->nullable()->default(0);
			$table->string('Ste_TCl')->nullable()->index('Ste_TCl');
			$table->string('Adr_Fact_TCl')->nullable();
			$table->string('Contact_TCl')->nullable();
			$table->string('Tel_TCl')->nullable();
			$table->string('Fax_TCl')->nullable();
			$table->string('EMail_TCl')->nullable();
			$table->string('Web_TCl')->nullable();
			$table->string('Mdr_TCl')->nullable();
			$table->text('Information_TCl')->nullable();
			$table->integer('Siret_TCl')->nullable();
			$table->integer('Siren_TCl')->nullable();
			$table->boolean('TPE_TCl')->nullable()->default(0);
			$table->boolean('PME_PMI_TCl')->nullable()->default(0);
			$table->boolean('ETI_TCl')->nullable()->default(0);
			$table->boolean('Grands_Comptes_TCl')->nullable()->default(0);
			$table->boolean('Particulier_TCl')->nullable()->default(0);
			$table->boolean('Collec_TCl')->nullable()->default(0);
			$table->float('Tarif_Elec', 10, 0)->nullable()->default(45);
			$table->float('Tarif_Tech', 10, 0)->nullable()->default(60);
			$table->float('Tarif_Autom', 10, 0)->nullable()->default(70);
			$table->float('Tarif_Etude', 10, 0)->nullable()->default(55);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('T_Clients');
	}

}
