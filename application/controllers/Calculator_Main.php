<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calculator extends CI_Controller {

    public function calculate_budget() {
        // Load input data from POST request
        $experience_levels = $this->input->post('experience_levels'); // Array of experience levels
        $resources = $this->input->post('resources'); // Array of resources per level
        $contract_period = $this->input->post('contract_period'); // Contract period in months
        $hours_per_month = $this->input->post('hours_per_month'); // Full-time or part-time hours
        $additional_costs = $this->input->post('additional_costs'); // Additional costs

        // Hourly rates for experience levels
        $hourly_rates = [
            'Junior' => 10,
            'Mid-Level' => 15,
            'Senior' => 25
        ];

        // Base budget calculation
        $base_budget = 0;
        foreach ($experience_levels as $index => $level) {
            if (isset($hourly_rates[$level])) {
                $base_budget += $hourly_rates[$level] * $hours_per_month * $resources[$index];
            }
        }
        $base_budget += $additional_costs;

        // Calculate discounts
        $volume_discount = $this->get_volume_discount(array_sum($resources), $contract_period);
        $contract_period_discount = $this->get_contract_period_discount($contract_period);

        // Total discount percentage
        $total_discount = $volume_discount + $contract_period_discount;

        // Final adjusted budget
        $final_budget = $base_budget * (1 - $total_discount / 100);

        // Calculate freebies
        $freebies = $this->calculate_freebies(array_sum($resources), $contract_period);

        // Return calculated values
        $response = [
            'base_budget' => $base_budget,
            'total_discount' => $total_discount,
            'final_budget' => $final_budget,
            'freebies' => $freebies
        ];

        echo json_encode($response);
    }

    private function get_volume_discount($total_resources, $contract_period) {
        // 20% discount for more than 3 resources and 6+ months contract
        if ($total_resources > 3 && $contract_period >= 6) {
            return 20;
        } elseif ($total_resources > 10) {
            return 15;
        } elseif ($total_resources > 5) {
            return 10;
        } elseif ($total_resources > 1) {
            return 5;
        } else {
            return 0;
        }
    }

    private function get_contract_period_discount($contract_period) {
        if ($contract_period >= 12) {
            return 15;
        } elseif ($contract_period >= 6) {
            return 10;
        } elseif ($contract_period >= 3) {
            return 5;
        } else {
            return 0;
        }
    }

    private function calculate_freebies($total_resources, $contract_period) {
        $freebies = [];

        // Default: 1 Project Coordinator free
        $freebies[] = 'Project Coordinator';

        // Free Project Manager if more than 2 resources
        if ($total_resources > 2) {
            $freebies[] = 'Project Manager';
        }

        // Freebies based on Backend and Frontend resources
        if ($total_resources >= 2) {
            $freebies[] = 'Frontend Developer';
            $freebies[] = $contract_period >= 6 ? 'Tester or UI Designer' : 'Tester';
        }

        // Every 3 resources with min 6-month contract: add one PM free
        if ($contract_period >= 6 && $total_resources % 3 === 0) {
            $freebies[] = 'Project Manager';
        }

        return $freebies;
    }

    public function send_team_details()
    {
        // Load email library and helpers
        //$this->load->library('email');
        //$this->load->helper('url');

        // Retrieve POST data
        $email = $this->input->post('user_email');
        //print_r($this->input->post('email'));
        //$form_data = json_decode($this->input->post('form_data'), true);
        $form_data = $this->input->post('form_data');

        // Validate inputs
        if (empty($email) || empty($form_data)) {
            echo json_encode(['s' => 'f', 'm' => 'Invalid data provided.']);
            return;
        }

        // Prepare email content
        $emailContent = "<h1>Team Details Submission</h1>";
        $emailContent .= "<p><strong>Email:</strong> {$email}</p>";
        $emailContent .= "<table border='1' cellspacing='0' cellpadding='5'>";
        $emailContent .= "<tr>
                            <th>Skills</th>
                            <th>Resources</th>
                            <th>Final Budget</th>
                            <th>Contract Period</th>
                            <th>Freebies</th>
                          </tr>";

        foreach ($form_data as $detail) {
            $skills = htmlspecialchars($detail['skills']);
            $resources = htmlspecialchars($detail['resources']);
            $finalBudget = htmlspecialchars($detail['final_budget']);
            $currency = htmlspecialchars($detail['currency']);
            $contract_period = htmlspecialchars($detail['contract_period']);
            $freebies = !empty($detail['freebies']) ? implode(', ', array_map('htmlspecialchars', $detail['freebies'])) : 'None';

            $emailContent .= "<tr>
                                <td>{$skills}</td>
                                <td>{$resources}</td>
                                <td>{$currency}{$finalBudget}</td>
                                <td>{$contract_period} Month</td>
                                <td>{$freebies}</td>
                              </tr>";
        }

        $emailContent .= "</table>";

        // Email configuration
        /*$config = [
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.yourdomain.com', // Replace with your SMTP host
            'smtp_port' => 587,                  // Replace with your SMTP port
            'smtp_user' => 'your-email@domain.com', // Replace with your email address
            'smtp_pass' => 'your-email-password',   // Replace with your email password
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'wordwrap'  => true
        ];

        $this->email->initialize($config);
        $this->email->set_newline("\r\n");

        // Set email details
        $this->email->from('your-email@domain.com', 'Your Name');
        $this->email->to($email); // Sending email to the provided email
        $this->email->subject('Team Details Submission');
        $this->email->message($emailContent);*/

        //if (mail('info@weboconnect.com', 'Application for Job', $body, $headers)){

        // Send email and handle response
        //if ($this->email->send()) {
        $headers = "From: Weboconnect <info@weboconnect.com>\r\n";
        //$headers = "From: info@weboconnect.com" . "\r\n";
        $headers .= "Reply-To: info@weboconnect.com" . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        //print_r($emailContent);

        if (mail($email, 'Quote Calculator Team Details Submission', $emailContent, $headers)) {
            //echo json_encode(['s' => 's', 'm' => 'Email sent successfully.']);
            $result = ['s' => 's', 'm' => 'Email sent successfully.'];
        } else {
            //echo json_encode(['s' => 's', 'm' => 'Failed to send email.']);
            $result = ['s' => 'f', 'm' => 'Something went wrong. Please try again later.'];
        }
        echo json_encode($result);
    }
}
