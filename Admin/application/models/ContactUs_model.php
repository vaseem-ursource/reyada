<?php
    class ContactUs_model extends CI_Model{

        public function get_all_contact(){
            return $this->db->get('contact_us');
        }

        public function get_contact_details($email){
            $query = $this->db
                         ->where('id',$email)
                         ->get('contact_us');
             return $query->row();
         }

         function delete($id)
        {
            $this->db->where('id', $id);
            $this->db->delete('contact_us');
        }

    }
    ?>