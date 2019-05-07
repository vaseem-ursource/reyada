<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {
	public function index()
	{
		$data['title'] = 'Login';
		$this->load->view('Admin/login',$data);
    }

    public function Verify()
	{
		$username=trim($this->input->post('username'));
        $password=trim($this->input->post('password'));

        $data=$this->Login_model->verify_credential($username,$password);

        if($data){          
            $user_name=$data->email;
            $roles=$data->role_id;
            $this->session->set_userdata('user_name', $user_name);
            $this->session->set_userdata('role_id', $roles);           
            redirect(base_url('Admin/Dashboard'));             
        }
        else{
            $this->session->set_flashdata('warning','Login Failed');
            redirect(base_url().'Admin/Login');
        }
    }

    public function Logout(){
        $this->session->unset_userdata('user_name');
        return redirect('Admin/Login');
    }

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Admin/Login_model",'Login_model');
    }
}
?>