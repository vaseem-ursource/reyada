<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {
	public function index()
	{
		$data['title'] = 'Dashboard';
		$this->load->view('dashboard',$data);
	 }
	

public function __construct()
    {
		parent::__construct();
    }
}
?>