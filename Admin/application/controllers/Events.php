<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Events';
		$reyada = null;
		$mabane = null;
		
		$headers = array(
            'Content-Type: application/json'
		);
		$url = "https://reyada.spaces.nexudus.com/en/events?_depth=25";
		$output = $this->post_with_curl($url,null, $headers);
		if(isset($output['CalendarEvents']) && count($output['CalendarEvents']) > 0){
			$reyada = $output['CalendarEvents'];
			foreach($reyada as $row){
				$row->no_of_attendees = $this->Event_model->get_event_attendees_count($row->Id);
			}
		}
		$events['reyada'] = $reyada;

		$url = "https://reyadamabane.spaces.nexudus.com/en/events?_depth=25";
		$output = $this->post_with_curl($url,null, $headers);
		if(isset($output['CalendarEvents']) && count($output['CalendarEvents']) > 0){
			$mabane = $output['CalendarEvents'];
			foreach($mabane as $row){
				$row->no_of_attendees = $this->Event_model->get_event_attendees_count($row->Id);
			}
		}
		$events['mabane'] = $mabane;

        $data['events'] = $events;
		$this->load->view('events', $data);
	}
	
	public function event_attendees($id = null)
	{
        if(!empty($id)){
			$data['title'] = 'Events Attendee Details';
			$ids = $this->Event_model->get_event_ids_nexid($id);
			if(!empty($ids) && count($ids) > 0){
				$event_ids = array();
				if(!empty($ids) && count($ids) > 0){
					foreach($ids as $id){
						$event_ids[] = $id->id;
					}
				}
				$data['event_attendee'] = $this->Event_model->get_event_attendee_ids($event_ids);
				$this->load->view('event_attendees', $data);
			}else{
				$this->session->set_flashdata('error', 'No attendee`(s) found');
				redirect(base_url('events'));	
			}
        }else{
            $this->session->set_flashdata('error', 'No record found');
            redirect(base_url('events'));
        }
	}

	public function tickets()
	{
        $data['title'] = 'Events';
        $data['event_tickets'] = $this->Event_model->get_all_events();
		$this->load->view('event_tickets', $data);
    }
    
    public function details($id = null)
	{
        if(!empty($id)){
            $data['title'] = 'Events Details';
            $data['event_details'] = $this->Event_model->get_event_details($id);
            $data['event_attendee'] = $this->Event_model->get_event_attendees($id);
            $this->load->view('event_details', $data);
        }else{
            $this->session->set_flashdata('error', 'No record found');
            redirect(base_url('events'));
        }
	}

	public function post_with_curl($url, $p_data = null, $headers)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        if (!empty($p_data) || $headers[0] == "post" ) {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $p_data);
        }

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        curl_close($ch);

        $output = (array) json_decode($result);
        return $output;
    }

	public function __construct()
    {
		parent::__construct();
		if($this->session->userdata('user_name')){
		}
		else{
			redirect(base_url('Login'));  
        }  
        $this->load->model("Event_model");
		if($this->session->userdata('role') == 'admin' || $this->session->userdata('role') == 'Admin'){
		}
		else{
			redirect(base_url('Members'));  
		}     
	}

}
