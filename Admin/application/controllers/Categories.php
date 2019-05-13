<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {
	public function index()
	{
		$data['title'] = 'Categories';
		$data['Categories'] = $this->Categories_model->get_all_categories();
		$this->load->view('view_categories',$data);
    }

    public function Add()
		{
		$data['title'] = 'Categories';
		$this->load->view('add_categories',$data);
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
			'title' => $this->input->post('title'),
			'created_date' => date('Y-m-d H:i:s'),
			'modified_date' =>'',
			'modified_by' => '', 
			'is_deleted' => 'No',    
			'is_active' => $this->input->post('IsActive'), 
			);
			return $this->display_status(
				$this->Categories_model->insert_categories_db($data),
				'Category Inserted Successfully','Failed to Insert Category',$redirect);
		}

	
		public function Edit(){ 
			$category_id=$this->input->get('id');
			$data['Categories'] = $this->Categories_model->get_categories_on_id($category_id);
			$this->load->view("edit_categories.php",$data);
		}

		public function Update(){ 
			$category_id=$this->input->post('catId');
			$data = array(
				'title' => $this->input->post('title'),
				'modified_date' => date('Y-m-d H:i:s'),
				'modified_by' => '', 
					// 'modified_by' => $this->session->userdata('user_name'),   
				'is_deleted' => 'No',    
				'is_active' => $this->input->post('IsActive'), 
			);
			return $this->display_status(
				$this->Categories_model->update_categories_db($category_id,$data),
				'Category Updated Successfully','Failed to Update Category',1
		);
		}

		public function Status(){ 
			$cat_id=$this->input->get('id'); 
			$status=$this->Categories_model->get_categories_on_id($cat_id)->is_active; 
			if($status == 'Active' || $status == 'active'){ 
					 $status = 'Inactive'; 
			}else{ 
					 $status='Active'; 
			} 
			$data = array( 
					 'is_active' => $status 
			); 
			return $this->display_status( 
					 $this->Categories_model->update_categories_db($cat_id,$data), 
					 'Article Status Changed','Failed to Change Status Article',1,0 
			); 
    }

		public function Delete(){
			$category_id=$this->input->get('id');
			$data = array(
				'is_deleted' => 'Yes',
				'is_active' =>'Inactive'

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
					return redirect('Categories');
				}
				else
				{
				  return redirect('Categories/Add');
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
				$this->load->model("Categories_model",'Categories_model');
				if($this->session->userdata('role') == 'admin' || $this->session->userdata('role') == 'Admin'){
				}
				else{
					redirect(base_url('Members'));  
				}     
    }
}?>