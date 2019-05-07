<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FAQCategories extends MY_Controller {
	public function index()
	{
		$data['title'] = 'FAQ Categories';
		$data['FAQCategories'] = $this->FAQCategories_model->get_all_faq_categories();
		$this->load->view('Admin/view_faq_categories',$data);
    }

    public function Add()
		{
			$this->check_rights($_SERVER['PHP_SELF']);
		$data['title'] = 'FAQ Categories';
		$this->load->view('Admin/add_faq_categories');
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
                'title_en' => $this->input->post('titleEn'),     
				'title_ar' => $this->input->post('titleAr'),    
				'sort_order' => $this->input->post('sortorder')
			);
			return $this->display_status(
				$this->FAQCategories_model->insert_faq_categories_db($data),
				'FAQ Category Inserted Successfully','Failed to Insert FAQ Category',$redirect);
	
		}

		public function Edit(){ 
			$this->check_rights($_SERVER['PHP_SELF']);
			$faq_category_id=$this->input->get('id');
			$data['FAQCategories'] = $this->FAQCategories_model->get_faq_category_on_id($faq_category_id);
			$this->load->view("Admin/edit_faq_categories.php",$data);
		}

		public function Update(){ 
			$faq_category_id=$this->input->post('faqcategoryId');
			$data = array(
				'title_en' => $this->input->post('titleEn'),     
				'title_ar' => $this->input->post('titleAr'),    
				'sort_order' => $this->input->post('sortorder')
				);
			return $this->display_status(
				$this->FAQCategories_model->update_faq_categories_db($faq_category_id,$data),
				'FAQ Category Updated Successfully','Failed to Update FAQ Category',1
		);
		}

		// public function Delete(){
		// 	$faq_id=$this->input->get('id');
		// 	return $this->display_status(
		// 		$this->FAQ_model->delete_faq_db($faq_id),
		// 		'FAQ Deleted Successfully','Failed to Delete FAQ',1
		// 	);
		// }
		
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
					return redirect('Admin/FAQCategories');
				}
				else
				{
				  return redirect('Admin/FAQCategories/Add');
				}

		}
    
    
    public function __construct()
    {
		parent::__construct();
				$this->load->model("Admin/FAQCategories_model",'FAQCategories_model');
				$this->login_check();
    }
}?>