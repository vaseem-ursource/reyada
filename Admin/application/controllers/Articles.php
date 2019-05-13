<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articles extends CI_Controller {
	public function index()
	{
		$data['title'] = 'Articles';
		$data['Articles'] = $this->Articles_model->get_all_articles();
		$this->load->view('view_articles',$data);
    }

    public function Add()
		{
		$data['title'] = 'Articles';
		$data['Categories'] = $this->Articles_model->get_all_categories();
		$this->load->view('add_articles',$data);
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
			$config['upload_path'] = './uploads/articles/';
			$config['allowed_types'] = 'jpeg|jpg|png';
			$config['overwrite'] = FALSE;
			$config['encrypt_name'] = FALSE;
			$config['remove_spaces'] = TRUE;
			if ( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('image_url')) {
				$image_url = "";
			} else {
				$image_url =  $this->upload->data();
				$image_url = 'uploads/articles/'.$image_url["file_name"];
			}

			$data = array(
			'title' => $this->input->post('title'),
			'sub_title' => $this->input->post('sub_title'),
			'author' => $this->input->post('author'),
			'description' => $this->input->post('descr'),
			'image_url' => $image_url,
			'cat_id' => $this->input->post('category'),
			'posted_date' => date('Y-m-d H:i:s'),
			'created_date' => date('Y-m-d H:i:s'),
			'modified_date' => '',
			'modified_by' => '', 
				// 'modified_by' => $this->session->userdata('user_name'),   
			'is_deleted' => 'No',    
			'is_active' => $this->input->post('is_active'), 
			);
			return $this->display_status(
				$this->Articles_model->insert_articles_db($data),
				'Category Inserted Successfully','Failed to Insert Category',$redirect,0);
		}

	
		public function Edit(){ 
			$article_id=$this->input->get('id');
			$data['Categories'] = $this->Articles_model->get_all_categories();
			$data['Articles'] = $this->Articles_model->get_articles_on_id($article_id);
			$this->load->view("edit_Articles.php",$data);
		}

		public function Update(){ 
			$article_id=$this->input->post('article_id');
			$config['upload_path'] = './uploads/articles/';
			$config['allowed_types'] = 'jpeg|jpg|png';
			$config['overwrite'] = FALSE;
			$config['encrypt_name'] = FALSE;
			$config['remove_spaces'] = TRUE;
			if ( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('image_url')) {

				$image_url = $this->Articles_model->get_articles_on_id($article_id)->image_url;
			} else {
				$image_url =  $this->upload->data();
				$image_url = 'uploads/articles/'.$image_url["file_name"];
			}
			$data = array(
				'title' => $this->input->post('title'),
				'sub_title' => $this->input->post('sub_title'),
				'author' => $this->input->post('author'),
				'description' => $this->input->post('descr'),
				'image_url' => $image_url,
				'cat_id' => $this->input->post('category'),
				'posted_date' => date('Y-m-d H:i:s'),
				'modified_date' => date('Y-m-d H:i:s'),
				'modified_by' => date('Y-m-d H:i:s'), 
					// 'modified_by' => $this->session->userdata('user_name'),   
				'is_active' => $this->input->post('is_active'), 
				);
			return $this->display_status(
				$this->Articles_model->update_articles_db($article_id,$data),
				'Article Updated Successfully','Failed to Update Article',1,0
		);
		}

		public function DeleteImage(){
			$article_id=$this->input->get('id');
			$data = array(
				'image_url' => '',
				);
			return $this->display_status(
				$this->Articles_model->update_articles_db($article_id,$data),
				'Image Deleted Successfully','Failed to Deleted Image',2,$article_id
		);
		}

		public function Delete(){
			$article_id=$this->input->get('id');
			$data = array(
				'is_deleted' => 'Yes',
				'is_active' =>'Yes'
			);
			return $this->display_status(
				$this->Articles_model->update_articles_db($article_id,$data),
				'Article Deleted Successfully','Failed to Delete Article',1,0
			);
		}

		public function Status(){
			$article_id=$this->input->get('id');
			$status=$this->Articles_model->get_articles_on_id($article_id)->is_active;
			if($status == 'Active' || $status == 'active'){
				$status = 'Inactive';
			}else{
				$status='Active';
			}
			$data = array(
				'is_active' => $status
			);
			return $this->display_status(
				$this->Articles_model->update_articles_db($article_id,$data),
				'Article Status Changed','Failed to Change Status Article',1,0
			);
		}
				
		public function ViewComments()
		{
			$article_id=$this->input->get('id');
			$data['Comments'] = $this->Articles_model->get_all_comments($article_id);
			$this->load->view('view_comments',$data);
		}

		public function View(){ 
			$comment_id=$this->input->get('id');
			$data['Comments'] = $this->Articles_model->get_comments($comment_id);
			$this->load->view("view_comments_details",$data);
	  }

		public function DeleteComment(){
			$comment_id=$this->input->get('id');
			$article_id=$this->input->get('article');
			$data = array(
				'is_deleted' => 'Yes'
			);
			return $this->display_status(
				$this->Articles_model->update_comments_db($comment_id,$data),
				'Comment Deleted Successfully','Failed to Delete Comment',3,$article_id
			);
		}


		private function resize_image($image){
			$config['upload_path'] = base_url().'uploads/articles/';
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
					 $config['source_image'] =  base_url().'uploads/articles/'.$data['file_name'];
					 $config['create_thumb'] = 'TRUE';
					 $config['maintain_ratio'] = 'TRUE';	
					 $config['quality'] = '80%';					 
					 $config['width'] = '300';					 
					 $config['height'] = '300';		
					 $config['new_image'] =  base_url().'uploads/articles/'.$data['file_name'];				 			 
			
					 $this->load->library('image_lib', $config); 
					 $this->image_lib->clear();
					 $this->image_lib->initialize($config);
					 $this->image_lib->rotate();
					 $this->image_lib->resize();  
					 $image_path = 'uploads/articles/'.$data["file_name"];
					//  $newPath = $data['new_image'];           
					//  $image_thumb = 'uploads/articles/'.substr($data['file_name'], 0, -4)."_thumb".$data['file_ext'];  
				}
				$image_data = $image_path;
				return  $image_data;
	}

		private function display_status($status,$success,$fail,$redirect,$article_id)
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
					return redirect('Articles');
				}
				elseif($redirect==2)
				{
					return redirect('Articles/Edit?id='.$article_id);
				}
			
				elseif($redirect==3)
				{
					return redirect('Articles/ViewComments?id='.$article_id);
				}
				else
				{
				  return redirect('Articles/Add');
				}
		}
    
    
    public function __construct()
    {
		parent::__construct();
				if($this->session->userdata('user_name')){
				}
				else{
					redirect(base_url('Login'));  
				}  
				$this->load->model("Articles_model",'Articles_model');
				if($this->session->userdata('role') == 'admin' || $this->session->userdata('role') == 'Admin'){
				}
				else{
					redirect(base_url('Members'));  
				}     
    }
}?>