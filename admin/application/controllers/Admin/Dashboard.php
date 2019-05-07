<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends MY_Controller {
	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['CountProduct'] = $this->Dashboard_model->get_count_of_products();
		$data['CountTotalSales'] = $this->Dashboard_model->get_count_of_Total_sales();
		$data['CountActiveUsers'] = $this->Dashboard_model->get_count_of_active_users();
		$data['CountRegisteredUser'] = $this->Dashboard_model->get_count_of_registered_users();
		$data['CountOrders'] = $this->Dashboard_model->get_count_of_orders();
		$data['CountRejectedOrders'] = $this->Dashboard_model->get_count_of_rejected_orders();
		$data['Recent5Orders'] = $this->Dashboard_model->get_recent_5_orders();
		$data['TopBuyers'] = $this->Dashboard_model->get_top_buyers_profile();
		$data['RecentProducts'] = $this->Dashboard_model->get_recent_products();
		// $data['SalesChart'] = $this->Dashboard_model->get_sales_chart_details();

		date_default_timezone_set('Asia/Kuwait'); 
        $datemonthly=date("Y-m"); 
        $datemonthly = strtotime($datemonthly); 
        // $datemonthly = strtotime("-1 months", $datemonthly); 
        // $dateYearly= date('Y-m-d', $dateYearly); 
            for($i=0;$i<12;$i++){ 
            $dateold = strtotime("-1 months", $datemonthly); 
            $date1= date('Y-m', $datemonthly); 
            $date2= date('Y-m', $dateold); 
            $monthly_earnings=$this->Dashboard_model->calc_monthly_sales($date1,$date2); 
            $monthly[$i]=$monthly_earnings->total; 
            //$date1 = strtotime($dateYearly); 
            $datemonthly = strtotime("-1 months", $datemonthly); 
		}
	// 	
		$data['monthly']=$monthly; 
		
        // $today_date=date("Y-m-d"); 
        // $today_date=strtotime($today_date); 
        // $today_date=strtotime("-1 day", $today_date); 
        // $data['today_date']=date("Y-m-d"); 
 
            // $this->load->view('Admin/dashboard',$data);
		
		$this->load->view('Admin/dashboard',$data);
	 }
	// echo "<pre>"; 
	// print_r($monthly);
	// echo "</pre>";
	// die();

public function __construct()
    {
		parent::__construct();
		$this->load->model("Admin/Dashboard_model",'Dashboard_model');
		$this->login_check();
    }
}
?>