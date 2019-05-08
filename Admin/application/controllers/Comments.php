<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comments extends CI_Controller {
	public function index()
	{
		$data['title'] = 'Comments';
		$data['Comments'] = $this->Comments_model->get_all_comments();
		$this->load->view('view_comments',$data);
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
					return redirect('Comments');
				}
				else
				{
				  return redirect('Comments/Add');
				}
		}
    
    
    public function __construct()
    {
		parent::__construct();
				$this->load->model("Comments_model",'Comments_model');
    }
}
?>