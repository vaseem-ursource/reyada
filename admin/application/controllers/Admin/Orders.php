<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends MY_Controller {
	public function index()
	{
		$data['title'] = 'Orders';
		$data['TotalOrders'] = $this->Orders_model->get_all_orders();
		$data['PendingOrders'] = $this->Orders_model->get_all_pending_orders();
		$data['AcceptedOrders'] = $this->Orders_model->get_all_accepted_orders();
		$data['RejectedOrders'] = $this->Orders_model->get_all_rejected_orders();
		$data['ReturnedOrders'] = $this->Orders_model->get_all_returned_orders();
		$data['NonDeliveredOrders'] = $this->Orders_model->get_all_non_delivered_orders();
		$data['Packing'] = $this->Orders_model->get_packing_orders();
		$data['Dispatched'] = $this->Orders_model->get_dispatched_orders();
		$data['OutForDelivery'] = $this->Orders_model->get_outfordelivery_orders();
		$data['Delivered'] = $this->Orders_model->get_delivered_orders();
		$this->load->view('Admin/view_orders',$data);
    }

    public function Add()
		{
		$this->check_rights($_SERVER['PHP_SELF']);
		$data['title'] = 'Orders';
		$this->load->view('Admin/add_orders');
		}
		
		
		public function View(){ 
			$order_id=$this->input->get('id');
			$data['Orders'] = $this->Orders_model->get_order_details($order_id);
			$data['OrderItems'] = $this->Orders_model->get_order_items($order_id);
			$this->load->view("Admin/view_order_details",$data);
	}

	public function StatusAccepted(){
		$order_id=$this->input->get('id');
		date_default_timezone_set('Asia/Kuwait');
		$data = array(
			'status' => "Accepted",
      'accepted_date' => date('Y-m-d H:i:s')
		);
		return $this->display_status(
		$this->Orders_model->update_order_db($order_id,$data),
		'Order Status Changed','Failed to Change Order Status',1
	);
	}
	public function StatusRejected(){
	 $order_id=$this->input->post('orderId');
	 $reason =$this->input->post('ExtraNotes1');
	 date_default_timezone_set('Asia/Kuwait');	
		$data = array(
			'status' => "Rejected",
      'rejected_date' => date('Y-m-d H:i:s'),
			'notes'  => $reason
		);
		return $this->display_status(
		$this->Orders_model->update_order_db($order_id,$data),
		'Order Status Changed','Failed to Change Order Status',1
	);
	}

	public function StatusReject(){
		$order_id=$this->input->post('orderId2');
		$reason =$this->input->post('ExtraNotes2');
		date_default_timezone_set('Asia/Kuwait');
		$data = array(
			'status' => "Rejected",
      'rejected_date' => date('Y-m-d H:i:s'),
			'notes'  => $reason
		);
		return $this->display_status(
		$this->Orders_model->update_order_db($order_id,$data),
		'Order Status Changed','Failed to Change Order Status',1
	);
	}

	public function Packing(){
		$order_id=$this->input->get('id');
		// date_default_timezone_set('Asia/Kuwait');

		$data = array(
			'status' => "Packing",
      // 'rejected_date' => date('Y-m-d H:i:s')
		);
		return $this->display_status(
		$this->Orders_model->update_order_db($order_id,$data),
		'Order Status Changed','Failed to Change Order Status',1
	);
}
public function Dispatched(){
	date_default_timezone_set('Asia/Kuwait');

	$order_id=$this->input->get('id');
	$data = array(
		'status' => "Dispatched",
		'dispatched_date' => date('Y-m-d H:i:s')

	);
	return $this->display_status(
	$this->Orders_model->update_order_db($order_id,$data),
	'Order Status Changed','Failed to Change Order Status',1
);
}
	public function OutForDelivery(){
		date_default_timezone_set('Asia/Kuwait');

		$order_id=$this->input->get('id');
		$data = array(
			'status' => "OutForDelivery",
      'out_for_delivery_date' => date('Y-m-d H:i:s')

		);
		return $this->display_status(
		$this->Orders_model->update_order_db($order_id,$data),
		'Order Status Changed','Failed to Change Order Status',1
	);
	}
	public function NonDeliveredOrder(){
		// date_default_timezone_set('Asia/Kuwait');

		$order_id=$this->input->get('id');
		$data = array(
			'status' => "NonDelivered"
      // 'non_delivered_date' => date('Y-m-d H:i:s')

		);
		return $this->display_status(
		$this->Orders_model->update_order_db($order_id,$data),
		'Order Status Changed','Failed to Change Order Status',1
	);
	}

	public function Delivered(){
		$order_id=$this->input->get('id');
		date_default_timezone_set('Asia/Kuwait');

		$data = array(
			'status' => "Delivered",
      'delivered_date' => date('Y-m-d H:i:s')

		);
		return $this->display_status(
		$this->Orders_model->update_order_db($order_id,$data),
		'Order Status Changed','Failed to Change Order Status',1
	);
	}
		// public function Delete(){
		// 	$brand_id=$this->input->get('id');
		// 	$data = array(
		// 		'is_deleted' => 'Yes' 
		// 	);
		// 	return $this->display_status(
		// 		$this->Orders_model->update_brand_db($brand_id,$data),
		// 		'Brand Deleted Successfully','Failed to Delete Brand',1
		// 	);
		// }
		
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
					return redirect('Admin/Orders');
				}
				else// elseif($redirect==0)
				{
				  return redirect('Admin/Orders/Add');
				}
		}
    
    
    public function __construct()
    {
		parent::__construct();
				$this->load->model("Admin/Orders_model",'Orders_model');
				$this->login_check();
    }
}?>