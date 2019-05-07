<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sizes extends MY_Controller {
	public function index()
	{
		$data['title'] = 'Sizes';
		$data['Sizes'] = $this->Sizes_model->get_All_sizes();
		$this->load->view('Admin/view_sizes',$data);
    }

    public function Add()
		{
			$this->check_rights($_SERVER['PHP_SELF']);
		$data['title'] = 'Sizes';
		$data['Categories'] = $this->Sizes_model->get_All_categories();
		$this->load->view('Admin/add_sizes',$data);
		}
		
		public function Insert()
		{			
			$number = count($this->input->post('sizedescen'));  
			$cat = $this->input->post('size_cat_id');
			for($i=0; $i<$number; $i++)  
      {  
           if(($this->input->post('sizedescen')[$i] != ''))  
           { 
						$data[] = array('size_cat_id' => $cat,'desc_en' => $this->input->post('sizedescen')[$i],'is_deleted' => 'No');					
					 }
			}	
			
			return $this->display_status(
				$this->Sizes_model->insert_Sizes_db($data),
				'Size Inserted Successfully','Failed to Insert Size');
		}

		public function Edit(){ 
			$this->check_rights($_SERVER['PHP_SELF']);
			$size_id=$this->input->get('id');
	  	$data['Categories'] = $this->Sizes_model->get_All_categories();
			$data['Sizes'] = $this->Sizes_model->get_Size_on_id($size_id);
			$this->load->view("Admin/edit_sizes.php",$data);
		}

		public function Update(){ 
			$size_id=$this->input->post('sizeId');
			$data = array(
				'size_cat_id' => $this->input->post('size_cat_id'),     
				'desc_en' => $this->input->post('sizedescen')
				);
			return $this->display_status(
				$this->Sizes_model->update_Sizes_db($size_id,$data),
				'Size Updated Successfully','Failed to Update Size'
		);
		}

		public function Delete(){
			$size_id=$this->input->get('id');
			$data = array(
				'is_deleted' => 'Yes' 
			);
			return $this->display_status(
				$this->Sizes_model->update_Sizes_db($size_id,$data),
				'Size Deleted Successfully','Failed to Delete Size'
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
				return redirect('Admin/Sizes/');

		}
    
    
    public function __construct()
    {
		parent::__construct();
				$this->load->model("Admin/Sizes_model",'Sizes_model');
				$this->login_check();
    }
}?>