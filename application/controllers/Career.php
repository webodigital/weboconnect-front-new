<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Career extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('auth_helper');
        $this->load->model('Career_Model'); // Load the Contact model
        $this->load->model('User');
        $this->load->library('pagination');
        $this->load->library('form_validation');
        
        $this->ensure_logged_in();
        $this->ensure_admin();
    }
    private function load_view($view, $data = [])
    {
        $this->load->view('frontend/common/header', $data);
        $this->load->view($view, $data);
        $this->load->view('frontend/common/footer', $data);
    }
    private function ensure_logged_in()
    {
        if (!$this->session->userdata('user_id')) {
            redirect('login');
            exit;
        }
    }
    private function ensure_admin()
    {
        $user = $this->User->get_user_by_id($this->session->userdata('user_id'));
        if ($user && $user->role != 'admin') {
            redirect('/');
            exit;
        }
        return $user;
    }
    private function ensure_user()
    {
        $user = $this->User->get_user_by_id($this->session->userdata('user_id'));
        if ($user && $user->role != 'user') {
            $response = ['status' => 'error', 'message' => 'Please Login with user'];
            echo json_encode($response);
            exit;
        }
        return $user;
    }

    
    public function adminCareers($page = 0)
    {
        $this->load->library('pagination');

        $config = array();
        $config['base_url'] = site_url('admin-careers');
        $config['total_rows'] = $this->Career_Model->getCareersCount();
        // $config['per_page'] = 20;
        $config['per_page'] = 10;
        $config['uri_segment'] = 2;

        // Bootstrap 4 Pagination Configuration
        $config['full_tag_open'] = '<nav><ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav>';
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['first_tag_close'] = '</span></li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['prev_tag_close'] = '</span></li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['next_tag_close'] = '</span></li>';
        $config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['last_tag_close'] = '</span></li>';
        $config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close'] = '</span></li>';
        $config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close'] = '</span></li>';

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        //echo "string".$page;
        $data['careers'] = $this->Career_Model->getAdminCareers($config['per_page'], $page);

        //print_r($data);
        $data['pagination'] = $this->pagination->create_links();

        $this->load_view('backend/career/index', $data);
    }

    public function viewCareers($id)
    {
        $data['career'] = $this->Career_Model->getCareersById($id);
        $this->load_view('backend/career/view', $data);
    }

   
}
