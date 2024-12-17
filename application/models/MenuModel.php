<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MenuModel extends CI_Model {

    // Fetch all menus
    public function get_menus() {
        // return $this->db->get('menus')->result();
        $this->db->order_by('serialno', 'ASC'); // Replace 'id' with the column name you want to sort by
        return $this->db->get('menus')->result();
    }

    // Add a new menu item
    public function add_menu($data) {
        $this->db->insert('menus', $data);
    }

    // Delete a menu item by ID
    public function delete_menu($id) {
        $this->db->where('id', $id);
        $this->db->delete('menus');
    }

    // Fetch a menu item by ID
    public function get_menu_by_id($id) {
        $query = $this->db->get_where('menus', array('id' => $id));
        return $query->row(); 
    }
    
    // Update a menu item by ID
    public function update_menu($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('menus', $data);
    }
}
?>
