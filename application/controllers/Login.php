<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->helper('auth_helper'); 
        $this->load->library(array('session', 'form_validation'));
        $this->load->model('User');
        if ($this->session->userdata('user_id')) {
            redirect('dashboard');
        }
    }

    private function load_view($view, $data = [])
    {
        $this->load->view('frontend/common/header', $data);
        $this->load->view($view, $data);
        $this->load->view('frontend/common/footer', $data);
    }

    public function index()
    {
        // $this->load->view('auth/login');
        $data['title'] = 'Login';
        $this->load_view('auth/login', $data);
    }

    public function authenticate()
    {
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login');
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $user = $this->User->get_user($email);

            if ($user && password_verify($password, $user['password'])) {
                $this->session->set_userdata('user_id', $user['id']);
                if($user['role'] == 'admin'){
                    redirect('dashboard');
                }else{
                    redirect('/');
                }
            } else {
                $this->session->set_flashdata('error', 'Invalid email or password');
                redirect('login');
            }
        }
    }

    // public function authenticate() {
    //     $this->form_validation->set_rules('email', 'email', 'required');
    //     $this->form_validation->set_rules('password', 'Password', 'required');

    //     if ($this->form_validation->run() == FALSE) {
    //         $this->load->view('login');
    //     } else {
    //         $email = $this->input->post('email');
    //         $password = $this->input->post('password');

    //         $user = $this->User->get_user($email);

    //         if ($user && password_verify($password, $user['password'])) {
    //             $this->session->set_userdata('user_id', $user['id']);
    //             redirect('dashboard');
    //         } else {
    //             $this->session->set_flashdata('error', 'Invalid email or password');
    //             redirect('login');
    //         }
    //     }
    // }

    public function logout1()
    {
        try {
            //code...
            if ($this->input->is_ajax_request()) {
                $this->session->unset_userdata('user_id');
                $this->session->sess_destroy();
                echo json_encode(['status' => 'success', 'message' => 'You have been logged out']);
            } else {
                $this->session->unset_userdata('user_id');
                $this->session->sess_destroy();
                $this->session->set_flashdata('success', 'You have been logged out');
                redirect('login');
            }
        } catch (\Throwable $th) {
            print_r($th);
        }
    }

    public function logout()
    {
        try {
            // Clear the session data
            $this->session->unset_userdata('user_id');
            $this->session->sess_destroy();
            if ($this->input->is_ajax_request()) {
                // Respond with JSON for AJAX calls
                echo json_encode(['status' => 'success', 'message' => 'You have been logged out']);
            } else {
                // Handle non-AJAX requests with redirection
                $this->session->set_flashdata('success', 'You have been logged out');
                redirect('login', 'refresh'); // Force a fresh GET request
            }
        } catch (Throwable $th) {
            if ($this->input->is_ajax_request()) {
                echo json_encode(['status' => 'error', 'message' => $th->getMessage()]);
            } else {
                show_error($th->getMessage());
            }
        }
    }


}
