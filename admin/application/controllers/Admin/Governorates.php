<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Governorates extends MY_Controller {
	public function index()
	{
		$data['title'] = 'Governorates';
		$data['Governorates'] = $this->Governorates_model->get_all_Governorates();
		$this->load->view('Admin/view_governorates',$data);
    }

    public function Add()
		{
			$this->check_rights($_SERVER['PHP_SELF']);
		$data['title'] = 'Governorates';
		$this->load->view('Admin/add_governorates');
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
			'name_ar' => $this->input->post('nameAr'),    
			);
			return $this->display_status(
				$this->Governorates_model->insert_governorates_db($data),
				'Governorate Inserted Successfully','Failed to Insert Governorate',$redirect);
	
		}

		public function Edit(){ 
			$this->check_rights($_SERVER['PHP_SELF']);
			$govt_id=$this->input->get('id');
			$data['Governorates'] = $this->Governorates_model->get_governorates_on_id($govt_id);
			$this->load->view("Admin/edit_governorates.php",$data);
		}

		public function Update(){ 
			$gov_id=$this->input->post('govId');
			$data = array(
				'name_en' => $this->input->post('nameEn'),     
				'name_ar' => $this->input->post('nameAr'),    
				);
			return $this->display_status(
				$this->Governorates_model->update_governorates_db($gov_id,$data),
				'Governorate Updated Successfully','Failed to Update Governorate',1
		);
		}

		public function Delete(){
			$gov_id=$this->input->get('id');
			return $this->display_status(
				$this->Governorates_model->delete_governorates_db($gov_id),
				'Governorate Deleted Successfully','Failed to Delete Governorate',1
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
					return redirect('Admin/Governorates');
				}
				else
				{
				  return redirect('Admin/Governorates/Add');
				}


		}
    
    
    public function __construct()
    {
		parent::__construct();
				$this->load->model("Admin/Governorates_model",'Governorates_model');
				$this->login_check();
    }
}?>