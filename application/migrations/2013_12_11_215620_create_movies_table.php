<?php

class Create_Movies_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('movies', function($table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('desc');
			$table->string('length');
			$table->string('genero');
			$table->timestamps();
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('movies');
	}

}