<?php

class AccountController extends BaseController {

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
	
	protected $layout = 'layouts.account';

	public function showWelcome()
	{
		$this->layout->content	= View::make('home.hello');
		$this->layout->header	= View::make('includes.header');
		$this->layout->footer	= View::make('includes.footer');
	}
	
	public function showLogin()
	{
		$this->layout->content	= View::make('home.signin');
		$this->layout->header	= View::make('includes.header');
		$this->layout->footer	= View::make('includes.footer');
	}
	
	public function showSignup()
	{
		$this->layout->content	= View::make('home.signup');
		$this->layout->header	= View::make('includes.header');
		$this->layout->footer	= View::make('includes.footer');
	}

}
