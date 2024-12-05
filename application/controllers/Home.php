<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$this->load->view('front/home');
	}
	public function about()
	{
		$this->load->view('front/about');
	}
	public function contact_us()
	{
		$this->load->view('front/contact');
	}
	public function case_study()
	{
		$this->load->view('front/case_study');
	}
	public function case_study_details()
	{
		$this->load->view('front/case_study_details');
	}
	public function blogs()
	{
		$this->load->view('front/blogs');
	}
	public function blog_details()
	{
		$this->load->view('front/blog_details');
	}
	public function saas_development()
	{
		$this->load->view('front/saas_development');
	}
	public function mobile_app_development()
	{
		$this->load->view('front/mobile_app_development');
	}
	public function maintenance_and_support()
	{
		$this->load->view('front/maintenance_support');
	}
	public function hire_dedicated_resources()
	{
		$this->load->view('front/hire_dedicated_resources');
	}
	public function testimonials()
	{
		$this->load->view('front/testimonials');
	}
	public function javascript_framework()
	{
		$this->load->view('front/javascript_framework');
	}
	public function python_framework()
	{
		$this->load->view('front/python_framework');
	}
	public function php_framework()
	{
		$this->load->view('front/php_framework');
	}
	public function mobile_application_framework()
	{
		$this->load->view('front/mobile_application_framework');
	}
	public function our_team()
	{
		$this->load->view('front/our_team');
	}
	public function blockchain_development()
	{
		$this->load->view('front/blockchain_development');
	}
	public function artificial_intelligence()
	{
		$this->load->view('front/artificial_intelligence');
	}
	public function iot_development()
	{
		$this->load->view('front/iot_development');
	}
}

