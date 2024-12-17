<?php

class Contact_Model extends CI_Model{
  
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
    
}
?>
