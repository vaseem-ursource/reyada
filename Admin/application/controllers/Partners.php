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
			'comments' => $this->input->post('comments'), 
			'status' => $this->input->post('staus'), 
			);
			$this->Partners_model->insert_partners_db($data);
			$partner_id = $this->db->insert_id();

			$data1 = array(
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password')),
				'role' => 'Partner',
				'partner_id' => $partner_id,
				'status' => 'Active',   
				);
			return $this->display_status(
				$this->Partners_model->insert_admin_users_db($data1),
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
			'comments' => $this->input->post('comments'),
			'status' => $this->input->post('status'),
			);
			return $this->display_status(
				$this->Partners_model->update_partners_db($partner_id,$data),
				'Partner Updated Successfully','Failed to Update Partner',1,0
		);
		}
		public function Status(){ 
			$partner_id=$this->input->get('id'); 
			$status=$this->Partners_model->get_partner_on_id($partner_id)->status; 
			if($status == 'Active' || $status == 'active'){ 
					 $status = 'Inactive'; 
			}else{ 
					 $status='Active'; 
			} 
			$data = array( 
					 'status' => $status 
			); 
			return $this->display_status( 
					 $this->Partners_model->update_partners_db($partner_id,$data), 
					 'Admin User Status Changed','Failed to Change Status Admin User',1,0 
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