<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index()
	{
		$this->load->view('dashboard');
	}

	public function send_new_password()
	{
		if($this->input->post('insert')){
			$this->load->model('Reset_password_model');
			$post_data = $this->input->post();
			$to = $post_data['email'];
			$data['email'] = $post_data['email'];
			$data['password'] = $post_data['password'];
			$subject = 'Reyada.co - New Password Generated';
			$message =  $this->load->view('emailutils/reset_pass_email', $data, true);
			if ($this->send_email($to,$subject,$message)) {
				$data = array(
					'email' => $post_data['email'],
					'password' => $post_data['password'],
					'created_on' => time(),
					'updated_on' => time(),
					'ip_address' => $_SERVER['REMOTE_ADDR'],
					);
				$this->Reset_password_model->create($data);
				$this->session->set_flashdata('success', 'Email sent Successfully');
				redirect(base_url('dashboard/send_new_password'));
			} else {
				$this->session->set_flashdata('error', 'Email sent SuccessfullyCould not sent email.');
				redirect(base_url('dashboard/send_new_password'));
			}
		}
		$this->load->view('new_password');
	}

	public function __construct()
    {
		parent::__construct();
		if($this->session->userdata('user_name')){
		}
		else{
			redirect(base_url('Login'));  
		}  
		if($this->session->userdata('role') == 'admin' || $this->session->userdata('role') == 'Admin'){
		}
		else{
			redirect(base_url('Members'));  
		}     
	}

	public function send_email($to,$subject,$message){

        $this->email->from('vaseemjabalijabali27@gmail.com');
        $this->email->to('vaseem@ursource.org');
        $this->email->subject($subject);
		$this->email->message($message);
		
        if ($this->email->send()) {
			return true;
        } else {
            return false;
        }
	}
}
