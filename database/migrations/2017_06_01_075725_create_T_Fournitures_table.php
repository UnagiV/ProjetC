<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTFournituresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('T_Fournitures', function(Blueprint $table)
		{
			$table->integer('Id_TFos', true);
			$table->string('Class_TFos')->nullable();
			$table->string('Des_TFos')->nullable();
			$table->string('Ref_TFos')->nullable();
			$table->string('Marque_TFos')->nullable();
			$table->string('Fournisseur_TFo')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('T_Fournitures');
	}

}
