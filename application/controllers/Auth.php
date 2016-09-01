<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');

		
	}

	public function girisControl()
	{
		$girisyaptimi = $this->session->userdata('login');
	
		if ($girisyaptimi == true) {
			redirect('carrental/adminPanel');
		}

	}
	public function index()
	{
		$this->girisControl();
		redirect(base_url('auth/giris'));
  	}	
 	public function giris()
	{
	
		$girisyaptimi = $this->session->userdata('login');
	
		if($this->input->post() == false){
			$this->load->view('auth/giris');
 		
		}else{
			$user =$this->input->post('username');
                $passw =$this->input->post('parola');
                $this->load->model('Carrental_model');
                $result = $this->Carrental_model->login($user,$passw);
			 
				if($result) {
                   $sess_array = array();
                   foreach($result as $row) {
                       $sess_array = array(
                       'id' => $row->id, 
                       'username' => $row->ad 
                       );
                       
                       $this->session->set_userdata('logged_in', $sess_array);
                       redirect(base_url('carrental/adminPanel'));
                       }
                  return TRUE;
                } else {
                    
                  $hata= 'Invalid username or password';
                  $this->load->view('auth/giris');
                  return FALSE;
                }
			 

		}

		}

		public function cikis()
		{
			$this->session->unset_userdata('login');
			redirect(base_url('auth/giris'));
		}

}
