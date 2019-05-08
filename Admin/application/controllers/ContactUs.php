<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactUs extends CI_Controller {
	public function index()
	{
		$data['title'] = 'Contact Us';
		$data['ContactUs'] = $this->ContactUs_model->get_all_contact();
		$this->load->view('view_contactus',$data);
		}
        
        public function View(){ 
            $email=$this->input->get('id');
            $data['ContactUs'] = $this->ContactUs_model->get_contact_details($email);
            $this->load->view("view_contact_details",$data);
        }
        
    public function __construct()
    {
		parent::__construct();
				$this->load->model("ContactUs_model",'ContactUs_model');
    }
}
?>