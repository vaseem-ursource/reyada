<?php
    class Partners_model extends CI_Model{
        public function insert_partners_db($data){
            return $this->db->insert('partners', $data);
        }
        public function insert_admin_users_db($data){
            return $this->db->insert('admin_users', $data);
        }

        public function get_all_partners(){
            $this->db->select("partners.*,admin_users.email");
            $this->db->from('partners');
            $this->db->join('admin_users', 'partners.partner_id = admin_users.partner_id');
            $this->db->where('partners.is_deleted','No');
            $this->db->where('admin_users.is_deleted','No');
            $query = $this->db->get();
            return ($query->num_rows() < 1) ? null : $query->result();
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

        public function get_section_status($id){
            $query = $this->db
                        ->select('sections.*')
                        ->where('id',$id)
                        ->get('sections');
            return $query->row();
        }

        public function update_section($id,$data){
            $this->db->where('id',$id)
                     ->update('sections',$data);
                     
        }
    }
    ?>