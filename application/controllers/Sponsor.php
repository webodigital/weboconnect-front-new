<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sponsor extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('SponsorModel');
    }

    public function index() {
        $data['title'] = 'Sponsor';
        $this->load->view('frontend/common/header', $data);
        $this->load->view('backend/sponsors/index', $data);
        $this->load->view('frontend/common/footer', $data);
    }

    public function getSponsors() {
        try {
            $sponsors = $this->SponsorModel->getAllSponsors();
            echo json_encode($sponsors);
        } catch (\Throwable $th) {
            print_r($th);
        }
    }

    public function addSponsor() {
        $image_url = $this->input->post('image_url');
        $redirection_url = $this->input->post('redirection_url');
        $name = $this->input->post('name');

        $data = [
            'image_url' => $image_url,
            'redirection_url' => $redirection_url,
            'name' => $name,
        ];

        $result = $this->SponsorModel->insertSponsor($data);

        if ($result) {
            echo json_encode(['status' => 'success', 'message' => 'Sponsor added successfully.']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to add sponsor.']);
        }
    }

    public function updateSponsor() {
        $id = $this->input->post('id');
        $image_url = $this->input->post('image_url');
        $redirection_url = $this->input->post('redirection_url');
        $name = $this->input->post('name');

        $data = [
            'image_url' => $image_url,
            'redirection_url' => $redirection_url,
            'name' => $name,
        ];

        $result = $this->SponsorModel->updateSponsor($id, $data);

        if ($result) {
            echo json_encode(['status' => 'success', 'message' => 'Sponsor updated successfully.']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to update sponsor.']);
        }
    }

    public function deleteSponsor($id) {
        $result = $this->SponsorModel->deleteSponsor($id);

        if ($result) {
            echo json_encode(['status' => 'success', 'message' => 'Sponsor deleted successfully.']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to delete sponsor.']);
        }
    }
    public function getSponsor($id) {
        // Get the sponsor details from the model based on the ID
        $sponsor = $this->SponsorModel->getSponsorById($id);

        // Check if the sponsor exists
        if ($sponsor) {
            // Return the sponsor details as JSON response
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($sponsor));
        } else {
            // Sponsor not found, return a 404 response
            $this->output
                ->set_status_header(404)
                ->set_content_type('application/json')
                ->set_output(json_encode(['error' => 'Sponsor not found']));
        }
    }
}
