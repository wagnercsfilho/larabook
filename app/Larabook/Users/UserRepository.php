<?php namespace Larabook\Users;


/**
 * Class UserRepository
 * @package Larabook\Users
 */
class UserRepository {

    /**
     * @param User $user
     * @return mixed
     */
    public function save(User $user){
		return $user->save();
	}

    /**
     * @param int $howMany
     * @return mixed
     */
    public function getPaginated($howMany = 25)
	{
		return User::orderBy('username','asc')->paginate($howMany);
	}

    /**
     * @param $username
     * @return mixed
     */
    public function findByUsername($username)
	{
		return User::with('statuses')->whereUsername($username)->first();
	}

    /**
     * @param $id
     * @return mixed
     */
    public function findById($id)
    {
        return User::findOrFail($id);
    }

    /**
     * Follow a Larabook user
     * @param $userIdToFollow
     * @param User $user
     * @return mixed
     */
    public function follow($userIdToFollow, User $user)
    {
        return $user->followedUsers()->attach($userIdToFollow);
    }

    /**
     * Unfollow a Larabook User.
     * @param $userIdToUnfollow
     * @param User $user
     * @return mixed
     */
    public function unfollow($userIdToUnfollow, User $user)
    {
        return $user->followedUsers()->detach($userIdToUnfollow);
    }
}