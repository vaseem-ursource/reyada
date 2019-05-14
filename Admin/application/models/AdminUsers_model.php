<?php
    class AdminUsers_model extends CI_Model{
        public function insert_admin_users_db($data){
            return $this->db->insert('admin_users', $data);
        }

        public function get_all_admin_users(){
            return $this->db
                        ->select('admin_users.email as admin_email,role,partners.company_name,admin_users.status,admin_users.admin_id')
                        ->join('partners', 'partners.partner_id = admin_users.partner_id', 'left')
                        ->get('admin_users');
        }

        public function get_all_partners(){
            return $this->db
                         ->select('partner_id,company_name')
                         ->get('partners');
        }

        public function get_admin_user_on_id($admin_id){
            $query = $this->db
                        ->select('admin_users.email as admin_email,role,partners.partner_id,partners.company_name,admin_users.status,admin_users.admin_id')
                        ->join('partners', 'partners.partner_id = admin_users.partner_id', 'left')
                        ->where('admin_id',$admin_id)
                        ->get('admin_users');
            return $query->row();
        }

        public function update_admin_users_db($admin_id,$data){
            return $this->db
                        ->where('admin_id',$admin_id)
                        ->update('admin_users',$data);
        }

    }
    ?>