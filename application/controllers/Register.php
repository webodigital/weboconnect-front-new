// <?php
// defined('BASEPATH') or exit('No direct script access allowed');

// class Register extends CI_Controller
// {

//     public function __construct()
//     {
//         parent::__construct();
//         $this->load->helper(array('form', 'url'));
//         $this->load->library(array('session', 'form_validation'));
//         $this->load->model('User');
//         if ($this->session->userdata('user_id')) {
//             redirect('dashboard');
//         }
//     }
//     private function load_view($view, $data = [])
//     {
//         $this->load->view('frontend/common/header', $data);
//         $this->load->view($view, $data);
//         $this->load->view('frontend/common/footer', $data);
//     }
//     public function index()
//     {

//         $data['title'] = 'Register';
//         $this->load_view('auth/register', $data);
//         // $this->load->view('auth/register');
//     }

//     public function store()
//     {
//         $this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');
//         $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
//         $this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'required|matches[password]');

//         if ($this->form_validation->run() == FALSE) {
//             $data['title'] = 'Register';
//             $data['validation_errors'] = validation_errors(); // Get the validation errors
//             // $this->load->view('auth/register', $data);
//             $this->load_view('auth/register', $data);
//             // $this->load->view('auth/register');
//         } else {
//             $data = array(
//                 'email' => $this->input->post('email'),
//                 'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
//                 'created_at' => date('Y-m-d H:i:s')
//             );

//             $this->User->insert_user($data);
//             $this->session->set_flashdata('success', 'Registration successful! You can now login.');
//             redirect('login');
//         }
//     }
// }

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
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

        $data['title'] = 'Register';
        $this->load_view('auth/register', $data);
        // $this->load->view('auth/register');
    }

    public function store()
    {
        try {
            // Set form validation rules
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');

            if ($this->form_validation->run() == FALSE) {
                // Validation failed, return errors
                $response = [
                    'status' => 'error',
                    'message' => validation_errors(),
                ];
                echo json_encode($response);
            } else {
                // Generate a random password
                $password = bin2hex(random_bytes(4)); // Generate a 8-character password

                // Hash the generated password
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                // Prepare the user data
                $data = array(
                    'name' => $this->input->post('name'),
                    'email' => $this->input->post('email'),
                    'password' => $hashed_password,
                    'created_at' => date('Y-m-d H:i:s')
                );

                // Insert the user into the database
                $this->User->insert_user($data);

                // Send the generated password to the user via email
                $this->load->library('email');

                // Email configuration
                $config = array(
                    'protocol' => 'smtp',
                    'smtp_host' => 'smtp.mailtrap.io',
                    'smtp_user' => '4c5976de34a475',
                    'smtp_pass' => 'bb4bd1985fcd31',
                    'smtp_port' => 2525,
                    'crlf' => "\r\n",
                    'newline' => "\r\n",
                    'mailtype' => 'text',
                    'charset' => 'utf-8',
                    'wordwrap' => TRUE
                );

                // Initialize the email library with the configuration
                $this->email->initialize($config);
                $this->email->from('deepanshpandey44@gmail.com', 'Your Name');
                $this->email->to($this->input->post('email'));
                $this->email->subject('Your Account Registration');
                $this->email->message("Hello " . $this->input->post('name') . ",\n\nYour account has been created successfully. Here is your password: " . $password . "\n\nPlease change your password after logging in.\n\nRegards,\nYour Company");

                $this->session->set_flashdata('success', 'Registration successful! The password has been sent to your email.');

                if ($this->email->send()) {
                    $response = [
                        'status' => 'success',
                        'message' => 'Registration successful! The password has been sent to your email.',
                    ];
                } else {
                    // Show the email debug information
                    $response = [
                        'status' => 'error',
                        'message' => 'Registration successful, but failed to send email.',
                        'debug' => $this->email->print_debugger(),
                    ];
                }

                echo json_encode($response);
            }
        } catch (\Throwable $th) {
            print_r($th);
        }
    }
}