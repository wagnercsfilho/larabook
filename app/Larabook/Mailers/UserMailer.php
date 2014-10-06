<?php namespace Larabook\Mailers;


use Larabook\Users\User;

class UserMailer extends Mailer {

    public function sendWelcomeMessageTo(User $user)
    {
        $subject = 'Welcome ro Larabook!';
        $view = 'emails.registration.confirm';
        $data = [];

        $this->sendTo($user, $subject, $view, $data);
    }

} 