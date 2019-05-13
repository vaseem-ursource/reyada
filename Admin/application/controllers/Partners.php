<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Partners extends CI_Controller {
	public function index()
	{
		$data['title'] = 'Partners';
		$data['Partners'] = $this->Partners_model->get_all_partners();
		$this->load->view('view_partners',$data);
    }

    public function Add()
		{
		$data['title'] = 'Partners';
		$this->load->view('add_partners',$data);
		}
		
		public function Insert()
		{	
			if(isset($_POST['insert']))
			{
				$redirect=1;
			}
			elseif(isset($_POST['save']))
			{
				$redirect=0;
			}
		
			date_default_timezone_set('Asia/Kuwait');
			$data = array(
			'company_name' => $this->input->post('companyName'),
			'address' => $this->input->post('address'),
			'phone' => $this->input->post('phone'),
			'person_incharge' => $this->input->post('personIncharge'),
			'email' => $this->input->post('email'),   
			'password' => $this->input->post('password'),
			'comments' => $this->input->post('comments'), 
			);
			return $this->display_status(
				$this->Partners_model->insert_partners_db($data),
				'Partner Inserted Successfully','Failed to Insert Partner',$redirect,0);
		}

	
		public function Edit(){ 
			$partner_id=$this->input->get('id');
			$data['Partners'] = $this->Partners_model->get_partner_on_id($partner_id);
			$this->load->view("edit_partners.php",$data);
		}

		public function Update(){ 
			$partner_id=$this->input->post('partner_id');
			date_default_timezone_set('Asia/Kuwait');
			$data = array(
			'company_name' => $this->input->post('companyName'),
			'address' => $this->input->post('address'),
			'phone' => $this->input->post('phone'),
			'person_incharge' => $this->input->post('personIncharge'),
			'email' => $this->input->post('email'),   
			'password' => $this->input->post('password'),
			'comments' => $this->input->post('comments'),
			);
			return $this->display_status(
				$this->Partners_model->update_partners_db($partner_id,$data),
				'Partner Updated Successfully','Failed to Update Partner',1,0
		);
		}

		public function Change()
		{
			$partner_id=$this->input->get('id'); 
			$data['title'] = 'Change Password';
			$data['PartnerId'] = $partner_id;
			$this->load->view('partners_change_password',$data);
		}

		public function UpdatePassword(){ 
			$partner_id=$this->input->post('partner_id');
			$password=$this->Partners_model->get_partner_on_id($partner_id)->password; 
			if($password != $this->input->post('oldPassword')){
				$this->display_status(1,'Old Password Doesnot Matched','Old Password Doesnot Matched',2,$partner_id
				);
			}
			$data = array(
                'password' => $this->input->post('newPassword'),
			);
			return $this->display_status(
				$this->Partners_model->update_partners_db($admin_user_id,$data),
				'Password Changed Successfully','Failed to Change Password',1,0
		);
		}

		private function display_status($status,$success,$fail,$redirect,$partner_id)
		{
				if($status)
				{
						$this->session->set_flashdata('success', $success);
				}
				else{
						$this->session->set_flashdata('warning', $fail);
				}
				if($redirect==1)
				{
					return redirect('Partners');
				}	
				elseif($redirect==2)
				{
					return redirect('Partners/Change?id='.$partner_id);
				}
				else
				{
				  return redirect('Partners/Add');
				}
		}
    
    
    public function __construct()
    {
		parent::__construct();
				if($this->session->userdata('user_name')){
				}
				else{
					redirect(base_url('Login'));  
				}  
				$this->load->model("Partners_model",'Partners_model');
				if($this->session->userdata('role') == 'admin' || $this->session->userdata('role') == 'Admin'){
				}
				else{
					redirect(base_url('Members'));  
				}     
    }
}?>