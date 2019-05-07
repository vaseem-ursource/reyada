<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends MY_Controller {
	public function index()
	{
		$data['title'] = 'Customers';
        $data['Customers'] = $this->Customers_model->get_all_registered_customers();
        $data['GuestUser'] = $this->Customers_model->get_all_guest_customers();        
		$this->load->view('Admin/view_customers',$data);
    }

    public function View(){ 
        $customer_id=$this->input->get('id');
        $data['Customers'] = $this->Customers_model->get_customer_details($customer_id);
        $data['Orders'] = $this->Customers_model->get_all_orders($customer_id);
        $data['Customer'] = $this->Customers_model->get_customer_addresses($customer_id);
        $this->load->view("Admin/view_customer_details",$data);
    }

    // public function View_addresses(){ 
    //     $customer_id=$this->input->get('id');
    //     $data['Customers'] = $this->Customers_model->get_customer_addresses($customer_id);
    //     $this->load->view("Admin/view_customer_addresses",$data);
    // }

    // public function ViewOrderHistory()
    // {
    //     $data['title'] = 'Orders';
    //     $customer_id=$this->input->get('id');
    //     $data['Orders'] = $this->Customers_model->get_all_orders($customer_id);
    //     $this->load->view('Admin/view_order_history',$data);
    // }

    public function ViewOrderDetails(){ 
        $order_id=$this->input->get('id');       
        $data['Orders'] = $this->Customers_model->get_order_details($order_id);
        $data['OrderItems'] = $this->Customers_model->get_order_items($order_id);
        $this->load->view("Admin/view_order_item_details",$data);
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
            return redirect('Admin/Customers/');

    }
    
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Admin/Customers_model",'Customers_model');
        $this->login_check();
    }
}?>