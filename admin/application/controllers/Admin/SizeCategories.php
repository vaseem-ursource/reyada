<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SizeCategories extends MY_Controller {
	public function index()
	{
		$data['title'] = 'Size Categories';
		$data['SizeCategories'] = $this->SizeCategories_model->get_All_sizecategories();
		$this->load->view('Admin/view_sizecategories',$data);
    }

    public function Add()
		{
			$this->check_rights($_SERVER['PHP_SELF']);
		$data['title'] = 'Add Size Categories';
		$this->load->view('Admin/add_sizecategories');
		}
		
		public function Insert()
		{	
			$number = count($this->input->post('category'));  
			for($i=0; $i<$number; $i++)  
      {  
           if(($this->input->post('category')[$i] != ''))  
           { 
						$data[] = array('name_en' => $this->input->post('category')[$i],'is_deleted' => 'No');					
					 }
			}		
			return $this->display_status(
				$this->SizeCategories_model->insert_SizeCategories_batch_db($data),
				'Size Category Inserted Successfully','Failed to Insert Size Category');
	
		}

		public function Edit(){ 
			$this->check_rights($_SERVER['PHP_SELF']);
			$size_cat_id=$this->input->get('id');
			$data['SizeCategories'] = $this->SizeCategories_model->get_SizeCategories_on_id($size_cat_id);
			$this->load->view("Admin/edit_sizecategories.php",$data);
		}

		public function Update(){ 
			$size_cat_id=$this->input->post('categoryId');
			$data = array(
				'name_en' => $this->input->post('category'),     
				);
			return $this->display_status(
				$this->SizeCategories_model->update_SizeCategories_db($size_cat_id,$data),
				'Size Category Updated Successfully','Failed to Update Size Category'
		);
		}

		public function Delete(){
			$size_cat_id=$this->input->get('id');
			$data = array(
				'is_deleted' => 'Yes' 
			);
			return $this->display_status(
				$this->SizeCategories_model->update_SizeCategories_db($size_cat_id,$data),
				'Size Category Deleted Successfully','Failed to Delete Size Category'
			);
		}
		
		private function display_status($status,$success,$fail)
		{
				if($status)
				{
						$this->session->set_flashdata('success', $success);
				}
				else{
						$this->session->set_flashdata('warning', $fail);
				}
				return redirect('Admin/SizeCategories/');

		}
    
    
    public function __construct()
    {
		parent::__construct();
				$this->load->model("Admin/SizeCategories_model",'SizeCategories_model');
				$this->login_check();
    }
}?>