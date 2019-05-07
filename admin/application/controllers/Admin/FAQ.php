<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FAQ extends MY_Controller {
	public function index()
	{
		$data['title'] = 'FAQ';
		$data['FAQ'] = $this->FAQ_model->get_all_faq();
		$this->load->view('Admin/view_faq',$data);
    }

    public function Add()
		{
			$this->check_rights($_SERVER['PHP_SELF']);
		$data['title'] = 'FAQ';
		$data['FAQCategories'] = $this->FAQ_model->get_all_faq_categories();
		$this->load->view('Admin/add_faq',$data);
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
                'question_en' => $this->input->post('quesEn'),     
				'question_ar' => $this->input->post('quesAr'),    
				'answer_en' => $this->input->post('ansEn'),
				'answer_ar' => $this->input->post('ansAr'),
				'faq_category_id' => $this->input->post('faqcatname'),
				'sort_order' => $this->input->post('sortorder')
			);
			return $this->display_status(
				$this->FAQ_model->insert_faq_db($data),
				'FAQ Inserted Successfully','Failed to Insert FAQ',$redirect);
	
		}

		public function Edit(){ 
			$this->check_rights($_SERVER['PHP_SELF']);
			$faq_id=$this->input->get('id');
			$data['FAQ'] = $this->FAQ_model->get_faq_on_id($faq_id);
	  	$data['FAQCategories'] = $this->FAQ_model->get_all_faq_categories();
			$this->load->view("Admin/edit_faq.php",$data);
		}

		public function Update(){ 
			$faq_id=$this->input->post('faqId');
			$data = array(
				'question_en' => $this->input->post('quesEn'),     
				'question_ar' => $this->input->post('quesAr'),    
				'answer_en' => $this->input->post('ansEn'),
				'answer_ar' => $this->input->post('ansAr'),
				'faq_category_id' => $this->input->post('faqcatname'),
				'sort_order' => $this->input->post('sortorder')
				);
			return $this->display_status(
				$this->FAQ_model->update_faq_db($faq_id,$data),
				'FAQ Updated Successfully','Failed to Update FAQ',1
		);
		}

		public function Delete(){
			$faq_id=$this->input->get('id');
			return $this->display_status(
				$this->FAQ_model->delete_faq_db($faq_id),
				'FAQ Deleted Successfully','Failed to Delete FAQ',1
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
					return redirect('Admin/FAQ');
				}
				else
				{
				  return redirect('Admin/FAQ/Add');
				}

		}
    
    
    public function __construct()
    {
		parent::__construct();
				$this->load->model("Admin/FAQ_model",'FAQ_model');
				$this->login_check();
    }
}?>