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
				'Partner Inserted Successfully','Failed to Insert Partner',$redirect);
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
				'Partner Updated Successfully','Failed to Update Partner',1
		);
		}

		public function Delete(){
			$category_id=$this->input->get('id');
			$data = array(
				'is_deleted' => 'Yes'
			);
			return $this->display_status(
				$this->Categories_model->update_categories_db($category_id,$data),
				'Category Deleted Successfully','Failed to Delete Category',1
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
					return redirect('Partners');
				}
				else
				{
				  return redirect('Partners/Add');
				}
		}
    
    
    public function __construct()
    {
		parent::__construct();
				$this->load->model("Partners_model",'Partners_model');
    }
}?>