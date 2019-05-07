<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacts extends MY_Controller {
	public function index()
	{
		$data['title'] = 'Contact';
		$data['Contact'] = $this->Contacts_model->get_all_contact();
		$this->load->view('Admin/view_contacts',$data);
    }

public function __construct()
    {
		parent::__construct();
		$this->load->model("Admin/Contacts_model",'Contacts_model');
		$this->login_check();
    }
}?>