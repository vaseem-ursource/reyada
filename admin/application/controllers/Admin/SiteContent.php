<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SiteContent extends MY_Controller {
	public function index()
	{
		$data['title'] = 'SiteContent';
		$data['SiteContent'] = $this->SiteContent_model->get_all_sitecontent();
		$this->load->view('Admin/view_site_content',$data);
    }

    public function Add()
    {
    $this->check_rights($_SERVER['PHP_SELF']);
    $data['title'] = 'SiteContent';
    $this->load->view('Admin/add_site_content');
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
		'title_en' => $this->input->post('titleen'),     
		'title_ar' => $this->input->post('titlear'),    
		'desc_en' => $this->input->post('descen'),
        'desc_ar' => $this->input->post('descar'),
        'section' => $this->input->post('section'),     
		'sort_order' => $this->input->post('sortorder'), 	
		);
	return $this->display_status(
		$this->SiteContent_model->insert_sitecontent_db($data),
		'Site Content Inserted Successfully','Failed to Insert Site Content',$redirect);
     }

     public function Edit(){ 
	$this->check_rights($_SERVER['PHP_SELF']);
        $site_content_id=$this->input->get('id');
        $data['SiteContent'] = $this->SiteContent_model->get_sitecontent_on_id($site_content_id);
        $this->load->view("Admin/edit_site_content",$data);
    }

    public function Update(){ 
        $site_content_id=$this->input->post('sitecontentid');
        $data = array(
            'title_en' => $this->input->post('titleen'),     
            'title_ar' => $this->input->post('titlear'),    
            'desc_en' => $this->input->post('descen'),
            'desc_ar' => $this->input->post('descar'),
            'section' => $this->input->post('section'),     
            'sort_order' => $this->input->post('sortorder'),    
                );
                
        return $this->display_status(
                $this->SiteContent_model->update_sitecontent_db($site_content_id,$data),
                'Site Content Updated Successfully','Failed to Update Site content',1
);
}
        public function Delete(){
        $site_content_id=$this->input->get('id');
        return $this->display_status(
                $this->SiteContent_model->delete_sitecontent_db($site_content_id),
                'Site Content Deleted Successfully','Failed to Delete Site Content',1
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
                    return redirect('Admin/SiteContent');
            }
            else
            {
              return redirect('Admin/SiteContent/Add');
            }

    }
    
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Admin/SiteContent_model",'SiteContent_model');
        $this->login_check();
    }
}?>