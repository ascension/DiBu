<?php

class LoginController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	
	protected $layout = 'layouts.master';

	public function loginWithGoogle() 
	{
	
	    // get data from input
	    $code = Input::get( 'code' );
	
	    // get google service
	    $googleService = OAuth::consumer( 'Google' );
	
	    // check if code is valid
	
	    // if code is provided get user data and sign in
	    if ( !empty( $code ) ) {
	
	        // This was a callback request from google, get the token
	        $token = $googleService->requestAccessToken( $code );
	
	        // Send a request with it
	        $result = json_decode( $googleService->request( 'https://www.googleapis.com/oauth2/v1/userinfo' ), true );
	
	        $message = 'Your unique Google user id is: ' . $result['id'] . ' and your name is ' . $result['name'];
	        echo $message. "<br/>";
	
	        //Var_dump
	        //display whole array().
	        dd($result);
	
	    }
	    // if not ask for permission first
	        else {
	        // get googleService authorization
	        $url = $googleService->getAuthorizationUri();
	
	        // return to facebook login url
	        return Redirect::to( (string)$url );
	    }
	}

	
	public function loginWithFacebook() {

	    // get data from input
	    $code = Input::get( 'code' );
	
	    // get fb service
	    $fb = OAuth::consumer('Facebook','http://noah.bunce.io/login/facebook/');
	
	    // check if code is valid
	
	    // if code is provided get user data and sign in
	    if ( !empty( $code ) ) {
	
	        // This was a callback request from facebook, get the token
	        $token = $fb->requestAccessToken($code);
	
	        // Send a request with it
	        $result = json_decode( $fb->request( '/me' ), true );
	
	        $message = 'Your unique facebook user id is: ' . $result['id'] . ' and your name is ' . $result['name'];
	        
	        $user = User::where('facebook_id',$result['id'])->first();
	        
	        if(count($user) > 0)
	        {
		        Auth::login($user);
		        
		        echo $message;
		        
		        //return Redirect::to('/me');
	        }
	        else
	        {
		       $nuser = new User();
		       
		       $nuser->first_name 	= $result['first_name']; 
		       $nuser->last_name 	= $result['last_name']; 
		       $nuser->email 		= $result['email']; 
		       $nuser->facebook_id 	= $result['id']; 
		       $nuser->created_at 	= time();
		       $nuser->updated_at 	= time(); 
		       
		       $nuser->save();
		       
		       Auth::login($nuser);
		        
		       return Redirect::to('/me');
	        }

			

			
	
	    }
	    // if not ask for permission first
	    else {
	        // get fb authorization
	        $url = $fb->getAuthorizationUri();
	
	        // return to facebook login url
	         return Redirect::to((string)$url);
	    }

	}

}
