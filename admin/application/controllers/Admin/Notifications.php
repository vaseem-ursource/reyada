<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notifications extends MY_Controller {
	public function index()
	{
		$data['title'] = 'Notifications';
		$data['Notifications']=$this->get_threshold_notification();
        $data['OrderNotif']=$this->get_pending_orders();
		$this->load->view('Admin/view_notifications',$data);
    }

    public function __construct()
    {
		parent::__construct();
        $this->load->model("Admin/Notifications_model",'Notifications_model');
        $this->login_check();
    }
}?>