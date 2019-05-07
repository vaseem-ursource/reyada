<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminMenu extends MY_Controller {
	public function index()
	{
		$data['title'] = 'Admin Menu';
		$data['AdminMenu'] = $this->Users_model->get_admin_menu();
		$this->load->view('Admin/view_admin_menu',$data);
	}
	
	public function Add()
		{
		$this->check_rights($_SERVER['PHP_SELF']);
		$data['title'] = 'Admin Menu';
		$data['ParentMenu'] = $this->Users_model->get_all_admin_menu();
		$data['ParentMenu'] = $this->Users_model->get_all_parent_admin_menu(0);
		$stmt='<select class="form-control" id="adminmenu" name="adminmenu" required><option value="" required>-- Choose --</option>
		<option value="0">No Parent Admin Menu</option>
		<option value="-1">Hidden</option>';
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
		$this->load->view('Admin/add_Admin_menu',$data);
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
			if($this->input->post('adminmenu')){
				$parent_cat=$this->input->post('adminmenu');
			}else{
				$parent_cat=null;
			}
			$data = array(
			'parent_id' => $parent_cat,    
			'name' => $this->input->post('name'),     
			'link' => $this->input->post('link'),    
			'icon_class' => $this->input->post('iconclass')
			
			);
			return $this->display_status(
				$this->Users_model->insert_adminmenu_db($data),
				'Admin Menu Inserted Successfully','Failed to Insert Admin Menu',$redirect);
		}
	
		public function Edit(){ 
			$this->check_rights($_SERVER['PHP_SELF']);
			$adminmenu_id=$this->input->get('id');
			$data['AdminMenu'] = $this->Users_model->get_admin_menu_on_id($adminmenu_id);
			if(isset($data['AdminMenu']->parent_id)){
				$data['PAdminMenuName']=$this->Users_model->get_parent_admin_menu_name($data['AdminMenu']->parent_id);
				$data['PAdminMenu']= $this->Users_model->get_parent_admin_menu($data['AdminMenu']->parent_id);
			}
			if(isset($data['PAdminMenuName']->name)){
				$parent_name = $data['PAdminMenuName']->name;
				$parent_id=$data['PAdminMenuName']->admin_menu_id;
			}else{
				$parent_name = "No Parent Admin Menu";
				$parent_id=0;
			}
			$data['ParentAdminMenu'] = $this->Users_model->get_all_parent_admin_menu(0);
			$stmt='<select class="select2_group form-control" id="adminmenu" name="adminmenu" required><option value="'.$parent_id.'" required>'.$parent_name.'</option>
			<option value="0">No Parent Admin Menu</option>';
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
			$this->load->view("Admin/edit_admin_menu.php",$data);
		}

		public function Update(){ 
			$adminmenu_id=$this->input->post('adminmenuId');
		
			if($this->input->post('adminmenu')){
				$parent_cat=$this->input->post('adminmenu');
			}else{
				$parent_cat="";
			}
		
			$data = array(
				'parent_id' => $parent_cat,    
				'name' => $this->input->post('name'),     
				'link' => $this->input->post('link'),    
				'icon_class' => $this->input->post('iconclass')
				
				);
			return $this->display_status(
				$this->Users_model->update_admin_menu_db($adminmenu_id,$data),
				'Admin Menu Updated Successfully','Failed to Update Admin Menu',1
		);
		}

		public function Delete(){
			$adminmenu_id=$this->input->get('id');
			return $this->display_status(
				$this->Users_model->delete_admin_menu_db($adminmenu_id),
				'Admin Menu Deleted Successfully','Failed to Delete Admin Menu',1
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
					return redirect('Admin/AdminMenu');
				}
				else
				{
				  return redirect('Admin/AdminMenu/Add');
				}

		}
    
    
    public function __construct()
    {
		parent::__construct();
				$this->load->model("Admin/Users_model",'Users_model');
				$this->login_check();
    }
}?>