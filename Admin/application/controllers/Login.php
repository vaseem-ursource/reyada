<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
		$data['title'] = 'Login';
		$this->load->view('login',$data);
    }

    public function Verify()
	{
		$email=trim($this->input->post('email'));
        $password=trim($this->input->post('password'));

        $data=$this->Login_model->verify_credential($email,$password);

        if($data){          
            $user_name=$data->email;
            $roles=$data->role;
            $this->session->set_userdata('user_name', $user_name);
            $this->session->set_userdata('role', $roles);   
            if($roles == 'admin' || $roles == 'Admin'){
                redirect(base_url('ContactUs'));  
            }
            else{
                redirect(base_url('Members'));  
            }          
        }
        else{
            $this->session->set_flashdata('warning','Login Failed');
            redirect(base_url().'Login');
        }
    }

    public function Logout(){
        $this->session->unset_userdata('user_name');
        $this->session->unset_userdata('role');

        return redirect('Login');
    }

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Login_model",'Login_model');
    }
}
?>