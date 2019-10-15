<?php
    class Reset_password_model extends CI_Model{
        public function create($data){
            return $this->db->insert('reset_password', $data);
        }  
    }
?>