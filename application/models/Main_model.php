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

        public function get_article_by_category($cat_id){
            return $this->db
                        ->where('cat_id',$cat_id)
                        ->get('articles');
        }

    }
    ?>