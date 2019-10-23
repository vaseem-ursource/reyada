<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Members extends CI_Controller {
	public function index()
	{
		$data['title'] = 'Members';
		$this->load->view('view_members',$data);
	}
        
        
    public function __construct()
    {
			parent::__construct();
			if($this->session->userdata('user_name')){
			}
			else{
				redirect(base_url('Login'));  
			}  
    }
}
?>