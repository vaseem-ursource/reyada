<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Features extends MY_Controller {
	public function index()
	{
		$data['title'] = 'Features';
		$data['Features'] = $this->Users_model->get_features();
		$this->load->view('Admin/view_features',$data);
	}
	
	public function Add()
		{
		// $this->check_rights($_SERVER['PHP_SELF']);
		$data['title'] = ' ';
		$data['ParentMenu'] = $this->Users_model->get_all_admin_menu();
		$data['ParentMenu'] = $this->Users_model->get_all_parent_admin_menu(0);
		$stmt='<select class="form-control" id="adminmenu" name="adminmenu" required><option value="" required>-- Choose --</option>';
		foreach($data['ParentMenu']->result() as $row){
		$stmt.=	'<option style="font-weight:bolder" value="'.$row->admin_menu_id.'">'.$row->name.'</option>';
		$data['SubMenu'] = $this->Users_model->get_all_parent_admin_menu($row->admin_menu_id);
		$space='&nbsp&nbsp&nbsp&nbsp';
		if($data['SubMenu']->num_rows()){
			foreach($data['SubMenu']->result() as $sub){
				if($data['SubMenu']=$this->Users_model->get_all_parent_admin_menu($sub->admin_menu_id)){
					$stmt.='<option style="font-weight:bold;" value="'.$sub->admin_menu_id.'">'.$space.$sub->name.'</option>';
					$stmt=$this->loop($data,$stmt,$space);
				}
			else{
				$stmt.='<option value="'.$sub->admin_menu_id.'">'.$sub->name.'</option>';
			}
		}}
		}
		$stmt.='</select>';
		$data['MenuGroup']=$stmt;
		$this->load->view('Admin/add_features',$data);
		}
		
		public function loop($data,$stmt,$space){
			$space.='&nbsp&nbsp&nbsp&nbsp';
					foreach($data['SubMenu']->result() as $sub){
						
					$stmt.='<option value="'.$sub->admin_menu_id.'">'.$space.$sub->name.'</option>';
					$data['SubMenu']=$this->Users_model->get_all_parent_admin_menu($sub->admin_menu_id);
					if($data['SubMenu']->num_rows())
					{
						$stmt=$this->loop($data,$stmt,$space);
					}else{
						
						return $stmt;
					}
			} 
			return $stmt;
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
			'name' => $this->input->post('name'),     
			'admin_menu_id' => $this->input->post('adminmenu'),    
			
			);
			return $this->display_status(
				$this->Users_model->insert_features_db($data),
				'Features Inserted Successfully','Failed to Insert Features',$redirect);
		}
	
		public function Edit(){ 
			// $this->check_rights($_SERVER['PHP_SELF']);
			$feature_id=$this->input->get('id');
			$data['Features'] = $this->Users_model->get_feature_on_id($feature_id);
			$data['ParentAdminMenu'] = $this->Users_model->get_all_parent_admin_menu(0);
			$stmt='<select class="select2_group form-control" id="adminmenu" name="adminmenu" required>
			<option value="'.$data['Features']->admin_menu_id.'" required>'.$data['Features']->admin_name.'</option>
			';
			foreach($data['ParentAdminMenu']->result() as $row){
			$stmt.=	'<option style="font-weight:bolder" value="'.$row->admin_menu_id.'">'.$row->name.'</option>';
			$data['SubMenu'] = $this->Users_model->get_all_parent_admin_menu($row->admin_menu_id);
			$space='&nbsp&nbsp&nbsp&nbsp';
			if($data['SubMenu']->num_rows()){
				foreach($data['SubMenu']->result() as $sub){
					if($data['SubMenu']=$this->Users_model->get_all_parent_admin_menu($sub->admin_menu_id)){
						$stmt.='<option style="font-weight:bold;" value="'.$sub->admin_menu_id.'">'.$space.$sub->name.'</option>';
						$stmt=$this->loop($data,$stmt,$space);
					}
			else{
				$stmt.='<option value="'.$sub->admin_menu_id.'">'.$sub->name.'</option>';
			}
		}}
		}
		$stmt.='</select>';
		$data['MenuGroup']=$stmt;
			$this->load->view("Admin/edit_features.php",$data);
		}

		public function Update(){ 
			$feature_id=$this->input->post('featureId');

			$data = array(
				'name' => $this->input->post('name'),     
				'admin_menu_id' => $this->input->post('adminmenu'),    
				
				);
			
			return $this->display_status(
				$this->Users_model->update_features_db($feature_id,$data),
				'Features Updated Successfully','Failed to Update Features',1
		);
		}
		public function Delete(){
			$feature_id=$this->input->get('id');
			return $this->display_status(
				$this->Users_model->delete_feature_db($feature_id),
				'Feature Deleted Successfully','Failed to Delete Feature',1
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
					return redirect('Admin/Features');
				}
				else
				{
				  return redirect('Admin/Features/Add');
				}

		}
    
    
    public function __construct()
    {
		parent::__construct();
				$this->load->model("Admin/Users_model",'Users_model');
				$this->login_check();
    }
}?>