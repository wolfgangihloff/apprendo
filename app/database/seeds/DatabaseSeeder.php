<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UsersTableSeeder');
        $this->call('GamesTableSeeder');
	}

}
class UsersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
            'id' => 1,
            'username' => 'Julia',
            'email' => 'test@test1.com',
            'name' => 'mayer',
            'password' => Hash::make('first_password'),
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        User::create(array(
            'id' => 2,
            'name' => 'Vanessa',
            'username' => 'seconduser',
            'email' => 'test@test2.com',
            'password' => Hash::make('second_password'),
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        User::create(array(
          'id' => 3,
          'name' => 'mayer',
          'username' => 'admin',
          'email' => 'test@test4.com',
          'password' => Hash::make('password'),
          'created_at' => new DateTime,
          'updated_at' => new DateTime
        ));
        User::create(array(
            'id' => 4,
            'name' => 'Eve',
            'username' => 'seconduser',
            'email' => 'test@test5.com',
            'password' => Hash::make('second_password'),
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
    }
}

class GamesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('games')->delete();
        Game::create(array(
            'id' => 1,
            'name' => 'worm',
            'picture' => 'http://apprendo-development.s3.amazonaws.com/worm.png',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        Game::create(array(
            'id' => 2,
            'name' => 'turtle',
            'picture' => 'http://apprendo-development.s3.amazonaws.com/turtle.png',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        Game::create(array(
            'id' => 3,
            'name' => 'toucan',
            'picture' => 'http://apprendo-development.s3.amazonaws.com/toucan.png',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        Game::create(array(
            'id' => 4,
            'name' => 'toad',
            'picture' => 'http://apprendo-development.s3.amazonaws.com/toad.png',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        Game::create(array(
            'id' => 5,
            'name' => 'starfish',
            'picture' => 'http://apprendo-development.s3.amazonaws.com/starfish.png',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        Game::create(array(
            'id' => 6,
            'name' => 'shark',
            'picture' => 'http://apprendo-development.s3.amazonaws.com/shark.png',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        Game::create(array(
            'id' => 7,
            'name' => 'seahorse',
            'picture' => 'http://apprendo-development.s3.amazonaws.com/seahorse.png',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        Game::create(array(
            'id' => 8,
            'name' => 'pig',
            'picture' => 'http://apprendo-development.s3.amazonaws.com/pig.png',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        Game::create(array(
            'id' => 9,
            'name' => 'penguin',
            'picture' => 'http://apprendo-development.s3.amazonaws.com/penguin.png',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        Game::create(array(
            'id' => 10,
            'name' => 'panda',
            'picture' => 'http://apprendo-development.s3.amazonaws.com/panda.png',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        Game::create(array(
            'id' => 11,
            'name' => 'lion',
            'picture' => 'http://apprendo-development.s3.amazonaws.com/lion.png',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        Game::create(array(
            'id' => 12,
            'name' => 'ladybug',
            'picture' => 'http://apprendo-development.s3.amazonaws.com/ladybug.png',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        Game::create(array(
            'id' => 13,
            'name' =>'horse',
            'picture' => 'http://apprendo-development.s3.amazonaws.com/horse.png',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        Game::create(array(
            'id' => 14,
            'name' => 'goat',
            'picture' => 'http://apprendo-development.s3.amazonaws.com/goat.png',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        Game::create(array(
            'id' => 15,
            'name' => 'fox',
            'picture' => 'http://apprendo-development.s3.amazonaws.com/fox.png',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        Game::create(array(
            'id' => 16,
            'name' => 'eagle',
            'picture' => 'http://apprendo-development.s3.amazonaws.com/eagle.png',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        Game::create(array(
            'id' => 17,
            'name' => 'duck',
            'picture' => 'http://apprendo-development.s3.amazonaws.com/duck.png',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));

        Game::create(array(
            'id' => 18,
            'name' => 'clownfish',
            'picture' => 'http://apprendo-development.s3.amazonaws.com/clownfish.png',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));

        Game::create(array(
            'id' => 19,
            'name' => 'cat',
            'picture' => 'http://apprendo-development.s3.amazonaws.com/cat.png',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        Game::create(array(
            'id' => 20,
            'name' => 'butterfly',
            'picture' => 'http://apprendo-development.s3.amazonaws.com/butterfly.png',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));



    }
}