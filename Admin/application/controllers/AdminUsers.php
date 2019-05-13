<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminUsers extends CI_Controller {
	public function index()
	{
		$data['title'] = 'Admin Users';
		$data['AdminUsers'] = $this->AdminUsers_model->get_all_admin_users();
		$this->load->view('view_admin_user',$data);
    }

    public function Add()
		{
        $data['title'] = 'Admin Users';
        $data['Partners'] = $this->AdminUsers_model->get_all_partners();
		$this->load->view('add_admin_user',$data);
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
			$data = array(
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password'),
			'role' => $this->input->post('role'),
			'partner_id' => $this->input->post('partnerId'),
			'status' => $this->input->post('status'),   
			);
			return $this->display_status(
				$this->AdminUsers_model->insert_admin_users_db($data),
				'Admin User Inserted Successfully','Failed to Insert Admin User',$redirect,0);
		}

	
		public function Edit(){ 
			$admin_id=$this->input->get('id');
            $data['AdminUsers'] = $this->AdminUsers_model->get_admin_user_on_id($admin_id);
            $data['Partners'] = $this->AdminUsers_model->get_all_partners();            
			$this->load->view("edit_admin_user.php",$data);
		}

		public function Update(){ 
			$admin_id=$this->input->post('admin_id');
			$data = array(
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
                'role' => $this->input->post('role'),
                'partner_id' => $this->input->post('partnerId'),
                'status' => $this->input->post('status'), 
			);
			return $this->display_status(
				$this->AdminUsers_model->update_admin_users_db($admin_id,$data),
				'Admin User Updated Successfully','Failed to Update Admin User',1,0
		);
		}

		public function Status(){ 
			$admin_id=$this->input->get('id'); 
			$status=$this->AdminUsers_model->get_admin_user_on_id($admin_id)->status; 
			if($status == 'Active' || $status == 'active'){ 
					 $status = 'Inactive'; 
			}else{ 
					 $status='Active'; 
			} 
			$data = array( 
					 'status' => $status 
			); 
			return $this->display_status( 
					 $this->AdminUsers_model->update_admin_users_db($admin_id,$data), 
					 'Admin User Status Changed','Failed to Change Status Admin User',1,0 
			); 
 		}

		public function Change()
		{
			$admin_id=$this->input->get('id'); 
			$data['title'] = 'Change Password';
			$data['AdminUserId'] = $admin_id;
			$this->load->view('partners_change_password',$data);
		}

		public function UpdatePassword(){ 
			$admin_user_id=$this->input->post('admin_user_id');
			$password=$this->AdminUsers_model->get_admin_user_on_id($admin_user_id)->password; 
			if($password != $this->input->post('oldPassword')){
				$this->display_status(1,'Old Password Doesnot Matched','Old Password Doesnot Matched',2,$admin_user_id
				);
			}
			$data = array(
                'password' => $this->input->post('newPassword'),
			);
			return $this->display_status(
				$this->AdminUsers_model->update_admin_users_db($admin_user_id,$data),
				'Admin User Updated Successfully','Failed to Update Admin User',1,0
		);
		}
		private function display_status($status,$success,$fail,$redirect,$admin_user_id)
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
					return redirect('AdminUsers');
				}
				elseif($redirect==2)
				{
					return redirect('AdminUsers/Change?id='.$admin_user_id);
				}
				else
				{
				  return redirect('AdminUsers/Add');
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
				$this->load->model("AdminUsers_model",'AdminUsers_model');
				if($this->session->userdata('role') == 'admin' || $this->session->userdata('role') == 'Admin'){
				}
				else{
					redirect(base_url('Members'));  
				}     
    }
}?>