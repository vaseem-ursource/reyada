<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Partners extends CI_Controller {
	public function index()
	{
		$data['title'] = 'Partners';
		$data['Partners'] = $this->Partners_model->get_all_partners();
		$data['section'] = $this->Partners_model->get_section_status(2);
		$this->load->view('view_partners',$data);
    }

    public function Add()
	{
		$data['title'] = 'Partners';
		$this->load->view('add_partners',$data);
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

		$config['upload_path'] = './uploads/partners/';
		$config['allowed_types'] = 'jpeg|jpg|png';
		date_default_timezone_set('Asia/Kuwait');
		if (!empty($_FILES['image_url']['name']) && $_FILES['image_url']['error'] == 0) {
			$upload_path = 'uploads/partners/';
			if (!is_dir($upload_path)) {
				mkdir($upload_path, 0777, TRUE);
			}
			$type = explode(".", $_FILES['image_url']['name']);
			$_FILES['image_url']['name'] = $this->randomString() . "." . $type[1];
			if(move_uploaded_file($_FILES['image_url']['tmp_name'], $upload_path . $_FILES['image_url']['name'])){

				$image_path = 'uploads/partners/'.$_FILES['image_url']['name'];
				$image_name = $this->compress_image($image_path,250,250);
			}
			$image_url = $upload_path . $_FILES['image_url']['name'];
		}
		$data = array(
			'company_name' => $this->input->post('companyName'),
			'address' => $this->input->post('address'),
			'phone' => $this->input->post('phone'),
			'person_incharge' => $this->input->post('personIncharge'),
			'comments' => $this->input->post('comments'), 
			'status' => $this->input->post('status'), 
			'image_url' => $image_url,
			'url' => $this->input->post('url'),
			'description' => $this->input->post('description'),
			'is_deleted' => 'No',
		);
		$this->Partners_model->insert_partners_db($data);
		$partner_id = $this->db->insert_id();

		$data1 = array(
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password')),
			'role' => 'Partner',
			'partner_id' => $partner_id,
			'status' => 'Active',   
		);
		return $this->display_status(
		$this->Partners_model->insert_admin_users_db($data1),
		'Partner Inserted Successfully','Failed to Insert Partner',$redirect,0);
	}

	
	public function Edit(){ 
		$partner_id=$this->input->get('id');
		$data['Partners'] = $this->Partners_model->get_partner_on_id($partner_id);
		$this->load->view("edit_partners.php",$data);
	}

	public function Update(){ 
		$this->load->model('AdminUsers_model');
		$partner_id=$this->input->post('partner_id');
		$config['upload_path'] = './uploads/partners/';
		$config['allowed_types'] = 'jpeg|jpg|png';
		date_default_timezone_set('Asia/Kuwait');
		if (!empty($_FILES['image_url']['name']) && $_FILES['image_url']['error'] == 0) {
			$upload_path = 'uploads/partners/';
			if (!is_dir($upload_path)) {
				mkdir($upload_path, 0777, TRUE);
			}
			$type = explode(".", $_FILES['image_url']['name']);
			$_FILES['image_url']['name'] = $this->randomString() . "." . $type[1];
			if(move_uploaded_file($_FILES['image_url']['tmp_name'], $upload_path . $_FILES['image_url']['name'])){

				$image_path = 'uploads/partners/'.$_FILES['image_url']['name'];
				$image_name = $this->compress_image($image_path,250,250);
			}
			$image_url = $upload_path . $_FILES['image_url']['name'];
			$data = array(
			'image_url' => $image_url
			);
			$this->Partners_model->update_partners_db($partner_id,$data);
		}
		$data = array(
		'company_name' => $this->input->post('companyName'),
		'address' => $this->input->post('address'),
		'phone' => $this->input->post('phone'),
		'person_incharge' => $this->input->post('personIncharge'),
		'comments' => $this->input->post('comments'),
		'status' => $this->input->post('status'),
		'url' => $this->input->post('url'),
		'description' => $this->input->post('description'),
		);

		$admindata = array(
			'email' => $this->input->post('email'),
		);
		$this->Partners_model->update_admin_users_db($partner_id,$admindata);

		return $this->display_status(
			$this->Partners_model->update_partners_db($partner_id,$data),
			'Partner Updated Successfully','Failed to Update Partner',1,0
		);
	}

	public function section_status($id,$status){ 
		$vfghf="test";
		$data = array( 
			'status' => $status 
		); 
		$this->Partners_model->update_section($id,$data);
		return redirect('Partners');
	}

	public function Status(){ 
		$partner_id=$this->input->get('id'); 
		$status=$this->Partners_model->get_partner_on_id($partner_id)->status; 
		if($status == 'Active' || $status == 'active'){ 
					$status = 'Inactive'; 
		}else{ 
					$status='Active'; 
		} 
		$data = array( 
					'status' => $status 
		); 
		return $this->display_status( 
					$this->Partners_model->update_partners_db($partner_id,$data), 
					'Admin User Status Changed','Failed to Change Status Admin User',1,0 
		); 
	}

	private function display_status($status,$success,$fail,$redirect,$partner_id)
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
			return redirect('Partners');
		}	
		elseif($redirect==2)
		{
			return redirect('Partners/Change?id='.$partner_id);
		}
		else
		{
			return redirect('Partners/Add');
		}
	}

	public function DeleteImage(){
		$partner_id=$this->input->get('id');
		$data = array(
			'image_url' => '',
			);
		return $this->display_status(
		$this->Partners_model->update_partners_db($partner_id,$data),
		'Image Deleted Successfully','Failed to Deleted Image',2,$article_id
	);
	}

	public function Delete(){
		$partner_id=$this->input->get('id');
		$data = array(
			'is_deleted' => 'Yes',
			'status' => 'No'
		);
		return $this->display_status(
			$this->Partners_model->update_partners_db($partner_id,$data),
			'Partner Deleted Successfully','Failed to Delete Partner',1,0
		);
	}

	function compress_image($source_file, $width=null, $height=null) {
        $info = getimagesize($source_file);
        $config['image_library'] = 'gd2';
        $config['source_image'] = $source_file;
        $config['create_thumb'] = FALSE;
		$config['maintain_ratio'] = TRUE;
		$config['quality'] = '80%';					 
		$config['width'] = '300';					 
		$config['height'] = '300';	
        $config['new_image'] = $source_file;

        $this->load->library('image_lib', $config);
        $this->image_lib->initialize($config);
        $res = $this->image_lib->resize();
        $this->image_lib->clear();
        return $res;
	}
	
	public function randomString($length = 5)
    {
        $key = '';
        $keys = array_merge(range(0, 9), range('a', 'z'));
        for ($i = 0; $i < $length; $i++) {
            $key .= $keys[array_rand($keys)];
        }
        return $key;
    }
    
    
    public function __construct()
    {
		parent::__construct();
		if($this->session->userdata('user_name')){
		}
		else{
			redirect(base_url('Login'));  
		}  
		$this->load->model("Partners_model",'Partners_model');
		if($this->session->userdata('role') == 'admin' || $this->session->userdata('role') == 'Admin'){
		}
		else{
			redirect(base_url('Members'));  
		}     
    }
}
?>