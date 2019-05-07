<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductReviews extends MY_Controller {
	public function index()
	{
		$data['title'] = 'ProductReviews';
		$data['ProductReviews'] = $this->ProductReviews_model->get_productreviews();
		$this->load->view('Admin/view_productreviews',$data);
    }

    public function View(){ 
        $review_id=$this->input->get('id');
        $data['ProductReviews'] = $this->ProductReviews_model->get_productreviews_details($review_id);
        $this->load->view("Admin/view_productreviews_details",$data);
    }
    
    public function Approve(){
        $review_id=$this->input->get('id');
        $status=$this->ProductReviews_model->get_productreview_status($review_id)->is_approved;
        if($status=='Yes'){
                $status = 'No';
        }else{
                $status='Yes';
        }
        $data = array(
                'is_approved' => $status
        );
        return $this->display_status(
        $this->ProductReviews_model->update_productreview_db($review_id,$data),
        'Product Review Status Changed','Failed to Change Product Review Status',1
        );
    }
    public function Delete(){
        $review_id=$this->input->get('id');
        return $this->display_status(
                $this->ProductReviews_model->delete_review_db($review_id),
                'Product Review Deleted Successfully','Failed to Delete Product Review',1
        );
}

    private function display_status($status,$success,$fail)
    {
            if($status)
            {
                    $this->session->set_flashdata('success', $success);
            }
            else{
                    $this->session->set_flashdata('warning', $fail);
            }
            return redirect('Admin/ProductReviews/');

    }
    
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Admin/ProductReviews_model",'ProductReviews_model');
        $this->login_check();
    }
}?>