<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brands extends MY_Controller {
	public function index()
	{
		$this->check_rights($_SERVER['PHP_SELF']);
		$data['title'] = 'Brands';
		$data['Brands'] = $this->Brands_model->get_all_brands();
		$this->load->view('Admin/view_brands',$data);
    }

    public function Add()
		{
			$this->check_rights($_SERVER['PHP_SELF']);
		$data['title'] = 'Brands';
		$this->load->view('Admin/add_brands');
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
			
			if(isset($_FILES["icon"]["name"]))  
			{  
			$icon =  $this->resize_image('icon');
			$icon_thumb = $icon['image_thumb'];
			$icon = $icon['image_path'];
			} 
			date_default_timezone_set('Asia/Kuwait');
			$data = array(
			'name_en' => $this->input->post('nameEn'),     
			'name_ar' => $this->input->post('nameAr'),    
			'desc_en' => $this->input->post('descEn'),
			'desc_ar' => $this->input->post('descAr'),
			'icon_url' => $icon_thumb,
			'created_by' => $this->session->userdata('user_name'),  
			'created_date' => date('Y-m-d H:i:s'),
			'modified_date' => '',
			'modified_by' => '',
			'is_deleted' => "No"
			);
			return $this->display_status(
				$this->Brands_model->insert_brand_db($data),
				'Brand Inserted Successfully','Failed to Insert Brand',$redirect);
	
		}

		public function Edit(){ 
			$this->check_rights($_SERVER['PHP_SELF']);
			$brand_id=$this->input->get('id');
			$data['Brands'] = $this->Brands_model->get_brand_on_id($brand_id);
			$this->load->view("Admin/edit_brands.php",$data);
		}

		public function Update(){ 
			$brand_id=$this->input->post('brandId');
			date_default_timezone_set('Asia/Kuwait');
			if(isset($_FILES["icon"]["name"]))  
			{  
			$icon =  $this->resize_image('icon');
			$icon_thumb = $icon['image_thumb'];
			$icon = $icon['image_path'];
			}  
		  if($icon==""){
				$icon = $this->Brands_model->get_brand_image_path($brand_id)->icon_url;
			}
			$data = array(
				'name_en' => $this->input->post('nameEn'),     
				'name_ar' => $this->input->post('nameAr'),    
				'desc_en' => $this->input->post('descEn'),
				'desc_ar' => $this->input->post('descAr'),
				'icon_url' => $icon_thumb,
				'modified_date' => date('Y-m-d H:i:s'),
				'modified_by' => $this->session->userdata('user_name'), 
				
				);
			return $this->display_status(
				$this->Brands_model->update_brand_db($brand_id,$data),
				'Brand Updated Successfully','Failed to Update Brand',1
		);
		}
		public function DeleteIcon(){
			$brand_id=$this->input->get('id');
			$data = array(
				'icon_url' => '',    
				);
				$this->Brands_model->delete_brand_icon($brand_id,$data);
				redirect('Admin/Brands/Edit?id='.$brand_id);
		} 
		public function Delete(){
			$brand_id=$this->input->get('id');
			$data = array(
				'is_deleted' => 'Yes' 
			);
			return $this->display_status(
				$this->Brands_model->update_brand_db($brand_id,$data),
				'Brand Deleted Successfully','Failed to Delete Brand',1
			);
		}
		
		private function resize_image($image){
			$config['upload_path'] = './uploads/admin/brands/';
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
					 $config['source_image'] = './uploads/admin/brands/'.$data['file_name'];
					 $config['create_thumb'] = 'TRUE';
					 $config['maintain_ratio'] = 'TRUE';	
					 $config['quality'] = '80%';					 
					 $config['width'] = '300';					 
					 $config['height'] = '300';		
					 $config['new_image'] = './uploads/admin/brands/'.$data['file_name'];				 			 
			
						 $this->load->library('image_lib', $config); 
						 $this->image_lib->clear();
						$this->image_lib->initialize($config);
							$this->image_lib->rotate();
						 $this->image_lib->resize();  
						 $image_path = 'uploads/admin/brands/'.$data["file_name"];
						 $newPath = $data['new_image'];           
						$image_thumb = 'uploads/admin/brands/'.substr($data['file_name'], 0, -4)."_thumb".$data['file_ext'];  
						 
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
					return redirect('Admin/Brands/');
				}
				else// elseif($redirect==0)
				{
				  return redirect('Admin/Brands/Add');
				}
		}
    
    
    public function __construct()
    {
		parent::__construct();
				$this->load->model("Admin/Brands_model",'Brands_model');
				$this->login_check();
			

    }
}?>