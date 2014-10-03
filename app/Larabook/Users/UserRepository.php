<?php namespace Larabook\Users;


class UserRepository {

	public function save(User $user){
		return $user->save();
	}

	public function getPaginated($howMany = 25)
	{
		return User::orderBy('username','asc')->paginate($howMany);
	}

	public function findByUsername($username)
	{
		return User::orderBy('username','asc')->paginate($howMany);
	}

}