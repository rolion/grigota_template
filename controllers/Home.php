<?php
defined( 'BASEPATH' ) OR exit( 'No direct script access allowed' );

class Home extends MY_Controller
{
	public function index ()
	{
		$this->renderView('public/home/index/main_content');
	}
}
