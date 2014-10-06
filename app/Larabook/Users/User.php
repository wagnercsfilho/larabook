<?php namespace Larabook\Users;

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Larabook\Registration\Events\UserRegistered;
use Laracasts\Commander\Events\EventGenerator;
use Laracasts\Presenter\PresentableTrait;
use Eloquent, Hash;

/**
 * Class User
 * @package Larabook\Users
 */
class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait, EventGenerator, PresentableTrait;


    /**
     * @var array
     */
    protected $fillable = ['username', 'email', 'password'];

	/*
	 *
	 * The database table used by the model.
	 *
	 * @var string
	 */
    /**
     * @var string
     */
    protected $table = 'users';

    /**
     * @var string
     */
    protected $presenter = 'Larabook\Users\UserPresenter';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');


    /**
     * @return mixed
     */
    public function statuses()
	{
		return $this->hasMany('Larabook\Statuses\Status');
	}

    /**
     * @param $password
     */
    public function setPasswordAttribute($password)
	{
	    $this->attributes['password'] = Hash::make($password);
	}


    /**
     * @param $username
     * @param $email
     * @param $password
     * @return static
     */
    public static function register($username, $email, $password)
	{
		$user = new static(compact('username','email','password'));

		$user->raise(new UserRegistered($user));

		return $user;
	}

    /**
     * @param $user
     * @return bool
     */
    public function is($user)
	{
        if (is_null($user)) return false;

		return $this->username == $user->username;
	}

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

    /**
     * @return mixed
     */
    public function follows()
    {
        return $this->belongsToMany(self::class, 'follows', 'follower_id', 'followed_id')->withTimestamps();
    }

    public function isFollowedBy(User $otherUser)
    {
        $idsWhoOtherUserFollows = $otherUser->follows()->lists('followed_id');

        return in_array($this->id, $idsWhoOtherUserFollows);
    }


}
