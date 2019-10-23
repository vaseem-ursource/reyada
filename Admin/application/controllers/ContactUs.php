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

	public function Delete(){
		$id = $this->input->get('id');
		$this->ContactUs_model->delete($id);
		$this->session->set_flashdata('success', 'Record Deleted Successfully');
		redirect('ContactUs/index');
		
	}
 
    public function __construct()
    {
		parent::__construct();
		if($this->session->userdata('user_name')){
		}
		else{
			redirect(base_url('Login'));  
		}  
        $this->load->model("ContactUs_model",'ContactUs_model');
         if($this->session->userdata('role') == 'admin' || $this->session->userdata('role') == 'Admin'){
		}
		else{
		  redirect(base_url('Members'));  
		}     
    }
}
?>