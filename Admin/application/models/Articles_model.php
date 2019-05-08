<?php
    class Articles_model extends CI_Model{
        public function insert_articles_db($data){
            return $this->db->insert('articles', $data);
        }

        public function get_all_articles(){
            return $this->db->get('articles');
        }

        public function get_all_categories(){
            return $this->db
                        ->where('is_deleted','No')
                        ->get('categories');
        }

        public function get_articles_on_id($article_id){
            $query = $this->db
                        ->select('articles.*,categories.title as cat_title')
                        ->join('categories','categories.cat_id = articles.cat_id','left')
                        ->where('article_id',$article_id)
                        ->get('articles');
            return $query->row();
        }

        public function update_articles_db($article_id,$data){
            return $this->db
                        ->where('article_id',$article_id)
                        ->update('articles',$data);
        }
       
}
?>