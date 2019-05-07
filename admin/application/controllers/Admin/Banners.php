<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banners extends MY_Controller {
	public function index()
	{
		$data['title'] = 'Banners';
		$data['Banners'] = $this->Banners_model->get_all_banners();
		$this->load->view('Admin/view_banners',$data);
    }

    public function Add()
		{
			$this->check_rights($_SERVER['PHP_SELF']);
		$data['title'] = 'Banners';
		$this->load->view('Admin/add_banners');
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
			if(isset($_FILES["image"]["name"]))  
			{  
			$image =  $this->resize_image('image');
			$banner_image = $image['image_thumb'];
			$image = $image['image_path'];
			} 
			date_default_timezone_set('Asia/Kuwait');
			$data = array(
            'image_url' => $banner_image, 
			      'link_desc' => $this->input->post('desc'),
			      'created_by' => $this->session->userdata('user_name'),  
			      'created_date' => date('Y-m-d H:i:s'),
			      'modified_date' => '',
			      'modified_by' => '' 
			);
			return $this->display_status(
				$this->Banners_model->insert_banners_db($data),
				'Banner Inserted Successfully','Failed to Insert Banner',$redirect);
	
		}

		public function Edit(){ 
			$this->check_rights($_SERVER['PHP_SELF']);
			$banner_image_id=$this->input->get('id');
			$data['Banners'] = $this->Banners_model->get_banner_on_id($banner_image_id);
			$this->load->view("Admin/edit_banners.php",$data);
		}

		public function Update(){ 
			$banner_image_id=$this->input->post('bannerId');
			if(isset($_FILES["image"]["name"]))  
			{  
			$image =  $this->resize_image('image');
			$banner_image = $image['image_thumb'];
			$image = $image['image_path'];
			} 
			if($image==""){
				$image = $this->Banners_model->get_banner_image_path($banner_image_id)->image_url;
			}
			date_default_timezone_set('Asia/Kuwait');
			$data = array(
		    'image_url' => $banner_image,
				'link_desc' => $this->input->post('desc'),     
				'modified_date' => date('Y-m-d H:i:s'),
				'modified_by' => $this->session->userdata('user_name')
				);
			return $this->display_status(
				$this->Banners_model->update_banner_db($banner_image_id,$data),
				'Banner Updated Successfully','Failed to Update Banner',1
		);
		}

		public function Delete(){
			$banner_image_id=$this->input->get('id');
			return $this->display_status(
				$this->Banners_model->delete_banner_db($banner_image_id),
				'Banner Deleted Successfully','Failed to Delete Banner',1
			);
		}

		public function DeleteImage(){
			$banner_image_id=$this->input->get('id');
			$data = array(
				'image_url' => '',    
				);
				$this->Banners_model->delete_banners_image($banner_image_id,$data);
				redirect('Admin/Banners/Edit?id='.$banner_image_id);
		} 

		private function resize_image($image){
			$config['upload_path'] = './uploads/admin/banners/';
					 $config['allowed_types'] = 'png|jpg|jpeg';
					 $this->load->library('upload',$config);
					if(!$this->upload->do_upload($image))
					{		     
						 $image_path = "";
					}
					else
					{
						$data = $this->upload->data();
					 $config['image_library'] = 'gd2';
					 $config['source_image'] = './uploads/admin/banners/'.$data['file_name'];
					 $config['create_thumb'] = 'TRUE';
					 $config['maintain_ratio'] = 'TRUE';	
					 $config['quality'] = '80%';					 
					 $config['width'] = '300';					 
					 $config['height'] = '300';		
					 $config['new_image'] = './uploads/admin/banners/'.$data['file_name'];				 			 
			
						 $this->load->library('image_lib', $config); 
						 $this->image_lib->clear();
						$this->image_lib->initialize($config);
							$this->image_lib->rotate();
						 $this->image_lib->resize();  
						 $image_path = 'uploads/admin/banners/'.$data["file_name"];
						 $newPath = $data['new_image'];           
						$image_thumb = 'uploads/admin/banners/'.substr($data['file_name'], 0, -4)."_thumb".$data['file_ext'];  
						 
				}
				$image_data = array('image_path'=>$image_path,'image_thumb'=>$image_thumb);
				// var_dump($image_data);exit;
			 
				return  $image_data;
		
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
					return redirect('Admin/Banners');
				}
				else
				{
				  return redirect('Admin/Banners/Add');
				}

		}
    
    
    public function __construct()
    {
		parent::__construct();
				$this->load->model("Admin/Banners_model",'Banners_model');
				$this->login_check();
    }
}?>