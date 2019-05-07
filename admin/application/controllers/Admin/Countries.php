<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Countries extends MY_Controller {
	public function index()
	{
		$data['title'] = 'Countries';
		$data['Countries'] = $this->Countries_model->get_all_countries();
		$this->load->view('Admin/view_countries',$data);
    }

    public function Add()
		{
			$this->check_rights($_SERVER['PHP_SELF']);
		$data['title'] = 'Countries';
		$this->load->view('Admin/add_countries');
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
			'country_code' => $this->input->post('countryCode'),    
			'name_en' => $this->input->post('nameEn'),     
			'name_ar' => $this->input->post('nameAr'),    
			'delivery_time' => $this->input->post('deliveryTime'),    
			);
			return $this->display_status(
				$this->Countries_model->insert_countries_db($data),
				'Country Inserted Successfully','Failed to Insert Country',$redirect);
	
		}

		public function Edit(){ 
			$this->check_rights($_SERVER['PHP_SELF']);
			$country_code=$this->input->get('id');
			$data['Countries'] = $this->Countries_model->get_countries_on_id($country_code);
			$this->load->view("Admin/edit_countries.php",$data);
		}

		public function Update(){ 
			$country_code=$this->input->post('countryCode');
			$data = array(
			'name_en' => $this->input->post('nameEn'),     
			'name_ar' => $this->input->post('nameAr'),    
			'delivery_time' => $this->input->post('deliveryTime'),    
			);
			return $this->display_status(
				$this->Countries_model->update_countries_db($country_code,$data),
				'Country Updated Successfully','Failed to Update Country',1
		);
		}

		public function Delete(){
			$country_code=$this->input->get('id');
			return $this->display_status(
				$this->Countries_model->delete_countries_db($country_code),
				'Country Deleted Successfully','Failed to Delete Country',1
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
					return redirect('Admin/Countries');
				}
				else
				{
				  return redirect('Admin/Countries/Add');
				}

		}
    
    
    public function __construct()
    {
		parent::__construct();
				$this->load->model("Admin/Countries_model",'Countries_model');
				$this->login_check();
    }
}?>