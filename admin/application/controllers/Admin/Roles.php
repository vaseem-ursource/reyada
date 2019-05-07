<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roles extends MY_Controller {
    public function index()
	{
		$data['title'] = 'Roles';
		$data['Roles'] = $this->Users_model->get_all_roles();
		$this->load->view('Admin/view_roles',$data);
  }

    public function Add()
		{
			$this->check_rights($_SERVER['PHP_SELF']);
		$data['title'] = 'Roles';
		$this->load->view('Admin/add_roles');
		}
		

		public function Insert()
    {	
			if(isset($_POST['insert']))
			{
				$redirect=1;
			}
			elseif(isset($_POST['save']))
			{
				$redirect=2;
			}
			$data = array(
				'name' => $this->input->post('name'),     
				'description' => $this->input->post('description'),    
				);
			return $this->display_status(
				$this->Users_model->insert_roles($data),
				'Role Added Successfully','Failed to Add Role',$redirect);
		}

		public function Edit(){ 
			$this->check_rights($_SERVER['PHP_SELF']);
			$role_id=$this->input->get('id');
			$data['Roles'] = $this->Users_model->get_role_on_id($role_id);
			$this->load->view("Admin/edit_roles",$data);
		}

		public function Update(){ 
			$role_id=$this->input->post('roleId');
			$data = array(
				'name' => $this->input->post('name'),     
				'description' => $this->input->post('description'),    
			);
			return $this->display_status(
				$this->Users_model->update_role_db($role_id,$data),
				'Roles Updated Successfully','Failed to Update Roles',1
		);
		}

		public function Delete(){
			$role_id=$this->input->get('id');
			return $this->display_status(
				$this->Users_model->delete_role_db($role_id),
				'Roles Deleted Successfully','Failed to Delete Roles',1
			);
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
					return redirect('Admin/Roles');
				}
				else
				{
				  return redirect('Admin/Roles/Add');
				}

		}
    
    
    public function __construct()
    {
		parent::__construct();
				$this->load->model("Admin/Users_model",'Users_model');
				$this->login_check();
    }
}?>