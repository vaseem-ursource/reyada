<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class main extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->lang->load('auth');
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
        $this->load->view('index', $data);

    }

    function article()
    {
        $data['folder_name'] = 'main';
        $data['file_name'] = 'Article';
        $data['header_name'] = 'header';
        $this->load->view('index', $data);

    }
}