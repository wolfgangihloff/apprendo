<?php

use Illuminate\Database\Migrations\Migration;

class CreateGamescoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('gamescores', function($table)
        {
            $table->increments('id');
            $table->string('game_id');
            $table->string('user_id');
            $table->integer('score');
            $table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}