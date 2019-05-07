<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LogisticsCompanies extends MY_Controller {
	public function index()
	{
		$data['title'] = 'LogisticsCompanies';
		$data['LogisticsCompanies'] = $this->LogisticsCompanies_model->get_all_logisticcompany();
		$this->load->view('Admin/view_logisticscompanies',$data);
    }

    public function Add()
    {
    $this->check_rights($_SERVER['PHP_SELF']);
    $data['title'] = 'LogisticsCompanies';
    $this->load->view('Admin/add_logisticscompanies');
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
		'name' => $this->input->post('name'),     
		'email' => $this->input->post('email'),    
		'mobile' => $this->input->post('mobile'),
		'incharge_person' => $this->input->post('inchargeperson'),	
		);
	return $this->display_status(
		$this->LogisticsCompanies_model->insert_logisticscompanies_db($data),
		'Logistic Company Inserted Successfully','Failed to Insert Logistic Company',$redirect);
     }

     public function Edit(){ 
	$this->check_rights($_SERVER['PHP_SELF']);
        $logistics_company_id=$this->input->get('id');
        $data['LogisticsCompanies'] = $this->LogisticsCompanies_model->get_logisticscompany_on_id($logistics_company_id);
        $this->load->view("Admin/edit_logisticscompanies",$data);
    }

    public function Update(){ 
        $logistics_company_id=$this->input->post('logisticscompanyId');
        $data = array(
                'name' => $this->input->post('name'),     
		'email' => $this->input->post('email'),    
		'mobile' => $this->input->post('mobile'),
		'incharge_person' => $this->input->post('inchargeperson'),	   
                );
                
        return $this->display_status(
                $this->LogisticsCompanies_model->update_logisticscompanies_db($logistics_company_id,$data),
                'Logistic Company Updated Successfully','Failed to Update Logistic Company',1
);
}
        public function Delete(){
        $logistics_company_id=$this->input->get('id');
        return $this->display_status(
                $this->LogisticsCompanies_model->delete_logisticscompanies_db($logistics_company_id),
                'Logistic Company Deleted Successfully','Failed to Delete Logistic Company',1
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
                    return redirect('Admin/LogisticsCompanies');
            }
            else
            {
              return redirect('Admin/LogisticsCompanies/Add');
            }

    }
    
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Admin/LogisticsCompanies_model",'LogisticsCompanies_model');
        $this->login_check();
    }
}?>