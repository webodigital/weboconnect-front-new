<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data = [];
		$this->load->model('BlogModel');
		$data['blogs'] = $this->BlogModel->getHomeBlogs();
		$this->load->view('front/home', $data);
	}
	public function about()
	{
		$this->load->view('front/about');
	}
	public function contact_us()
	{
		$this->load->view('front/contact');
	}
	public function assistive_technology_solutions()
	{
		$this->load->view('front/assistive_technology_solutions');
	}
	public function case_study()
	{
		$this->load->library('pagination');
        $this->load->model('CasestudiesModel');
        $config = array();
        $config['base_url'] = site_url('case_study');
        $config['total_rows'] = $this->CasestudiesModel->getCasestudiesCount();
        // $config['per_page'] = 20;
        $config['per_page'] = 0;
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

        $data['casestudies'] = $this->CasestudiesModel->getCasestudies($config['per_page'], $page);
        $data['pagination'] = $this->pagination->create_links();

		$this->load->view('front/case_study', $data);
	}
	public function case_study_details($id)
	{
		$this->load->model('CasestudiesModel');
        $casestudy = $this->CasestudiesModel->getCasestudiesBySlug($id);

        if (!$casestudy) {
            // Handle case where blog with given ID is not found
            show_404(); // Or redirect to an error page
            return;
        }
        $data['casestudy'] = $casestudy;

        /*[
            'how_does_it_work' => 'How Does It Work', 
            'project_objectives' => 'Project Objectives',  
            'challenges' => 'Challenges',  
            'solution_implementation' => 'Solution And Implementation',  
            'outcome' => 'Outcome',  
            'screens' => 'Screens', 
        ];*/
        
        $data['how_does_it_work'] = $this->CasestudiesModel->getCasestudiesDetailsByIdWithSType($casestudy->id, 'how_does_it_work');
        $data['project_objectives'] = $this->CasestudiesModel->getCasestudiesDetailsByIdWithSType($casestudy->id, 'project_objectives');
        $data['challenges'] = $this->CasestudiesModel->getCasestudiesDetailsByIdWithSType($casestudy->id, 'challenges');
        $data['solution_implementation'] = $this->CasestudiesModel->getCasestudiesDetailsByIdWithSType($casestudy->id, 'solution_implementation');
        $data['outcome'] = $this->CasestudiesModel->getCasestudiesDetailsByIdWithSType($casestudy->id, 'outcome');
        $data['screens'] = $this->CasestudiesModel->getCasestudiesDetailsByIdWithSType($casestudy->id, 'screens');
        $data['testimonials'] = $this->CasestudiesModel->getCasestudiesTestimonialsByCSId($casestudy->id);

        $data['keywords'] = $casestudy->title;
        $data['meta_title'] = $casestudy->title;
        $data['meta_description'] = $casestudy->title;
        $data['meta_og_img'] = base_url('assets/images/case_studies/uploads/thumbnails/' . $casestudy->front_logo);
        $data['meta_og_url'] = base_url('case-study-details/' . $casestudy->slug);

		$this->load->view('front/case_study_details', $data);
	}

    public function blogs($page = 0)
    {
        $this->load->library('pagination');
        $this->load->model('BlogModel');
        $this->load->model('BlogcategoryModel');

        // Get the category from the query string (default to 'all')
        $category = $this->input->get('category') ?? 'all';
        $category_slug = $category;
        if ($category !== 'all') {
            $category = $this->BlogModel->getBlogCategoryId($category);
        }

        $config = array();
        $config['base_url'] = site_url('blogs'); // Base URL for pagination
        $config['total_rows'] = $this->BlogModel->getFilteredBlogCount($category);
        $config['per_page'] = 9;
        $config['uri_segment'] = 2;
        $config['reuse_query_string'] = TRUE; // Retain query strings in pagination links

        // Pagination configuration (Bootstrap 4)
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
        $config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close'] = '</span></li>';
        $config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close'] = '</span></li>';

        $this->pagination->initialize($config);

        // Fetch blogs based on filter and pagination
        $data['blogs'] = $this->BlogModel->getFilteredBlogs($category, $config['per_page'], $page);
        $data['pagination'] = $this->pagination->create_links();

        // Pass available categories to the view
        /*$data['categories'] = [
            'emerging_tech_trends' => 'Emerging Tech & Trends',
            'solutions_best_practices' => 'Solutions & Best Practices',
            'cybersecurity' => 'Cybersecurity',
            'tech_specific_industries' => 'Tech for Specific Industries',
            'thought_leadership_innovation' => 'Thought Leadership & Innovation',
            'educational' => 'Educational',
            'hire_dedicated_resources' => 'Hire Dedicated Resources',
            'app_development' => 'App Development',
            'web_development' => 'Web Development',
            'language_based_apps' => 'Language-Based Apps'
        ];*/

        $categories = $this->BlogcategoryModel->getAllCategory();
        //print_r($categories);
        $data['categories'] = $categories;

        $data['selected_category'] = $category_slug; // To retain the selected category in the dropdown or buttons

        $this->load->view('front/blogs', $data);
    }

	public function blogs_main()
	{
		$this->load->library('pagination');
        $this->load->model('BlogModel');
        $config = array();
        $config['base_url'] = site_url('blogs');
        $config['total_rows'] = $this->BlogModel->getBlogCount();
        // $config['per_page'] = 20;
        $config['per_page'] = 9;
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

        $data['blogs'] = $this->BlogModel->getBlogs($config['per_page'], $page);
        $data['pagination'] = $this->pagination->create_links();

        $data['categories'] = [
            'emerging_tech_trends' => 'Emerging Tech & Trends',
            'solutions_best_practices' => 'Solutions & Best Practices',
            'cybersecurity' => 'Cybersecurity',
            'tech_specific_industries' => 'Tech for Specific Industries',
            'thought_leadership_innovation' => 'Thought Leadership & Innovation',
            'educational' => 'Educational',
            'hire_dedicated_resources' => 'Hire Dedicated Resources',
            'app_development' => 'App Development',
            'web_development' => 'Web Development',
            'language_based_apps' => 'Language Based Apps'
        ];

		$this->load->view('front/blogs', $data);
	}

    function buildTocHierarchy($headings) {
        $toc = '';
        $prevLevel = 0;

        foreach ($headings as $heading) {
            //echo $heading;
            $level = $heading['level'];
            $text = htmlspecialchars($heading['text']);
            $id = $heading['id'];

            if ($level > $prevLevel) {
                $toc .= '<ul>';
            } elseif ($level < $prevLevel) {
                $toc .= str_repeat('</ul></li>', $prevLevel - $level);
            } else {
                $toc .= '</li>';
            }

            $toc .= '<li><a href="#' . $id . '">' . $text . '</a>';
            $prevLevel = $level;
        }

        // Close remaining tags
        $toc .= str_repeat('</li></ul>', $prevLevel);

        return $toc;
    }

    function get_all_headings( $content ) {

        // Fix encoding issues
        libxml_use_internal_errors(true);  // Suppress warnings
        $dom = new DOMDocument();
        $dom->loadHTML(mb_convert_encoding($content, 'HTML-ENTITIES', 'UTF-8'));
        libxml_clear_errors();

        //print_r($content);

        // Array to store headings
        $headings = [];
        $idCounter = 0;

        //for ($i = 1; $i <= 6; $i++) {
        for ($i = 1; $i <= 2; $i++) {
            $tags = $dom->getElementsByTagName("h$i");
            foreach ($tags as $tag) {
                //$headings[] = trim($tag->textContent);  // Get and trim heading text

                // Generate unique ID and assign to heading
                $id = "section" . $idCounter++;
                //$id = "section";
                $tag->setAttribute('id', $id);

                // Store heading details for TOC
                $headings[] = [
                    'level' => $i,
                    'text' => trim($tag->textContent),
                    'id' => $id
                ];
            }
        }
        // Convert the updated DOM back to HTML
        //$updated_content = $dom->saveHTML();

        $toc = $this->buildTocHierarchy($headings);

        return $toc;

    }

    public function get_all_headings_content($content)
    {
        // Sample content from the database (replace with actual content)
        //$content = $blog->content;

        // Fix encoding issues
        libxml_use_internal_errors(true);
        $dom = new DOMDocument();
        $dom->loadHTML(mb_convert_encoding($content, 'HTML-ENTITIES', 'UTF-8'));
        libxml_clear_errors();

        // Array to store headings
        $headings = [];
        $idCounter = 0;

        //for ($i = 1; $i <= 6; $i++) {
        for ($i = 1; $i <= 2; $i++) {    
            $tags = $dom->getElementsByTagName("h$i");
            foreach ($tags as $tag) {
                // Generate unique ID and assign to heading
                $id = "section" . $idCounter++;
                $tag->setAttribute('id', $id);

                // Store heading details for TOC
                $headings[] = [
                    'level' => $i,
                    'text' => trim($tag->textContent),
                    'id' => $id
                ];
            }
        }

        // Convert the updated DOM back to HTML
        $updated_content = $dom->saveHTML();

        //print_r($updated_content);

        return $updated_content;
    }

	public function blog_details($id)
	{
        $this->load->model('BlogModel');
		// Fetch blog details using $id
        // $blog = $this->BlogModel->getBlogById($id);
        $blog = $this->BlogModel->getBlogBySlug($id);

        if (!$blog) {
            // Handle case where blog with given ID is not found
            show_404(); // Or redirect to an error page
            return;
        }
        $comments = $this->BlogModel->getCommentsByBlogId($id);
        $recentblogs = $this->BlogModel->getBlogs(3, 1, $blog->id);

        // Pass blog data to the view
        $data['title'] = 'Single Blog';
        $data['blog'] = $blog;
        $data['toc'] = $this->get_all_headings($blog->content);
        $data['content'] = $this->get_all_headings_content($blog->content);
        $data['comments'] = $comments;
        $data['recentblogs'] = $recentblogs;
        $data['meta_title'] = $blog->meta_title ?? 'Single Blog Page';
        $data['meta_description'] = $blog->meta_description ?? 'Single Blog Page';
        $data['meta_og_img'] = $blog->image ?? '';
        $data['meta_og_url'] = $blog->slug ?? '';

		$data['bottom_blogs'] = $this->BlogModel->getHomeBlogs();

        $data['keywords'] = $blog->title;
        $data['meta_title'] = $blog->meta_title;
        $data['meta_description'] = $blog->meta_description;
        $data['meta_og_img'] = base_url('assets/images/blogs/uploads/' . $blog->image);
        $data['meta_og_url'] = base_url('blog/' . $blog->slug);

		$this->load->view('front/blog_details', $data);
	}
	public function saas_development()
	{
		$this->load->view('front/saas_development');
	}
	public function mobile_app_development()
	{
		$this->load->view('front/mobile_app_development');
	}
	public function web_development()
	{
		$this->load->view('front/web_development');
	}
	public function maintenance_and_support()
	{
		$this->load->view('front/maintenance_support');
	}
	public function hire_dedicated_resources()
	{
        /*[
            'Frontend Development' => ['HTML', 'CSS', 'JavaScript', 'React', 'Angular'],
            'Backend Development' => ['PHP', 'Node.js', 'Python', 'Ruby', 'Java'],
            'Mobile Development' => ['Swift', 'Kotlin', 'React Native', 'Flutter'],
            'Database Management' => ['MySQL', 'PostgreSQL', 'MongoDB', 'Oracle'],
            'Project Management' => ['Jira', 'Trello', 'Asana', 'Microsoft Project', 'Monday.com'],
            'Testing' => ['Selenium', 'JMeter', 'Postman', 'TestRail', 'Cypress'],
            'Design' => ['Figma', 'Adobe XD', 'Sketch', 'Photoshop', 'Illustrator'],
        ]*/
        $data['skills'] = [
            'Frontend Development' => ['HTML', 'CSS', 'JavaScript', 'React', 'Angular'],
            'Backend Development' => ['PHP', 'Node.js', 'Python', 'Ruby', 'Java'],
            'Mobile Development' => ['Swift', 'Kotlin', 'React Native', 'Flutter'],
            'Database Management' => ['MySQL', 'PostgreSQL', 'MongoDB'],
            'Project Management' => ['Project Manager', 'Project Coordinator'],
            'Design' => ['UI/UX Design', 'Graphic Design'],
            'Testing' => ['Manual', 'Automation'],
        ];
		$this->load->view('front/hire_dedicated_resources', $data);
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
	public function careers()
	{
		$this->load->view('front/careers');
	}
	public function privacy_policy()
	{
		$this->load->view('front/privacy_policy');
	}
	public function refund_policy()
	{
		$this->load->view('front/refund_policy');
	}
	public function portfolio()
	{
		$this->load->view('front/portfolio');
	}

	public function outsource_projects()
	{
		$this->load->view('front/outsource_projects');
	}
	public function white_label_partnership()
	{
		$this->load->view('front/white_label_partnership');
	}
	public function product_partnership()
	{
		$this->load->view('front/product_partnership');
	}


	/////////////// Submit Form Requests ///////////////
	public function contactUser(){
		
		header("Content-type: application/json; charset=utf-8");
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $message = $this->input->post('message');
        
        $error = [];

        if (empty($name))
            $error['name'] = 'Please enter full name!';
        if (empty($email))
            $error['email'] = 'Please enter email!';
        if (empty($phone))
            $error['phone'] = 'Please enter phone no!';
        if (empty($message))
            $error['message'] = 'Please enter message!';

        if (!empty($error)) {
            $result = ['s' => 'f', 'error' => $error];
        } else {
            $data['name'] = $name;
            $data['email'] = $email;
            $data['phone'] = $phone;
            $data['description'] = $message;
            
            //$data = array('name'=>$contactName);
            $body = $this->load->view('front/emailer/contactus',$data,TRUE);
            $this->load->database();
            $this->load->model('Contact_Model');
            if ($this->Contact_Model->add('webo_enquiry_now',$data)) {
                $message = '';
                foreach ($data as $key => $val) {
                    $message .="<p><b>$key</b>:- $val</p>";
                }
                $subject = "Enquiry from ".$email;
				//info@weboconnect.com
                $this->send_mails('info@weboconnect.com', $subject, $message);
                
                $this->send_mails($email, 'Thanks for contacting us', $body);

                $result = ['s' => 's', 'm' => 'Thanks for contacting us!'];
            } else {
                $result = ['s' => 'f', 'm' => 'Something went wrong.Please try again later.'];
            }
        }
        echo json_encode($result);
	}
	
	public function getintouch() {
	    
        header("Content-type: application/json; charset=utf-8");
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $message = $this->input->post('message');
        
		$captcha = $this->captcha_verify();
		
        $error = [];

        if (empty($name))
            $error['name'] = 'Please enter full name!';
        if (empty($email))
            $error['email'] = 'Please enter email!';
        if (empty($phone))
            $error['phone'] = 'Please enter phone no!';
        if (empty($message))
            $error['message'] = 'Please enter message!';
		if (!$captcha)
            $error['captcha'] = 'Please check the captcha form.';
		
        if (!empty($error)) {
            $result = ['s' => 'f', 'error' => $error];
        } else {
            $data['name'] = $name;
            $data['email'] = $email;
            $data['phone'] = $phone;
            $data['description'] = $message;
            
            $body = $this->load->view('front/emailer/contactus',$data,TRUE);
            $this->load->database();
            $this->load->model('Contact_Model');
            if ($this->Contact_Model->add('webo_enquiry_now',$data)) {
              
                $message = '';
                foreach ($data as $key => $val) {
                    $message .="<p><b>$key</b>:- $val</p>";
                }
                $subject = "Enquiry from ".$email;
                $this->send_mails('info@weboconnect.com', $subject, $message);
                
                $this->send_mails($email, 'Thank you, will revert asap.', $body);
                
                $result = ['s' => 's', 'm' => 'Thank you, will revert asap.'];
            } else {
                $result = ['s' => 'f', 'm' => 'Something went wrong. Please try again.'];
            }
        }
        echo json_encode($result);
    }
	
	public function save_contactus() {
        header("Content-type: application/json; charset=utf-8");

        $purpose = $this->input->post('purpose');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $country = $this->input->post('country');
        $company = $this->input->post('company');
        $message = $this->input->post('message');

        $captcha = $this->captcha_verify();

        $error = [];
        if (empty($purpose))
            $error['purpose'] = 'Please enter purpose!';
        if (empty($name))
            $error['name'] = 'Please enter full name!';
        if (empty($email))
            $error['email'] = 'Please enter email!';
        if (empty($country))
            $error['country'] = 'Please enter country name!';
        if (empty($message))
            $error['message'] = 'Please enter message!';
        if (!$captcha)
            $error['captcha'] = 'Please check the captcha form.';

        if (!empty($error)) {
            $result = ['s' => 'f', 'error' => $error];
        } else {
            $data['purpose'] = $purpose;
            $data['name'] = $name;
            $data['email'] = $email;
            $data['phone'] = $phone;
            $data['country'] = $country;
            $data['company'] = $company;
            $data['message'] = $message;
            
            $body = $this->load->view('front/emailer/contactus',$data,TRUE);
			$this->load->database();
            $this->load->model('Contact_Model');
            if ($this->Contact_Model->add('webo_contact_us',$data)) {
                $message = '';
                foreach ($data as $key => $val) {
                    $message .="<p><b>$key</b>:- $val</p>";
                }
                $subject = "Enquiry from ".$email;
                $this->send_mails('info@weboconnect.com', $subject, $message);
                
                $this->send_mails($email, 'Thanks for contacting us', $body);

                $result = ['s' => 's', 'm' => 'Thanks for contacting us!'];
            } else {
                $result = ['s' => 'f', 'm' => 'Something went wrong. Please try again later.'];
            }
        }
        echo json_encode($result);
    }
	
	public function save_careers() {
		$this->load->helper('date');
        header("Content-type: application/json; charset=utf-8");

        $job_title = $this->input->post('job_title');
        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $message = $this->input->post('message');
		
		$captcha = $this->captcha_verify();

        $error = [];
        if (empty($job_title))
            $error['job'] = 'Please enter job title!';
        if (empty($first_name))
            $error['first_name'] = 'Please enter first name name!';
        if (empty($email))
            $error['email'] = 'Please enter email!';
        if (empty($phone))
            $error['phone'] = 'Please enter phone number!';
        //if (empty($message))
            //$error['message'] = 'Please enter message!';
		if (!$captcha)
            $error['captcha'] = 'Please check the captcha form.';
        
        $tmp_name         = $_FILES['myfile']['tmp_name']; // get the temporary file name of the file on the server 
        $file_name        = $_FILES['myfile']['name'];  // get the name of the file 
        $size             = $_FILES['myfile']['size'];  // get size of the file for size validation 
        $file_type        = $_FILES['myfile']['type'];  // get type of the file 
        $file_error       = $_FILES['myfile']['error']; // get the error (if any) 
      
        //validate form field for attaching the file 
        if($file_error > 0) 
        { 
            $error['myfile'] = 'Upload error or No files uploaded';
        } 
        
        if (!empty($error)) {
            $result = ['s' => 'f', 'error' => $error];
        } else {
			
            $data['job_title'] = $job_title;
            $data['name'] = $first_name.' '.$last_name;
            $data['email'] = $email;
            $data['phone'] = $phone;
            $data['message'] = $message??'No Message';
            
            //$body = $this->load->view('front/emailer/contactus',$data,TRUE);
            $this->load->database();
            $this->load->model('Contact_Model');
			$date = '%Y%m%d%h%i%s%a';
			$time = time();
			$new_name = mt_rand(100,999).mDate($date,$time);

            $upload_path = "./uploads/careers";

            // Ensure directories exist
            if (!is_dir($upload_path)) {
                if (!mkdir($upload_path, 0755, true)) {
                    return ['s' => 'f', 'm' => 'Failed to create upload directory.'];
                }
            }

			$config =  array(
				'upload_path' => "./uploads/careers",
				'allowed_types' => "txt|pdf|doc|docx",
				'overwrite' => False,
				'file_name'=>$new_name
			);			

			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if($this->upload->do_upload('myfile'))
			{   
				$data['resume'] = $this->upload->data('file_name');
				if ($this->Contact_Model->add('webo_careers',$data)) {
				
					$message = '';
					/*foreach ($data as $key => $val) {
						$message .="<p><b>$key</b>:- $val</p>";
					}*/
					$message .='Job Title : '.$job_title.'--';
					$message .='Name : '.$first_name.' '.$last_name.'--';
					$message .='Email : '.$email.'--';
					$message .='Phone  : '.$phone.'--';
					//$message .='Message: '.$data['message'].'--';
					
					$content = file_get_contents($tmp_name);
					$content = chunk_split(base64_encode($content));
				
					// a random hash will be necessary to send mixed content
					$separator = md5(time());
					$eol = "\r\n";
					
					// main header (multipart mandatory)
					$headers = "From: info <info@weboconnect.com>" . $eol;
					$headers .= "MIME-Version: 1.0" . $eol;
					$headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
					$headers .= "Content-Transfer-Encoding: 7bit" . $eol;
					$headers .= "This is a MIME encoded message." . $eol;
					
					// message
					$body = "--" . $separator . $eol;
					
					$body .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
					$body .= "Content-Transfer-Encoding: base64\r\n\r\n";
					$body .= chunk_split(base64_encode($message));
					// attachment
					$body .= "--" . $separator . $eol;
					$body .= "Content-Type: application/octet-stream; name=\"" . $file_name . "\"" . $eol;
					$body .= "Content-Transfer-Encoding: base64" . $eol;
					$body .= "Content-Disposition: attachment" . $eol;
					$body .= $content . $eol;
					$body .= "--" . $separator . "--";

					//'info@weboconnect.com'
					/*if (mail('hr@weboconnect.com', 'Application for Job', $body, $headers)) {
						$result = ['s' => 's', 'm' => 'Thanks for Applying. We will contact you soon.'];
						//echo "mail send ... OK"; // or use booleans here
					} else {
						$result = ['s' => 'f', 'error' => 'Something went wrong with email sending. Please try again.'];
					   // echo "mail send ... ERROR!";
						//print_r( error_get_last() );
					}*/

                    if (mail('hr@weboconnect.com', 'Application for Job', $body, $headers)){

                    }
    
                    $result = ['s' => 's', 'm' => 'Thanks for Applying. We will contact you soon.'];
					
				} else {
					$result = ['s' => 'f', 'm' => 'Something went wrong. Please try again later.'];
				}
        	} else {
                $result = ['s' => 'f', 'm' => $this->upload->display_errors()];
            }
		}
        echo json_encode($result);
    }
	
	public function save_enquiry() {
        header("Content-type: application/json; charset=utf-8");
        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name')?$this->input->post('last_name'):'';
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        // $phone = $this->input->post('country_code').'-'.$phone;
        $development = $this->input->post('development');
        $budget = $this->input->post('budget');
        $message = $this->input->post('message');
        $captcha = $this->captcha_verify();

        $error = [];
        if (empty($first_name))
            $error['first_name'] = 'Please enter first_name!';
        if (empty($email))
            $error['email'] = 'Please enter email!';
        if (empty($phone))
            $error['phone'] = 'Please enter phone number!';
        if (empty($development))
            $error['development'] = 'Please enter development!';
        if (empty($budget))
            $error['budget'] = 'Please enter budget!';
        if (empty($message))
            $error['message'] = 'Please enter message!';
        
        if (!$captcha)
            $error['captcha'] = 'Please check the captcha form.';

        if (!empty($error)) {
            $result = ['s' => 'f', 'error' => $error];
        } else {
            $data['phone'] = $phone;
            $data['description'] = $message;
            $data['name'] = $first_name.' '.$last_name;
            $data['email'] = $email;
            $data['development'] = $development?$development:'Other';
            $data['budget'] = $budget?$budget:'Not Sure';
            
            $this->load->database();
            $this->load->model('Contact_Model');
            if ($this->Contact_Model->add('webo_enquiry_now',$data)) {
            
    			$message = '';
    			foreach ($data as $key => $val) {
    				$message .="<p><b>$key</b>:- $val</p>";
    			}
    			$subject = "Enquiry from ".$phone;
    			$this->send_mails('info@weboconnect.com', $subject, $message);
    
    			$result = ['s' => 's', 'm' => 'Thank you for submitting your requirements. One of our representatives will be in touch shortly..'];
			 } else {
                $result = ['s' => 'f', 'm' => 'Something went wrong. Please try again later.'];
            }
        }
        echo json_encode($result);
    }

    public function new_save_enquiry() {
        header("Content-type: application/json; charset=utf-8");
        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name')?$this->input->post('last_name'):'';
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        // $phone = $this->input->post('country_code').'-'.$phone;
        $development = $this->input->post('development');
        $budget = $this->input->post('budget');
        $message = $this->input->post('message');
        $full_phone = $this->input->post('full_phone');

        $captcha = $this->captcha_verify();

        $error = [];
        if (empty($first_name))
            $error['first_name'] = 'Please enter first_name!';
        if (empty($email))
            $error['email'] = 'Please enter email!';
        if (empty($phone))
            $error['phone'] = 'Please enter phone number!';
        if (empty($development))
            $error['development'] = 'Please enter development!';
        //if (empty($budget))
            //$error['budget'] = 'Please enter budget!';
        if (empty($message))
            $error['message'] = 'Please enter message!';        
        if (!$captcha)
            $error['captcha'] = 'Please check the captcha form.';

        if (!empty($error)) {
            $result = ['s' => 'f', 'error' => $error];
        } else {
            $data['name'] = $first_name.' '.$last_name;
            $data['email'] = $email;
            $data['phone'] = (($full_phone)?$full_phone:$phone);
            $data['development'] = $development?$development:'Other';
            $data['description'] = $message;
            //$data['budget'] = $budget?$budget:'Not Sure';
            
            //$body = $this->load->view('front/emailer/newenquiry',$data,TRUE);
            $body = $this->load->view('front/email_temp/email_temp',$data,TRUE);

            $this->load->database();
            $this->load->model('Contact_Model');
            if ($this->Contact_Model->add('webo_enquiry_now',$data)) {
            
    			$message = 'We have new enquiry from '.$data['email'];
    			foreach ($data as $key => $val) {
    				$message .="<p><b>".ucfirst($key)."</b>:- $val</p>";
    			}
    			$subject = "Enquiry from ".$phone;
    			$this->send_mails('info@weboconnect.com', $subject, $message);
    			//$this->send_mails('maverick.php01@gmail.com', $subject, $message);

    			//send email to client
    			
                $this->send_mails($email, 'Thanks for submitting your requirements', $body);
    
    			$result = ['s' => 's', 'm' => 'Thank you for submitting your requirements. One of our representatives will be in touch shortly..'];
			} else {
                $result = ['s' => 'f', 'm' => 'Something went wrong. Please try again later.'];
            }
        }
        echo json_encode($result);
    }

	private function send_mails($to, $subject, $message) {
	   
	    // Update the From header to include the display name
    	$headers = "From: Weboconnect <info@weboconnect.com>\r\n";
        //$headers = "From: info@weboconnect.com" . "\r\n";
        $headers .= "Reply-To: info@weboconnect.com" . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        if (mail($to, $subject, $message, $headers)) {
            return TRUE;
        }
        return FALSE;

		//        $config = array(
		//            'protocol' => 'smtp',
		//            'smtp_host' => 'smtp.gmail.com',
		//            'smtp_port' => 465,
		//            'smtp_user' => 'webo.rakesh@gmail.com',
		//            'smtp_pass' => 'Connect123!',
		//            'mailtype' => 'html',
		//            'charset' => 'utf-8'
		//        );
		//        $this->load->library('email', $config);
		//        $this->email->set_newline("\r\n");
		//        $this->email->set_crlf( "\r\n" );
		//        
		//        $result = $this->email
		//                ->from('info@weboconnect.com','Weboconnect Team')
		//                ->reply_to('coreit51@gmail.com')    // Optional, an account where a human being reads.
		//                ->to($to)
		//                ->subject($subject)
		//                ->message($message)
		//                ->send();
		//
		//        if ($result) {
		//            return TRUE;
		//        }
		//        return FALSE;
    }
	
	public function captcha_verify() {
        $captcha = $this->input->post('g-recaptcha-response');
        if (empty($captcha))
            return FALSE;

        $secretKey = "6LeRZKkUAAAAAAg9EXUU_mRanuz7zKjSLX6St2H6";
        $ip = $_SERVER['REMOTE_ADDR'];
        // post request to server
        $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) . '&response=' . urlencode($captcha);
        $response = file_get_contents($url);
        $responseKeys = json_decode($response, true);
        // should return JSON with success as true
        if ($responseKeys["success"]) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function thankyou()
	{
		$data['keywords'] = 'Thank you';
		$data['meta_title'] = 'Thank you';
		$data['meta_description'] = 'Thank you';
        $data['meta_og_img'] = base_url('assets/images/logo1.png');
        $data['meta_og_url'] = base_url('thankyou');
		$this->load->view('front/thankyou', $data);
	}
}

