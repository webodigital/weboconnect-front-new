<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->library('session'); // Load session library
        $this->load->helper('form'); // Load form helper
        
        if (!$this->session->userdata('user_id')) {
            redirect('login');
        }
    }

    public function index() {
        $data['title'] = 'Dashboard';
        $this->load->view('frontend/common/header', $data);
        $this->load->view('backend/dashboard', $data);
        $this->load->view('frontend/common/footer', $data);
    }
}
?>
