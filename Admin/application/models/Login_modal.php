<?php
    class Login_model extends CI_Model{
        public function verify_credential($username,$password){
            $query = $this->db  
                        ->where('email',$username)
                        ->where('password',$password)
                        ->get('admin_users');
            return $query->row();
        }
    }
?>