<?php
    class Articles_model extends CI_Model{
        public function insert_articles_db($data){
            return $this->db->insert('articles', $data);
        }

        public function get_all_articles(){
            return $this->db->select('articles.*,categories.title as category_title')
                        ->join('categories','categories.cat_id = articles.cat_id','left')
                        ->where('articles.is_deleted','No')
                        ->get('articles');
        }

        public function get_all_categories(){
            return $this->db
            		->where('is_active','Active')
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
       
        public function get_all_comments($article_id){
            return $this->db
                        ->where('article_id',$article_id)                               
                        ->get('comments');
        }

        public function get_comments($comment_id){
            $query = $this->db
                         ->where('comment_id',$comment_id)
                         ->get('comments');
             return $query->row();
         }

         public function update_comments_db($comment_id,$data){
            return $this->db
                        ->where('comment_id',$comment_id)
                        ->update('comments',$data);
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