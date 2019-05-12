<?php
    class Login_model extends CI_Model{
        public function verify_credential($email,$password){
            $query = $this->db  
                        ->where('email',$email)
                        ->where('password',$password)
                        ->get('admin_users');
            return $query->row();
        }
    }
?>