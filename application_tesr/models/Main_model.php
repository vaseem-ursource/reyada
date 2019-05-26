<?php
    class Main_model extends CI_Model{
        // public function insert_admin_users_db($data){
        //     return $this->db->insert('admin_users', $data);
        // }

        public function get_all_article(){
            return $this->db
                        ->where('is_deleted','No')
                        ->where('is_active','Active')
                        ->get('articles');
        }

        public function get_all_categories(){
            return $this->db
                        ->where('is_deleted','No')
                        ->where('is_active','Active')
                        ->get('categories');
        }

        public function get_article_on_id($article_id){
            $query = $this->db
                        ->where('article_id',$article_id)
                        ->get('articles');
            return $query->row();
        }

        public function get_comments($article_id){
        return $query = $this->db
                        ->where('article_id',$article_id)
                        ->where('is_deleted','No')
                        ->get('comments');
             
        }

        public function get_article_by_category($cat_id){
            return $this->db
                        ->where('cat_id',$cat_id)
                        ->get('articles');
        }

        // Fetch records
        public function getData($rowno,$rowperpage,$search_text) {
        
            $this->db->select('*');
            $this->db->where('is_deleted','No');
            $this->db->where('is_active','Active');
            $this->db->like('title',$search_text);
            $this->db->like('sub_title',$search_text);
            $this->db->limit($rowperpage, $rowno);  
            $this->db->from('articles');
            $query = $this->db->get();
        
            return $query->result_array();
        }

        // Select total records
        public function getrecordCount($search_text) {

            $this->db->select('count(*) as allcount');
            $this->db->where('is_deleted','No');
            $this->db->where('is_active','Active');
            $this->db->like('title',$search_text);
            $this->db->like('sub_title',$search_text);
            $this->db->from('articles');
            $query = $this->db->get();
            $result = $query->result_array();
        
            return $result[0]['allcount'];
        }

        public function insert_contactus_db($data){
            return $this->db->insert('contact_us', $data);
        }

        public function get_recent_articles(){
            return $this->db
                        ->where('is_deleted','No')
                        ->where('is_active','Active')
                        ->limit(3)
                        ->get('articles');
        }

    }
    ?>