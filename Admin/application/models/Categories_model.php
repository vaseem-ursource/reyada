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
        public function get_parent_categories_name($parent_id){
            $query = $this->db
                        ->where('cat_id',$parent_id)
                        ->get('categories');
            return $query->row();
        }

        public function get_all_parent_categories($parent_id){
            return $this->db
                        ->where('parent_id',$parent_id)
                        ->get('categories');
        }
        public function update_categories_db($category_id,$data){
            return $this->db
                        ->where('cat_id',$category_id)
                        ->update('categories',$data);
        }
        public function delete_categories_db($category_id){
            return $this->db->delete('categories',['cat_id'=>$category_id]);
         }

        public function get_parent_categories($parent_id){
            $query = $this->db
                        ->where('parent_id',$parent_id)
                        ->get('categories');
            return $query->row();
        }
        public function get_categories_image_path($cat_id){
            $query = $this->db
                        ->select('image_url')
                        ->where('cat_id',$cat_id)
                        ->get('categories');
            return $query->row();
        }

        public function get_categories_icon_path($cat_id){
            $query = $this->db
                        ->select('icon_image_url')
                        ->where('cat_id',$cat_id)
                        ->get('categories');
            return $query->row();
        }

        public function delete_categories_image($cat_id,$data){
            return $this->db
                        ->where('cat_id',$cat_id)
                        ->update('categories',$data);
        }
}
?>