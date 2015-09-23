<?php

class AdminController extends BaseController
{

	protected $layout = 'layouts.main';
	public $restful = true;
	
	public function getIndex()
	{
		$this->layout->content = View::make( 'admin.main' );
	}
	
	public function getRegister()
	{
		$this->layout->content = View::make( 'users.register' );
	}

	public function missingMethod( $parameter = array() )
	{
		throw Exepction( 'Method not found!' );
	}
}
?>