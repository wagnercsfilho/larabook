<?php namespace Larabook\Users;

use Laracasts\Presenter\Presenter;

class UserPresenter extends Presenter {

    public function gravatar($size = 30)
    {
    	$email = md5($this->email);

		return '//www.gravatar.com/avatar/'.$email.'?s='.$size;
    }

    public function avatarFb($type = '')
    {
        if ($type == 'large')
            return 'https://graph.facebook.com/'.$this->username.'/picture?type=large';
        else
            return 'https://graph.facebook.com/'.$this->username.'/picture';

    }

    public function followerCount()
    {
        $count = $this->entity->followers()->count();
        $plural = str_plural('Follower', $count);

        return "{$count} {$plural}";
    }

    public function statusCount()
    {
        $count = $this->entity->statuses()->count();
        $plural = str_plural('Status', $count);

        return "{$count} {$plural}";
    }
}