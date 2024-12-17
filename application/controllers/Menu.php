<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('MenuModel');
        $this->load->library('form_validation');
    }

    // Index function
    public function index()
    {
        $data['title'] = 'Sponsor';
        $this->load->view('frontend/common/header', $data);
        $this->load->view('backend/menu/index', $data);
        $this->load->view('frontend/common/footer', $data);
    }

    // Fetch all menus
    public function fetch()
    {
        $menus = $this->MenuModel->get_menus();
        echo json_encode($menus);
    }

    // Add a new menu item
    public function add()
    {
        $this->form_validation->set_rules('name', 'Menu Name', 'required');
        $this->form_validation->set_rules('url', 'Menu URL', 'required');
        $this->form_validation->set_rules('serialno', 'Serial No', 'required|integer');

        if ($this->form_validation->run() == FALSE) {
            // echo json_encode(array('status' => 'error', 'message' => validation_errors()));
            $response = array(
                'status' => 'error',
                'message' => validation_errors()
            );
        } else {
            $data = array(
                'name' => $this->input->post('name'),
                'url' => $this->input->post('url'),
                'serialno' => $this->input->post('serialno')
            );
            $this->MenuModel->add_menu($data);
            // echo json_encode(array('status' => 'success', 'message' => 'Menu added successfully.'));
            $response = array(
                'status' => 'success',
                'message' => 'Menu added successfully.'
            );
        }
        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($response));
    }

    // Delete a menu item
    public function delete($id)
    {
        $this->MenuModel->delete_menu($id);
        // echo json_encode(array('status' => 'success', 'message' => 'Menu deleted successfully.'));
        $response = array(
            'status' => 'success',
            'message' => 'Menu deleted successfully.'
        );
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }

    // Get single a menu item
    public function get($id)
    {
        $menu = $this->MenuModel->get_menu_by_id($id);
        if ($menu) {
            // Return the menu data as JSON or any other format
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($menu));
        } else {
            show_404(); // Example: Return a 404 error
        }
    }

    // Update a menu item via AJAX
    public function update($id)
    {
        $this->form_validation->set_rules('name', 'Menu Name', 'required');
        $this->form_validation->set_rules('url', 'Menu URL', 'required');
        $this->form_validation->set_rules('serialno', 'Serial No', 'required|integer');

        if ($this->form_validation->run() == FALSE) {
            // echo json_encode(array('status' => 'error', 'message' => validation_errors()));
            $response = array(
                'status' => 'error',
                'message' => validation_errors()
            );
        } else {
            $data = array(
                'name' => $this->input->post('name'),
                'url' => $this->input->post('url'),
                'serialno' => $this->input->post('serialno'),
            );

            $updated = $this->MenuModel->update_menu($id, $data);

            if ($updated) {
                // Fetch updated menu item data
                $updated_menu = $this->MenuModel->get_menu_by_id($id);

                // Prepare JSON response
                $response = array(
                    'status' => 'success',
                    'message' => 'Menu item updated successfully.',
                    'menu' => $updated_menu // Send updated menu data
                );
            } else {
                // If update fails
                $response = array(
                    'status' => 'error',
                    'message' => 'Failed to update menu item.'
                );
            }

            // Send JSON response
            // echo json_encode($response);
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($response));
        }
    }
}
