<?php  namespace Larabook\Statuses;

use Larabook\Users\User;

/**
 * Class StatusRepository
 * @package Larabook\Statuses
 */
class StatusRepository {

    /**
     * @param User $user
     * @return mixed
     */
    public function getAllForUser(User $user)
	{
		return $user->statuses()->with('user')->latest()->get();
	}

    /** Get status for a user
     * @param User $user
     * @return mixed
     */
    public function getFeedForUser(User $user)
    {
        $usersIds = $user->followedUsers()->lists('followed_id');
        $usersIds[] = $user->id;

        return Status::whereIn('user_id', $usersIds)->latest()->get();
    }


    /**
     * @param Status $status
     * @param $userId
     * @return mixed
     */
    public function save(Status $status, $userId)
	{
		return User::findOrFail($userId)
			->statuses()
			->save($status);
	}

    /**
     * @param $userId
     * @param $statusId
     * @param $body
     * @return mixed
     */
    public function leaveComment($userId, $statusId, $body)
    {
        $comment = Comment::leave($body, $statusId);

        User::findOrFail($userId)->comments()->save($comment);

        return $comment;
    }

}