<?php
    class Main_model extends CI_Model{
        // public function insert_admin_users_db($data){
        //     return $this->db->insert('admin_users', $data);
        // }

        public function get_all_article($limit,$offset){
            $query = $this->db
                        ->where('is_deleted','no')
                        ->where('is_active','Active')
                        ->order_by('posted_date','desc')
                        ->limit($limit,$offset)
                        ->get('articles');
            return $query->result();
        }

        function get_rows()
        {
            $this->db->select('*');
            $this->db->from('articles');
            $this->db->order_by('article_id', 'DESC');
            $query = $this->db->get();

            if ($query->num_rows() < 1) {
                return null;
            } else {
                return $query->num_rows();
            }
        }

        public function get_popular_article(){
            return $this->db
                        ->where('is_deleted','No')
                        ->where('is_active','Active')
                        ->limit('6')
                         ->order_by('posted_date','desc')
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
            $query = $this->db
                        ->where('cat_id',$cat_id)
                        ->where('is_deleted','no')
                        ->order_by('posted_date','desc')
                        ->get('articles');
            return $query->result();
        }

        // Fetch records
        public function getData($rowno,$rowperpage,$search_text) {
        
            $this->db->select('*');
            $this->db->where('is_deleted','No');
            $this->db->where('is_active','Active');
            $this->db->like('title',$search_text);
            $this->db->limit($rowperpage, $rowno);  
            $this->db->order_by('posted_date','desc');
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
            $this->db->from('articles');
            $query = $this->db->get();
            $result = $query->result_array();
        
            return $result[0]['allcount'];
        }

         // Fetch Searched records
         public function get_searched_article($search_text) {
        
            $this->db->select('*');
            $this->db->where('is_deleted','No');
            $this->db->where('is_active','Active');
            $this->db->like('title',$search_text);
            $this->db->order_by('posted_date','desc');
            $this->db->from('articles');
            $query = $this->db->get();
        
            return $query;
        }


    public function insert_contactus_db($data){
        return $this->db->insert('contact_us', $data);
    }

    public function create_event_tickets($data){
        $this->db->insert('event_tickets', $data);
        return $this->db->insert_id();
    }

    public function create_event_tickets_attendee($data){
        $this->db->insert('event_tickets_attendee', $data);
        return $this->db->insert_id();
    }

    public function update_event_tickets($id, $data){
        return $this->db
                ->where('id',$id)
                ->update('event_tickets',$data);
    }

    public function get_event_tickets($id) {
        $this->db->select('*');
        $this->db->where('id',$id);
        $this->db->from('event_tickets');
        $query = $this->db->get();
        if ($query->num_rows() < 1) {
            return null;
        } else {
            return $query->row();
        }
    }

    public function get_event_attendee($id) {
        $this->db->select('*');
        $this->db->where('event_ticket_id',$id);
        $this->db->from('event_tickets_attendee');
        $query = $this->db->get();
        $query->result();
    }

	public function get_recent_articles(){
            return $this->db
                        ->where('is_deleted','No')
                        ->where('is_active','Active')
                        ->order_by('posted_date','desc')
                        ->limit(3)
                        ->get('articles');
        }
    }
    ?>