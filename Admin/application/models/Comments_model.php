<?php
    class Comments_model extends CI_Model{
        public function insert_comments_db($data){
            return $this->db->insert('comments', $data);
        }

        public function get_all_comments(){
            return $this->db->get('comments');
        }

        public function get_comment_on_id($comment_id){
            $query = $this->db
                        ->select('comments.*')
                        ->where('comment_id',$comment_id)
                        ->get('comments');
            return $query->row();
        }

        public function update_comments_db($comment_id,$data){
            return $this->db
                        ->where('comment_id',$comment_id)
                        ->update('comments',$data);
        }

    }
    ?>