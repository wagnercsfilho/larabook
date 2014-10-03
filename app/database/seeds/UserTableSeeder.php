<?php

use Faker\Factory as Faker;
use Larabook\users\user;

class UserTableSeeder extends Seeder
{

	public function run()
	{
		
		$faker = Faker::create();

		foreach (range(11,50) as $index) 
		{
			User::create(array(
				'username' => $faker->word . $index,
				'email'    => $faker->email,
				'password' => 'secret',
			));
		}
		
	}

}