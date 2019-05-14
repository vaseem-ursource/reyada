<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class main extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
		$this->load->model("Main_model",'Main_model');
        $this->lang->load('auth');
         // Load Pagination library
        $this->load->library('pagination');
    }
    
    function index()
    {
        $data['folder_name'] = 'main';
        $data['file_name'] = 'index';
        $data['header_name'] = 'header';
        $this->load->view('index', $data);

    }

    function services()
    {
        $data['folder_name'] = 'main';
        $data['file_name'] = 'Services';
        $data['header_name'] = 'header';
        $this->load->view('index', $data);

    }

    function blog()
    {
        $data['folder_name'] = 'main';
        $data['file_name'] = 'Blog';
        $data['header_name'] = 'header_blog';
        $data['Article'] = $this->Main_model->get_all_article();
		$data['Categories'] = $this->Main_model->get_all_categories();        
        $this->load->view('index', $data);
    }

    function blog_category()
    {
		$cat_id=$this->input->get('id');
        $data['folder_name'] = 'main';
        $data['file_name'] = 'Blog';
        $data['header_name'] = 'header_blog';
        $data['Article'] = $this->Main_model->get_article_by_category($cat_id);
		$data['Categories'] = $this->Main_model->get_all_categories();        
        $this->load->view('index', $data);

    }

    function article()
    {
		$article_id=$this->input->get('id');
        $data['folder_name'] = 'main';
        $data['file_name'] = 'Article';
        $data['header_name'] = 'header';
        $data['Article'] = $this->Main_model->get_article_on_id($article_id);
		$data['Categories'] = $this->Main_model->get_all_categories();                
        $this->load->view('index', $data);

    }

    public function loadRecord($rowno=0){
        $search_text=$this->input->get('search_text');
        // Row per page
        $rowperpage = 6;
    
        // Row position
        if($rowno != 0){
          $rowno = ($rowno-1) * $rowperpage;
        }
     
        // All records count
        $allcount = $this->Main_model->getrecordCount();
    
        // Get records
        $users_record = $this->Main_model->getData($rowno,$rowperpage);
     
        // Pagination Configuration
        $config['base_url'] = base_url().'Main/loadRecord';
        $config['use_page_numbers'] = TRUE;
        $config['total_rows'] = $allcount;
        $config['per_page'] = $rowperpage;
    
        // Initialize
        $this->pagination->initialize($config);
    
        // Initialize $data Array
        $data['pagination'] = $this->pagination->create_links();
        $data['result'] = $users_record;
        $data['row'] = $rowno;
    
        echo json_encode($data);
      }

    function contactus()
    {
        $data = array(
        'title' => $this->input->post('full_name'),
        'created_date' => $this->input->post('email'),
        'modified_date' =>$this->input->post('phone'),
        'modified_by' => $this->input->post('company'),
        'is_deleted' => $this->input->post('membership'),   
        'is_active' => $this->input->post('workspace'), 
        'is_active' => $this->input->post('somethingelse'), 
        'is_active' => $this->input->post('notes'), 
        'is_active' => $this->input->post('IsActive'), 
        'is_active' => $this->input->post('IsActive'), 
        'is_active' => $this->input->post('IsActive'), 
        );
        return $this->display_status(
            $this->Categories_model->insert_categories_db($data),
            'Category Inserted Successfully','Failed to Insert Category',$redirect);

    }
    
}