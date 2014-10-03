<?php

use Faker\Factory as Faker;
use Larabook\statuses\status;
use Larabook\users\user;

class StatusesTableSeeder extends Seeder
{

	public function run()
	{
		
		$faker = Faker::create();
		$usersIds = User::lists('id');

		foreach (range(1, 50) as $index) {
			Status::create(array(
				'user_id' => $faker->randomElement($usersIds),
				'body'    => $faker->sentence
			));
		}
		
	}

}