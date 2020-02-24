<?php
    class Event_model extends CI_Model{

        public function get_all_events(){
            return $this->db->select('*')
                        ->get('event_tickets')->result();
        }

        public function get_event_details($id){
            return $this->db->select('*')
                        ->where('id',$id)
                        ->get('event_tickets')->row();
        }

        public function get_event_attendees($id){
            return $this->db->select('*')
                        ->where('event_ticket_id',$id)
                        ->get('event_tickets_attendee')->result();
        }

        public function get_event_attendees_count($id){
            return $this->db->select('SUM(no_of_attendees) as total_attendee')
                        ->where('event_id',$id)
                        ->get('event_tickets')->row()->total_attendee;
        }

        public function get_event_ids_nexid($id){
            return $this->db->select('id')
                        ->where('event_id',$id)
                        ->get('event_tickets')->result();
        }

        public function get_event_attendee_ids($ids){
            return $this->db->select('*')
                        ->where_in('event_ticket_id',$ids)
                        ->get('event_tickets_attendee')->result();
        }


}