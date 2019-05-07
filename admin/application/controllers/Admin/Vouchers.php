<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vouchers extends MY_Controller {
	public function index()
	{
		$data['title'] = 'Vouchers';
		$data['Vouchers'] = $this->Vouchers_model->get_all_vouchers();
		$data['Vouchers']->result();
		$this->load->view('Admin/view_vouchers',$data);
    }

    public function Add()
		{
			$this->check_rights($_SERVER['PHP_SELF']);
        $data['title'] = 'Vouchers';
        $data['Customers'] = $this->Vouchers_model->get_all_customer();
        $data['Categories'] = $this->Vouchers_model->get_all_category();
        $data['Products'] = $this->Vouchers_model->get_all_product();
		$this->load->view('Admin/add_vouchers',$data);
		}
		
		public function Insert()
		{	
			if(isset($_POST['insert']))
			{
				$redirect=1;
			}
			elseif(isset($_POST['save']))
			{
				$redirect=0;
			}
			$data = array(
			'code' => $this->input->post('code'),     
			'type' => $this->input->post('type'),    
			'discount_val' => $this->input->post('discval'),
			'start_date' => $this->input->post('sdate'),
            'expiry_date' => $this->input->post('expdate'), 
            'is_active' => $this->input->post('isactive'),
            'user_id' => $this->input->post('userid'), 
            // 'product_id' => $this->input->post('productid'),
            'cat_id' => $this->input->post('catid'),
            'min_order_val' => $this->input->post('minval'),
			);
			return $this->display_status(
				$this->Vouchers_model->insert_vouchers_db($data),
				'Voucher Inserted Successfully','Failed to Insert Voucher',$redirect);
	
		}

		public function Edit(){ 
			$this->check_rights($_SERVER['PHP_SELF']);
			$voucher_id=$this->input->get('id');
            $data['Vouchers'] = $this->Vouchers_model->get_voucher_on_id($voucher_id);
            $data['Customers'] = $this->Vouchers_model->get_all_customer();
            $data['Categories'] = $this->Vouchers_model->get_all_category();
            $data['Products'] = $this->Vouchers_model->get_all_product();
			$this->load->view("Admin/edit_vouchers.php",$data);
		}

        public function Update(){ 
			$voucher_id=$this->input->post('voucherId');
			$data = array(
                'code' => $this->input->post('code'),     
                'type' => $this->input->post('type'),    
                'discount_val' => $this->input->post('discval'),
                'start_date' => $this->input->post('sdate'),
                'expiry_date' => $this->input->post('expdate'), 
                'is_active' => $this->input->post('isactive'),
                'user_id' => $this->input->post('userid'), 
                // 'product_id' => $this->input->post('productid'),
                'cat_id' => $this->input->post('catid'),
                'min_order_val' => $this->input->post('minval'),
                );
			return $this->display_status(
				$this->Vouchers_model->update_voucher_db($voucher_id,$data),
				'Voucher Updated Successfully','Failed to Update Voucher',1
		);
		}
	
		public function Delete(){
			$voucher_id=$this->input->get('id');
			return $this->display_status(
				$this->Vouchers_model->delete_voucher_db($voucher_id),
				'Voucher Deleted Successfully','Failed to Delete voucher',1
			);
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
					return redirect('Admin/Vouchers');
				}
				else
				{
				  return redirect('Admin/Vouchers/Add');
				}

		}
    
    
    public function __construct()
    {
		parent::__construct();
				$this->load->model("Admin/Vouchers_model",'Vouchers_model');
				$this->login_check();
    }
}?>