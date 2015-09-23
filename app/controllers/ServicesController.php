<?php
	class ServicesController extends BaseController
	{
			protected $layout = 'layouts.main';
			public $restful = true;
			
			public function getIndex()
			{
				$this->layout->content = View::make( 'services.main' );
			}
	}
?>