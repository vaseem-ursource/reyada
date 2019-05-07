<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Areas extends MY_Controller {
	public function index()
	{
		$data['title'] = 'Areas';
		$data['Areas'] = $this->Areas_model->get_all_areas();
		$this->load->view('Admin/view_areas',$data);
    }

    public function Add(){
		$this->check_rights($_SERVER['PHP_SELF']);
		$data['title'] = 'Areas';
		$this->load->view('Admin/add_areas');
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
			'name_en' => $this->input->post('nameEn'),     
			'name_ar' => $this->input->post('nameAr'),    
			);
			return $this->display_status(
				$this->Areas_model->insert_areas_db($data),
				'Area Inserted Successfully','Failed to Insert Area',$redirect);
	
		}

		public function Edit(){ 
			$this->check_rights($_SERVER['PHP_SELF']);
			$area_id=$this->input->get('id');
			$data['Areas'] = $this->Areas_model->get_areas_on_id($area_id);
			$this->load->view("Admin/edit_areas.php",$data);
		}

		public function Update(){ 
			$area_id=$this->input->post('areaId');
			$data = array(
				'name_en' => $this->input->post('nameEn'),     
				'name_ar' => $this->input->post('nameAr'),    
				);
			return $this->display_status(
				$this->Areas_model->update_areas_db($area_id,$data),
				'Area Updated Successfully','Failed to Update Area',1
		);
		}

		public function Delete(){
			$area_id=$this->input->get('id');
			return $this->display_status(
				$this->Areas_model->delete_areas_db($area_id),
				'Area Deleted Successfully','Failed to Delete Area',1
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
					return redirect('Admin/Areas');
				}
				else
				{
				  return redirect('Admin/Areas/Add');
				}


		}
		public function Check(){
			$url=$_POST['url'];
			$admin_pos = strpos($url,"Admin");
			$substr = rtrim(substr($url,$admin_pos),'/');
			$role_id = $this->session->userdata('role_id');
			$feature = $this->get_all_features($role_id)->result();
		 foreach($feature as $row){
				 
				 $link[] = rtrim($row->link.'/'.$row->feature_name,'/');
				 
		 }
		 if(in_array($substr, $link)){
			  echo true;
		 }else{
			echo false;
		 }
	} 

public function get_all_features($role_id){
	return $this->db
							->select('admin_menu.name as name,link,admin_menu.admin_menu_id,features.name as feature_name')
							->join('features','features.admin_menu_id=admin_menu.admin_menu_id','left')
							->join('role_permissions','role_permissions.feature_id=features.feature_id','left')
							->join('roles','roles.role_id=role_permissions.role_id','left')
							->where('roles.role_id',$role_id)
							->order_by('name','asc')
							// ->group_by('admin_menu.admin_menu_id') 
							->get('admin_menu');
}
    
    public function __construct()
    {
		parent::__construct();
				$this->load->model("Admin/Areas_model",'Areas_model');
				$this->login_check();
    }
}
?>