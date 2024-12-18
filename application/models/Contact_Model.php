<?php

class Contact_Model extends CI_Model{
  
    public function __construct()
    {
        parent::__construct();
    }

    // Get the total number of Enquires
    public function getEnquiresCount()
    {
        return $this->db->count_all('webo_contact_us');
    }

    function all($where = array(),$single=false){
        $this->db->where('status !=',2);
        $res = $this->db->get_where('webo_contact_us',$where);
        if($res){
            if($single)
                return $res->row_array();
            else
                return $res->result_array();
        }
        return FALSE;
    }
    
    function add($table,$data){
        $this->db->set($data);
        $res = $this->db->insert($table);
        if($res){
            return $res;
        }
        return false;
    }

    public function getAdminEnquires($limit, $offset, $exclude_id = null)
    {
        $this->db->select('webo_contact_us.*');
        $this->db->from('webo_contact_us');
        //$this->db->join('users', 'users.id = blogs.user_id');
        if ($exclude_id !== null) {
            $this->db->where('webo_contact_us.id !=', $exclude_id);
        }
        //$this->db->where('status' ,'publish');
        $this->db->order_by('webo_contact_us.created_at', 'DESC');
        if($limit != 0){
            //echo "string".$offset;
            $this->db->limit($limit, $offset);    
        }
        $query = $this->db->get();
        $result = $query->result();
        //print_r($result);
        foreach ($result as &$enquire) {
            $enquire->message = strip_tags($enquire->message);
        }
        return $result;
    }
    
}
?>
