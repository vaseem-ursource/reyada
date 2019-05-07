<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Commissions extends MY_Controller {
	public function index()
	{
		$data['title'] = 'Commissions';
		$data['Commissions'] = $this->Commissions_model->get_all_commission();
		$this->load->view('Admin/view_commissions',$data);
    }

    public function Add()
		{
			$this->check_rights($_SERVER['PHP_SELF']);
        $data['title'] = 'Commissions';
        $data['Countries'] = $this->Commissions_model->get_all_country();
        $data['Categories'] = $this->Commissions_model->get_all_category();
        $data['Areas'] = $this->Commissions_model->get_all_area();
		$this->load->view('Admin/add_commissions',$data);
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
			date_default_timezone_set('Asia/Kuwait');
			$data = array(     
			'type' => $this->input->post('type'),    
			'category' => $this->input->post('cat'),
			'cat_id' => $this->input->post('category'),
            'amount' => $this->input->post('amount'), 
            'status' => $this->input->post('status'),
            'country_id' => $this->input->post('countryid'), 
            'area_id' => $this->input->post('areaid'),
            'created_date' => date('Y-m-d H:i:s'),
            'created_by' => $this->session->userdata('user_name'),
		    'modified_date' => '',   
			'modified_by' => '', 
			);
			return $this->display_status(
				$this->Commissions_model->insert_commission_db($data),
				'Commission Inserted Successfully','Failed to Insert Commission',$redirect);
	
		}

		public function Edit(){ 
			$this->check_rights($_SERVER['PHP_SELF']);
			$commission_id=$this->input->get('id');
            $data['Commissions'] = $this->Commissions_model->get_commission_on_id($commission_id);
            $data['Countries'] = $this->Commissions_model->get_all_country();
            $data['Categories'] = $this->Commissions_model->get_all_category();
            $data['Areas'] = $this->Commissions_model->get_all_area();
			$this->load->view("Admin/edit_commissions.php",$data);
		}

        public function Update(){ 
			$commission_id=$this->input->post('commissionId');
			date_default_timezone_set('Asia/Kuwait');
			$data = array(
            'type' => $this->input->post('type'),    
			'category' => $this->input->post('cat'),
			'cat_id' => $this->input->post('category'),
            'amount' => $this->input->post('amount'), 
            'status' => $this->input->post('status'),
            'country_id' => $this->input->post('countryid'), 
            'area_id' => $this->input->post('areaid'),
		    'modified_date' => date('Y-m-d H:i:s'),   
			'modified_by' =>$this->session->userdata('user_name') 
                );
			return $this->display_status(
				$this->Commissions_model->update_commission_db($commission_id,$data),
				'Commission Updated Successfully','Failed to Update Commission',1
		);
		}
	
		public function Delete(){
			$commission_id=$this->input->get('id');
			return $this->display_status(
				$this->Commissions_model->delete_commission_db($commission_id),
				'Commission Deleted Successfully','Failed to Delete Commission',1
			);
		}

		public function Status(){
			$commission_id=$this->input->get('id');
			$status=$this->Commissions_model->get_commission_status($commission_id)->status;
			if($status=='Active'){
				$status = 'Inactive';
			}else{
				$status='Active';
			}
			$data = array(
				'status' => $status
			);
			return $this->display_status(
		  $this->Commissions_model->update_commission_db($commission_id,$data),
			'Commission Status Changed','Failed to Change Commission Status',1
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
					return redirect('Admin/Commissions');
				}
				else
				{
				  return redirect('Admin/Commissions/Add');
				}

		}
    
    
    public function __construct()
    {
		parent::__construct();
				$this->load->model("Admin/Commissions_model",'Commissions_model');
				$this->login_check();
    }
}?>