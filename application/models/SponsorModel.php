<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SponsorModel extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getAllSponsors() {
        $query = $this->db->get('sponsors');
        return $query->result_array();
    }

    public function insertSponsor($data) {
        return $this->db->insert('sponsors', $data);
    }

    public function updateSponsor($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('sponsors', $data);
    }

    public function deleteSponsor($id) {
        $this->db->where('id', $id);
        return $this->db->delete('sponsors');
    }

    public function getSponsorById($id) {
        // Example: Fetch sponsor details from the database based on the ID
        $query = $this->db->get_where('sponsors', ['id' => $id]);
        return $query->row(); // Assuming you expect only one result
    }
}
