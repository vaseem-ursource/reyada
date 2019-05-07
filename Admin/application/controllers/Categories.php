<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {
	public function index()
	{
		$data['title'] = 'Categories';
		$data['Categories'] = $this->Categories_model->get_all_categories();
		$this->load->view('view_categories',$data);
    }

    public function Add()
		{
		$data['title'] = 'Categories';
		$this->load->view('add_categories',$data);
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
			
			// if(isset($_FILES["image"]["name"]))  
			// {  
			// $image =  $this->resize_image('image');
			// $cat_image = $image['image_thumb'];
			// $image = $image['image_path'];
			// } 

			// if(isset($_FILES["icon"]["name"]))  
			// {  
			// $icon =  $this->resize_image('icon');
			// $cat_logo = $icon['image_thumb'];
			// $icon = $icon['image_path'];
			// } 
			
			date_default_timezone_set('Asia/Kuwait');
			$data = array(
			'title' => $this->input->post('title'),
			'created_date' => date('Y-m-d H:i:s'),
			'modified_date' => date('Y-m-d H:i:s'),
			'modified_by' => '', 
				// 'modified_by' => $this->session->userdata('user_name'),   
			'is_deleted' => 'No',    
			'is_active' => $this->input->post('IsActive'), 
			);
			return $this->display_status(
				$this->Categories_model->insert_categories_db($data),
				'Category Inserted Successfully','Failed to Insert Category',$redirect);
		}

	
		public function Edit(){ 
			$category_id=$this->input->get('id');
			$data['Categories'] = $this->Categories_model->get_categories_on_id($category_id);
			if(isset($data['Categories']->parent_id)){
				$data['PCategoryName']=$this->Categories_model->get_parent_categories_name($data['Categories']->parent_id);
				$data['PCategories']= $this->Categories_model->get_parent_categories($data['Categories']->parent_id);
			}
			if(isset($data['PCategoryName']->name_en)){
				$parent_name = $data['PCategoryName']->name_en;
				$parent_id=$data['PCategoryName']->cat_id;
			}else{
				$parent_name = "No Parent Category";
				$parent_id=0;
			}
			$data['ParentCategories'] = $this->Categories_model->get_all_parent_categories(0);
			$stmt='<select class="select2_group form-control" id="category" name="category" required><option value="'.$parent_id.'" required>'.$parent_name.'</option>
			<option value="0">No Parent Category</option>';
			foreach($data['ParentCategories']->result() as $row){
			$stmt.=	'<option style="font-weight:bolder" value="'.$row->cat_id.'">'.$row->name_en.'</option>';
			$data['SubCategories'] = $this->Categories_model->get_all_parent_categories($row->cat_id);
			$space='&nbsp&nbsp&nbsp&nbsp';
			if($data['SubCategories']->num_rows()){
				foreach($data['SubCategories']->result() as $sub){
					if($data['SubCategories']=$this->Categories_model->get_all_parent_categories($sub->cat_id)){
						$stmt.='<option style="font-weight:bold;" value="'.$sub->cat_id.'">'.$space.$sub->name_en.'</option>';
						$stmt=$this->loop($data,$stmt,$space);
					}
			else{
				$stmt.='<option value="'.$sub->cat_id.'">'.$sub->name_en.'</option>';
			}
		}}
		}
		$stmt.='</select>';
		$data['CategoryGroup']=$stmt;
			$this->load->view("Admin/edit_categories.php",$data);
		}

		public function Update(){ 
			$category_id=$this->input->post('catId');
			date_default_timezone_set('Asia/Kuwait');
			if(isset($_FILES["image"]["name"]))  
			{  
			$image =  $this->resize_image('image');
			$cat_image = $image['image_thumb'];
			$image = $image['image_path'];
			}
			if(isset($_FILES["icon"]["name"]))  
			{  
			$icon =  $this->resize_image('icon');
			$cat_logo = $icon['image_thumb'];
			$icon = $icon['image_path'];
			}
			if($cat_image==""){
				$cat_image = $this->Categories_model->get_categories_image_path($category_id)->image_url;
			}
			if($cat_logo==""){
				$cat_logo = $this->Categories_model->get_categories_icon_path($category_id)->icon_image_url;
			}
			if($this->input->post('category')){
				$parent_cat=$this->input->post('category');
			}else{
				$parent_cat="";
			}
		
			$data = array(
			'parent_id' => $parent_cat,
			'name_en' => $this->input->post('nameEn'),     
			'name_ar' => $this->input->post('nameAr'),    
			'desc_en' => $this->input->post('descEn'), 
			'desc_ar' => $this->input->post('descAr'),     
			'image_url' => $cat_image,    
			'icon_image_url' => $cat_logo,   
			'modified_date' => $this->session->userdata('user_name'),  
			'modified_by' => date('Y-m-d H:i:s'), 
			);
			return $this->display_status(
				$this->Categories_model->update_categories_db($category_id,$data),
				'Category Updated Successfully','Failed to Update Category',1
		);
		}

		public function DeleteImage(){
			$category_id=$this->input->get('id');
			$data = array(
				'image_url' => '',    
				);
				$this->Categories_model->delete_categories_image($category_id,$data);
				redirect('Admin/Categories/Edit?id='.$category_id);
		} 
		public function DeleteIcon(){
			$category_id=$this->input->get('id');
			$data = array(
				'icon_image_url' => '',    
				);
				$this->Categories_model->delete_categories_image($category_id,$data);
				redirect('Admin/Categories/Edit?id='.$category_id);
		} 
		public function Delete(){
			$category_id=$this->input->get('id');
			return $this->display_status(
				$this->Categories_model->delete_categories_db($category_id),
				'Category Deleted Successfully','Failed to Delete Category',1
			);
		}
		
		private function resize_image($image){
			$config['upload_path'] = './uploads/admin/categories/';
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
					 $config['source_image'] = './uploads/admin/categories/'.$data['file_name'];
					 $config['create_thumb'] = 'TRUE';
					 $config['maintain_ratio'] = 'TRUE';	
					 $config['quality'] = '80%';					 
					 $config['width'] = '300';					 
					 $config['height'] = '300';		
					 $config['new_image'] = './uploads/admin/categories/'.$data['file_name'];				 			 
			
						 $this->load->library('image_lib', $config); 
						 $this->image_lib->clear();
						$this->image_lib->initialize($config);
							$this->image_lib->rotate();
						 $this->image_lib->resize();  
						 $image_path = 'uploads/admin/categories/'.$data["file_name"];
						 $newPath = $data['new_image'];           
						$image_thumb = 'uploads/admin/categories/'.substr($data['file_name'], 0, -4)."_thumb".$data['file_ext'];  
						 
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
					return redirect('Categories');
				}
				else
				{
				  return redirect('Categories/Add');
				}
		}
    
    
    public function __construct()
    {
		parent::__construct();
				$this->load->model("Categories_model",'Categories_model');
    }
}?>