<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ThemeModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function get_color_by_name($name) {
        $query = $this->db->get_where('theme_colors', ['name' => $name]);
        return $query->row();
    }
    
    public function get_all_colors() {
        return $this->db->get('theme_colors')->result_array();
    }

    public function save_color($name, $color) {
        $data = [
            'name' => $name,
            'color' => $color
        ];
        return $this->db->insert('theme_colors', $data);
    }

    public function update_color($name, $color) {
        $this->db->set('color', $color);
        $this->db->where('name', $name);
        return $this->db->update('theme_colors');
    }

    public function get_color($name) {
        $query = $this->db->get_where('theme_colors', ['name' => $name]);
        return $query->row_array();
    }

    public function get_header_background_color() {
        $query = $this->db->get_where('theme_colors', ['name' => 'header-background']);
        return $query->row_array();
    }

    public function get_header_text_color() {
        $query = $this->db->get_where('theme_colors', ['name' => 'header-text']);
        return $query->row_array();
    }

    public function get_footer_background_color() {
        $query = $this->db->get_where('theme_colors', ['name' => 'footer-background']);
        return $query->row_array();
    }

    public function get_footer_text_color() {
        $query = $this->db->get_where('theme_colors', ['name' => 'footer-text']);
        return $query->row_array();
    }
}
