<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
/*
Route::get( '/', 'HomeController@getIndex' );

Route::controller( '/users', 'UserController' );
Route::controller( '/admin', 'AdminController' );
Route::controller( 'contact', 'ContactController' );
Route::controller( 'services', 'ServicesController' );
*/

Route::get('/', function()
{
	return 'hello';
});

/*
Route::get( 'users', function()
					{
						return View::make( 'users' )->with( 'users', User::all() );
					} );

Route::get( 'register', function ()
						{								
							return View::make( 'register' );
						} );
						
						
Route::post( 'register', function()
						{
							$rules = array( 'name' => array( 'required', 'unique:users,name' ),
											'email' => array( 'required', 'email', 'unique:users,email' ),
											'password' => array( 'required', 'min:8' )
										);
									
							$validation = Validator::make( Input::all(), $rules );		
							
							if( $validation->fails() )
							{
								return Redirect::to( 'register' )->withErrors( $validation );
								print_r( $validation->messages() );
								exit;
							}
							
			//				print_r( Input::except( '_token' ) );
			
							//	User::create( Input::except( '_token' ) );
							DB::table( 'users' )->insert(  Input::except( '_token' ) );
		//					DB::insert( 'INSERT INTO users ( name, email, password ) values( ?, ?, ? )', Input::except( '_token' ) );
						} );
*/