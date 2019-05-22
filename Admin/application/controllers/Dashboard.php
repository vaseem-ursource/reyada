<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index()
	{
		$this->load->view('dashboard');
	}

	public function __construct()
    {
		parent::__construct();
				if($this->session->userdata('user_name')){
				}
				else{
					redirect(base_url('Login'));  
				}  
				if($this->session->userdata('role') == 'admin' || $this->session->userdata('role') == 'Admin'){
				}
				else{
					redirect(base_url('Members'));  
				}     
    }
}
