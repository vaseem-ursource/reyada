<?php
    class Categories_model extends CI_Model{
        public function insert_categories_db($data){
            return $this->db->insert('categories', $data);
        }

        public function get_all_categories(){
            return $this->db->get('categories');
        }

        public function get_categories_on_id($category_id){
            $query = $this->db
                        ->select('categories.*')
                        ->where('cat_id',$category_id)
                        ->get('categories');
            return $query->row();
        }

        public function update_categories_db($category_id,$data){
            return $this->db
                        ->where('cat_id',$category_id)
                        ->update('categories',$data);
        }
       
}
?>