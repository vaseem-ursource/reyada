<?php
    class Partners_model extends CI_Model{
        public function insert_partners_db($data){
            return $this->db->insert('partners', $data);
        }
        public function insert_admin_users_db($data){
            return $this->db->insert('admin_users', $data);
        }

        public function get_all_partners(){
            return $this->db->get('partners');
        }

        public function get_partner_on_id($partner_id){
            $query = $this->db
                        ->select('partners.*')
                        ->where('partner_id',$partner_id)
                        ->get('partners');
            return $query->row();
        }

        public function update_partners_db($partner_id,$data){
            return $this->db
                        ->where('partner_id',$partner_id)
                        ->update('partners',$data);
        }

    }
    ?>