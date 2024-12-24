<?php

class Career_Model extends CI_Model{
  
    public function __construct()
    {
        parent::__construct();
    }

    // Get the total number of Careers
    public function getCareersCount()
    {
        return $this->db->count_all('webo_careers');
    }

    function all($where = array(),$single=false){
        $this->db->where('status !=',2);
        $res = $this->db->get_where('webo_careers',$where);
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

    public function getAdminCareers($limit, $offset, $exclude_id = null)
    {
        $this->db->select('webo_careers.*');
        $this->db->from('webo_careers');
        //$this->db->join('users', 'users.id = blogs.user_id');
        if ($exclude_id !== null) {
            $this->db->where('webo_careers.id !=', $exclude_id);
        }
        //$this->db->where('status' ,'publish');
        $this->db->order_by('webo_careers.created_at', 'DESC');
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
    
    public function getCareersById($id)
    {
        $this->db->select('webo_careers.*');
        $this->db->from('webo_careers');
        $this->db->where('webo_careers.career_id', $id);
        //$this->db->where('status' ,'publish');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }
}
?>
