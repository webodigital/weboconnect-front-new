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
}
