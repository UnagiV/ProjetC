<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTTachesDetailsFournituresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('T_Taches_Details_Fournitures', function(Blueprint $table)
		{
			$table->integer('Id_TTaDFo', true);
			$table->integer('Id_TTa')->nullable();
			$table->foreign('Id_TTa')->references('Id_TTa')->on('T_taches');

			//$table->integer('Id_TTa')->nullable()->index('Id_TTa');
			$table->string('Class_TTaDFo')->nullable();
			$table->string('Des_TTaDFo')->nullable();
			$table->string('Ref_TTaDFo')->nullable();
			$table->float('Qte_TTaDFo', 10, 0)->nullable()->default(0);
			$table->float('PAHT_TTaDFo', 10, 0)->nullable()->default(0);
			$table->float('Tx_Mge_TTaDFo', 10, 0)->nullable()->default(1.5);
			$table->float('Vente_HT_TTaDFo', 10, 0)->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('T_Taches_Details_Fournitures');
	}

}
