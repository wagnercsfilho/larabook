<?php namespace Larabook\Users;


class Profile extends \Eloquent {

    public function user()
    {
        return $this->belongsTo('\Larabook\Users\User');
    }
}
