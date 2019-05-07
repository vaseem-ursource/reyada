<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller {
	public function index()
	{
		$data['title'] = 'Users';
		$data['Users'] = $this->Users_model->get_all_users();
		$this->load->view('Admin/view_users',$data);
	}
	
	

			public function AddUser()
			{
			// $this->check_rights($_SERVER['PHP_SELF']);
			$data['title'] = 'Users';
			$data['Roles'] = $this->Users_model->get_all_roles();
			$this->load->view('Admin/add_user',$data);
			}
			
	
			public function UserInsert()
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
					'role_id' => $this->input->post('roleId'),     
					'status' => $this->input->post('status'),   
					);
				return $this->display_status(
					$this->Users_model->insert_user($data),
					'User Added Successfully','Failed to Add User',$redirect);
			}
	
			public function EditUser(){ 
			// $this->check_rights($_SERVER['PHP_SELF']);
				$user_id=$this->input->get('id');
			  $data['Roles'] = $this->Users_model->get_all_roles();
			  $data['Users'] = $this->Users_model->get_user_on_id($user_id);
				$this->load->view("Admin/edit_user",$data);
			}
	
			public function UpdateUser(){ 
				$user_id=$this->input->post('userId');
				$data = array(
					'email' => $this->input->post('email'),     
					'password' => $this->input->post('password'),
					'role_id' => $this->input->post('roleId'),     
					'status' => $this->input->post('status'),   
					);
				return $this->display_status(
					$this->Users_model->update_user_db($user_id,$data),
					'User Updated Successfully','Failed to Update User',1
			);
			}
	
			public function DeleteUser(){
				$user_id=$this->input->get('id');
				return $this->display_status(
					$this->Users_model->delete_user_db($user_id),
					'User Deleted Successfully','Failed to Delete User',1
				);
			}
			
		public function ChangeStatus(){
			$user_id=$this->input->get('id');
			$status=$this->Users_model->get_user_on_id($user_id)->status;
			if($status=='Active'){
				$status = 'Blocked';
			}else{
				$status='Active';
			}
			$data = array(
				'status' => $status
			);
			return $this->display_status(
		  $this->Users_model->update_user_db($user_id,$data),
			'User Status Changed','Failed to Change User Status',1
		);
	}

		public function AddRolePermission()
		{
			// $this->check_rights($_SERVER['PHP_SELF']);
		$data['title'] = 'Role Permissions';
		$roleid=$this->input->get('id');
		$data['RolePermissions'] = $this->Users_model->get_role_permissions($roleid);
		foreach($data['RolePermissions'] as $row){
			$role[] = $row->feature_id; 
		}
		if(@$role){
			$data['RolePermissions']= $role;
		}
		
		$data['RoleId']= $roleid;
		$data['Feature'] = $this->Users_model->get_all_feature();
		$this->load->view('Admin/add_role_permission',$data);
		}

		public function InsertRolePermission()
    {	
			$data = array(
				'role_id' => $_POST['roleid'], 
				'feature_id' => $_POST['id'],    
				);
				$this->Users_model->insert_role_permission_db($data);
				echo true;
		}
		public function DeleteRolePermission()
    {	
			$this->Users_model->delete_role_permission_db($_POST['roleid'],$_POST['id']);
			echo true;
		}
	
		private function display_status($status,$success,$fail,$redirect)
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
					return redirect('Admin/Users');
				}
				else
				{
				  return redirect('Admin/Users/AddUser');
			}
		
				
	}
    
    public function __construct()
    {
		parent::__construct();
				$this->load->model("Admin/Users_model",'Users_model');
				$this->login_check();
    }
}?>