<?php

use \Larabook\Forms\RegistrationForm;
use \Larabook\Registration\RegisterUserCommand;
use Larabook\Users\Profile;
use Larabook\Users\User;


class RegistrationController extends \BaseController {

	private $registrationForm;	

	function __construct(RegistrationForm $registrationForm){
		$this->registrationForm = $registrationForm;
		$this->beforeFilter('guest');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		  return View::make('registration.create');
	}

	public function store()
	{
		$this->registrationForm->validate(Input::all());

        $user = $this->execute(RegisterUserCommand::class);
		
		Auth::login($user);

		Flash::success('Glad to have you as a new Larabook member!');

		return Redirect::home();
	}


    public function loginWithFacebook()
    {

        // get data from input
        $code = Input::get( 'code' );

        // get fb service
        $fb = OAuth::consumer( 'Facebook' );

        // check if code is valid

        // if code is provided get user data and sign in
        if ( !empty( $code ) ) {

            // This was a callback request from facebook, get the token
            $token = $fb->requestAccessToken( $code );

            // Send a request with it
            $result = json_decode( $fb->request( '/me' ), true );

            $uid = $result['id'];
            $profile = Profile::whereUid($uid)->first();
            if (empty($profile)) {

                $input = array();
                $input['username'] = $result['username'];
                $input['email'] = $result['email'];
                $this->registrationForm->validate($input);

                $user = new User;
                $user->name = $result['first_name'].' '.$result['last_name'];
                $user->email = $result['email'];
                $user->username = $result['username'];
                $user->save();

                $profile = new Profile();
                $profile->uid = $uid;
                $profile->username = $result['username'];
                $profile = $user->profiles()->save($profile);
            }

            $profile->access_token = $token->getAccessToken();
            $profile->save();

            $user = $profile->user;

            Auth::login($user);

            Flash::success('Glad to have you as a new Larabook member with facebook!');

            return Redirect::home();

        }
        // if not ask for permission first
        else {
            // get fb authorization
            $url = $fb->getAuthorizationUri();

            // return to facebook login url
            return Redirect::to( (string)$url );
        }
    }
}
