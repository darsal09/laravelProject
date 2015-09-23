<?php

class UserController extends BaseController {

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

	protected $layout = 'layouts.main';
	public $restful = true;
	
	public function getIndex()
	{
		$this->layout->content = View::make( 'users.index' );
	}
	
	public function getRegister()
	{
		$this->layout->content = View::make( 'users.register' );
	}

	public function getLogin()
	{
		$this->layout->content = View::make( 'users.login' );
	}
	
	public function postCreate()
	{
		print_r( Input::get() );
		$this->layout->content = View::make( 'users.register' );
	}
	
	
	public function missingMethod( $parameter = array() )
	{
		throw Exepction( 'Method not found!' );
	}
}