<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Colors extends MY_Controller {
	public function index()
	{
		$data['title'] = 'Colors';
		$data['Colors'] = $this->Colors_model->get_all_colors();
		$this->load->view('Admin/view_colors',$data);
    }

    public function Add()
		{
			$this->check_rights($_SERVER['PHP_SELF']);
		$data['title'] = 'Colors';
		$this->load->view('Admin/add_colors');
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
			'name_en' => $this->input->post('nameEn'),     
			'rgb_code' => $this->input->post('rgb'),    
			);
			return $this->display_status(
				$this->Colors_model->insert_colors_db($data),
				'Color Inserted Successfully','Failed to Insert Color',$redirect
			);
		}

		public function Edit(){ 
			$this->check_rights($_SERVER['PHP_SELF']);
			$color_id=$this->input->get('id');
			$data['Colors'] = $this->Colors_model->get_colors_on_id($color_id);
			$this->load->view("Admin/edit_colors.php",$data);
		}

		public function Update(){ 
			$color_id=$this->input->post('color_id');
			$data = array(
				'name_en' => $this->input->post('nameEn'),     
				'rgb_code' => $this->input->post('rgb'),    
			);
			return $this->display_status(
				$this->Colors_model->update_colors_db($color_id,$data),
				'Color Updated Successfully','Failed to Update Color',1
		);
		}

		public function Delete(){
			$color_id=$this->input->get('id');
			$data = array(
				'is_deleted' => 'Yes' 
			);
			return $this->display_status(
				$this->Colors_model->update_colors_db($color_id,$data),
				'Color Deleted Successfully','Failed to Delete Color',1
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
					return redirect('Admin/Colors');
				}
				else// elseif($redirect==0)
				{
				  return redirect('Admin/Colors/Add');
				}
		}
    
    
    public function __construct()
    {
		parent::__construct();
				$this->load->model("Admin/Colors_model",'Colors_model');
				$this->login_check();
    }
}?>