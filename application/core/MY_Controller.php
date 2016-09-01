<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
 
	public function __construct()
	{
		parent::__construct();
	}
}

class Public_Controller extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

}

class Admin_Controller extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->loginControl();
 	}

	public function loginControl()
	{
		if($this->session->userdata('login')==null){
			redirect('auth/giris');
		}	
	}
}