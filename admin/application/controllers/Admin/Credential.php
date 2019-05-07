<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Credential extends MY_Controller {
	public function index()
	{
		$data['title'] = 'Credential';
		$data['Credential'] = $this->Credential_model->get_All_Credential();
		$this->load->view('Admin/view_credential',$data);
    }

    public function Add()
	{
		$this->check_rights($_SERVER['PHP_SELF']);
		$data['title'] = 'Credential';
		// $data['Login'] = $this->Credential_model->get_All_Rooms();
		$this->load->view('Admin/add_credential',$data);
    }

    public function Insert()
	{
        $username=trim($this->input->post('username'));
        $userpassword=trim($this->input->post('userpassword'));
        $cnfpassword=trim($this->input->post('cnfpassword'));      
        if($userpassword==$cnfpassword){
        return $this->display_status(
            $this->Credential_model->insert_credential_db($username,$userpassword),
            'Credential Added Successfully','Credential Failed to Add');
        }else{
            redirect(base_url().'Admin/Credential/Add');
        }
    }

    public function Delete()
	{
        $user_id=trim($this->input->get('id'));
        return $this->display_status(
            $this->Credential_model->delete_credential_db($user_id),
            'Credential Deleted Successfully','Credential Failed to Deleted');
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
        return redirect('Admin/Credential');
     }

    public function __construct()
    {
        parent::__construct();       
        $this->load->model("Admin/Credential_model",'Credential_model');
        $this->login_check();
    }
}
?>