<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTFournisseursTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('T_Fournisseurs', function(Blueprint $table)
		{
			$table->integer('Id_TFo', true);
			$table->integer('Date_TFo')->nullable()->default(0);
			$table->string('Ste_TFo')->nullable()->default('0')->index('Ste_TFo');
			$table->string('Adr_TFo')->nullable()->default('0');
			$table->string('Contact_TFo')->nullable()->default('0');
			$table->string('Tel_TFo')->nullable();
			$table->string('Fax_TFo')->nullable();
			$table->string('EMail_TFo')->nullable();
			$table->string('Mdr_TFo')->nullable()->default('0');
			$table->text('Information_TFo')->nullable();
			$table->integer('Siret_TFo')->nullable();
			$table->integer('Siren_TFo')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('T_Fournisseurs');
	}

}
