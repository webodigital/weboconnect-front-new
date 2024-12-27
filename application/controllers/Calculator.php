<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calculator extends CI_Controller {

    public function calculate_budget() {
        // Load input data from POST request
        $skills = $this->input->post('skills'); // Required skills
        $technology = $this->input->post('technology'); // Technology
        $experience_levels = $this->input->post('experience_levels'); // Array of experience levels
        $resources = $this->input->post('resources'); // Array of resources per level
        $contract_period = $this->input->post('contract_period'); // Contract period in months
        $time_zone = $this->input->post('time_zone'); // Selected time zone
        $engagement_model = $this->input->post('engagement_model'); // Part-time or full-time
        $premises = $this->input->post('select_premises'); // Work location
        $currency = $this->input->post('currency'); // Currency
        $additional_costs = $this->input->post('additional_costs'); // Additional costs

        // Define hourly rates based on experience levels
        $hourly_rates = [
            'Junior' => 10,
            'Mid Level' => 15,
            'Senior' => 25
        ];

        // Define hours per month based on engagement model
        $hours_per_month = $engagement_model === 'full_time' ? 160 : 80;

        // Base budget calculation
        $base_budget = 0;

        /*foreach ($experience_levels as $index => $level) {
            echo "string";
            if (isset($hourly_rates[$level])) {
                echo "string2";
                $base_budget += $hourly_rates[$level] * $hours_per_month * $resources[$index];
            }
        }*/
        if (isset($hourly_rates[$experience_levels])) {
            $base_budget += $hourly_rates[$experience_levels] * $hours_per_month * $resources;
        }

        $base_budget += $additional_costs;

        // Calculate discounts
        //$volume_discount = $this->get_volume_discount(array_sum($resources), $contract_period);
        $volume_discount = $this->get_volume_discount($resources, $contract_period);
        $contract_period_discount = $this->get_contract_period_discount($contract_period);

        // Total discount percentage
        $total_discount = $volume_discount + $contract_period_discount;

        // Final adjusted budget
        $final_budget = $base_budget * (1 - $total_discount / 100);

        // Calculate freebies
        //$freebies = $this->calculate_freebies(array_sum($resources), $contract_period);
        $freebies = $this->calculate_freebies($resources, $contract_period);

        // Return calculated values
        $response = [
            'base_budget' => $base_budget,
            'total_discount' => $total_discount,
            'final_budget' => $final_budget,
            'freebies' => $freebies,
            'currency' => $currency, // Include currency in the response
            'skills' => $skills,
            'technology' => $technology,
            'experience_levels' => $experience_levels,
            'resources' => $resources,
            'contract_period' => $contract_period,
            'time_zone' => $time_zone,
            'engagement_model' => $engagement_model,
            'premises' => $premises,
            'currency' => $currency,
            'additional_costs' => $additional_costs
        ];

        echo json_encode($response);
    }

    private function get_volume_discount($total_resources, $contract_period) {
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

}
