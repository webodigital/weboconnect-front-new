<?php
class User extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function get_user($email) {
        $this->db->where('email', $email);
        $query = $this->db->get('users');
        return $query->row_array();
    }

    public function insert_user($data) {
        return $this->db->insert('users', $data);
    }
    
    public function get_user_by_id($user_id) {
        $this->db->where('id', $user_id);
        $query = $this->db->get('users');
        return $query->row();
    }
}
?>