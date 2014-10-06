<?php namespace Larabook\Handlers;

use Larabook\Mailers\UserMailer;
use Larabook\Registration\Events\UserRegistered;
use Laracasts\Commander\Events\EventListener;

/**
 * Class EmailNotifier
 * @package Larabook\Handlers
 */
class EmailNotifier extends EventListener{

    /**
     * @var \Larabook\Mailers\UserMailer
     */
    private $mailer;

    /**
     * @param UserMailer $mailer
     */
    function __construct(UserMailer $mailer)
    {
        $this->mailer = $mailer;
    }


    /**
     * @param UserRegistered $event
     */
    public function whenUserRegistered(UserRegistered $event)
    {
        $this->mailer->sendWelcomeMessageTo($event->user);
    }
} 