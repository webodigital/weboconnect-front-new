<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Casestudies extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('auth_helper');
        $this->load->model('CasestudiesModel'); // Load the Casestudies model
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

    public function index($page = 0)
    {
        $this->load->library('pagination');

        $data['meta_title'] = 'Expert Weboconnect Insights In Web & Mobile App Development';
        $data['meta_description'] = 'Find out our expert case_studiess covering solutions for web and mobile app development. Stay ahead of all with insights and trends from weboconnect technologies!';
        
        $config = array();
        $config['base_url'] = site_url('case_studies/adminCasestudies');
        $config['total_rows'] = $this->CasestudiesModel->getCasestudiesCount();
        // $config['per_page'] = 20;
        $config['per_page'] = 0;
        $config['uri_segment'] = 3;

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

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data['case_studiess'] = $this->CasestudiesModel->getCasestudiess($config['per_page'], $page);
        $data['pagination'] = $this->pagination->create_links();

        // $this->load_view('backend/case_studiess/index', $data);
        $this->load_view('frontend/case_studiess/index', $data);
    }

    public function singleCasestudies($id)
    {
        // Fetch case_studies details using $id
        // $case_studies = $this->CasestudiesModel->getCasestudiesById($id);
        $case_studies = $this->CasestudiesModel->getCasestudiesBySlug($id);

        if (!$case_studies) {
            // Handle case where case_studies with given ID is not found
            show_404(); // Or redirect to an error page
            return;
        }
        $comments = $this->CasestudiesModel->getCommentsByCasestudiesId($id);
        $recentcase_studiess = $this->CasestudiesModel->getCasestudiess(3, 1, $case_studies->id);

        // Pass case_studies data to the view
        $data['title'] = 'Single Casestudies';
        $data['case_studies'] = $case_studies;
        $data['comments'] = $comments;
        $data['recentcase_studiess'] = $recentcase_studiess;
        $sponsor = $this->SponsorModel->getSponsorById($case_studies->sponsor);
        $data['sponsor'] = $sponsor;
        $data['meta_title'] = $case_studies->meta_title ?? 'Single Casestudies Page';
        $data['meta_description'] = $case_studies->meta_description ?? 'Single Casestudies Page';
        $data['meta_og_img'] = $case_studies->image ?? '';
        $data['meta_og_url'] = $case_studies->slug ?? '';
        $this->load_view('frontend/case_studiess/singlecase_studies', $data);
    }

    public function adminCasestudies($page = 0)
    {
        $this->load->library('pagination');

        $config = array();
        $config['base_url'] = site_url('admin-case-studies');
        $config['total_rows'] = $this->CasestudiesModel->getCasestudiesCount();
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

        $data['case_studies'] = $this->CasestudiesModel->getAdminCasestudies($config['per_page'], $page);
        $data['pagination'] = $this->pagination->create_links();

        $this->load_view('backend/case-studies/index', $data);
    }

    public function createCasestudies()
    {
        $data['title'] = 'Create Casestudies';
        $this->load_view('backend/case-studies/create', $data);
    }

    public function submitCasestudies()
    {
        try {
            $this->form_validation->set_rules('background_color', 'Background Color', 'required');
            //$this->form_validation->set_rules('background_top_img', 'Background Top Image', 'required');
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('description', 'Description', 'required');
            $this->form_validation->set_rules('location', 'Location', 'required');

            if ($this->form_validation->run() == FALSE) {
                echo json_encode(['status' => 'error', 'message' => validation_errors()]);
                return;
            }

            $user_id = $this->session->userdata('user_id');

            // Process and validate the front_thumbnail
            $front_thumbnail = $this->uploadAndProcessImage('front_thumbnail', './assets/images/case_studies/uploads/', './assets/images/case_studies/uploads/thumbnails/');
            if (!$front_thumbnail['status']) {
                echo json_encode(['status' => 'error', 'message' => $front_thumbnail['message']]);
                return;
            }

            // Process and validate the front_logo
            $front_logo = $this->uploadAndProcessImage('front_logo', './assets/images/case_studies/uploads/', './assets/images/case_studies/uploads/thumbnails/');
            if (!$front_logo['status']) {
                echo json_encode(['status' => 'error', 'message' => $front_logo['message']]);
                return;
            }

            // Process and validate the background_top_img
            $background_top_img = $this->uploadAndProcessImage('background_top_img', './assets/images/case_studies/uploads/', './assets/images/case_studies/uploads/thumbnails/');
            if (!$background_top_img['status']) {
                echo json_encode(['status' => 'error', 'message' => $background_top_img['message']]);
                return;
            }

            // Process and validate the background_mid_img
            $background_mid_img = $this->uploadAndProcessImage('background_mid_img', './assets/images/case_studies/uploads/', './assets/images/case_studies/uploads/thumbnails/');
            if (!$background_mid_img['status']) {
                echo json_encode(['status' => 'error', 'message' => $background_mid_img['message']]);
                return;
            }

            // Process and validate the challenges_img
            $challenges_img = $this->uploadAndProcessImage('challenges_img', './assets/images/case_studies/uploads/', './assets/images/case_studies/uploads/thumbnails/');
            if (!$challenges_img['status']) {
                echo json_encode(['status' => 'error', 'message' => $challenges_img['message']]);
                return;
            }

            // Process and validate the solution_implementation_img
            $solution_implementation_img = $this->uploadAndProcessImage('solution_implementation_img', './assets/images/case_studies/uploads/', './assets/images/case_studies/uploads/thumbnails/');
            if (!$solution_implementation_img['status']) {
                echo json_encode(['status' => 'error', 'message' => $solution_implementation_img['message']]);
                return;
            }

            $slug = $this->createSlug($this->input->post('slug'), $this->input->post('title'));

            $data = array(
                'front_thumbnail' => $front_thumbnail['file_name'],
                'front_logo' => $front_logo['file_name'],
                'background_color' => $this->input->post('background_color'),
                'background_top_img' => $background_top_img['file_name'],
                'background_mid_img' => $background_mid_img['file_name'],
                'user_id' => $user_id,
                'slug' => $slug,
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
                'location' => $this->input->post('location'),
                'front_end' => $this->input->post('front_end'),
                'back_end' => $this->input->post('back_end'),
                'app_application' => $this->input->post('app_application'),
                'app_type' => $this->input->post('app_type'),
                'display_status' => $this->input->post('display_status'),
                'android_url' => $this->input->post('android_url'),
                'ios_url' => $this->input->post('ios_url'),
                'web_url' => $this->input->post('web_url'),
                'technologies' => $this->input->post('technologies'),
                'client_overview' => $this->input->post('client_overview'),
                'how_does_it_work_title' => $this->input->post('how_does_it_work_title'),
                'project_objectives_title' => $this->input->post('project_objectives_title'),
                'challenges_title' => $this->input->post('challenges_title'),
                'challenges_img' => $background_mid_img['file_name'],
                'solution_implementation_title' => $this->input->post('solution_implementation_title'),
                'solution_implementation_img' => $solution_implementation_img['file_name'],
                'outcome_title' => $this->input->post('outcome_title'),
                'screens_title' => $this->input->post('screens_title'),
                'testimonial_title' => $this->input->post('testimonial_title'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                //'thumbnail' => $background_top_img['thumbnail'],
                'status' => $this->input->post('status')
            );

            if ($this->CasestudiesModel->insertCasestudies($data)) {

                $this->updateSitemap($slug);

                echo json_encode(['status' => 'success', 'message' => 'Casestudies added successfully.']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Failed to add case_studies.']);
            }
        } catch (\Throwable $th) {
            echo json_encode(['status' => 'error', 'message' => $th->getMessage()]);
        }
    }

    private function uploadAndProcessImage($field_name, $upload_path, $thumbnail_path)
    {
        // Ensure directories exist
        if (!is_dir($upload_path)) {
            if (!mkdir($upload_path, 0755, true)) {
                return ['status' => false, 'message' => 'Failed to create upload directory.'];
            }
        }

        if (!is_dir($thumbnail_path)) {
            if (!mkdir($thumbnail_path, 0755, true)) {
                return ['status' => false, 'message' => 'Failed to create thumbnail directory.'];
            }
        }

        $config['upload_path'] = $upload_path;
        $config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
        $config['max_size'] = 2048; // 2MB

        $this->load->library('upload', $config);

        // Attempt file upload
        if (!$this->upload->do_upload($field_name)) {
            return ['status' => false, 'message' => $this->upload->display_errors()];
        }

        $upload_data = $this->upload->data();
        //print_r($upload_data);

        $image_path = $upload_data['full_path'];
        $webp_image_path = $upload_path . $upload_data['raw_name'] . '.webp';

        // Convert image to WebP
        $image = null;
        switch ($upload_data['file_type']) {
            case 'image/jpeg':
            case 'image/jpg':
                $image = imagecreatefromjpeg($image_path);
                break;
            case 'image/png':
                $image = imagecreatefrompng($image_path);
                break;
            case 'image/gif':
                $image = imagecreatefromgif($image_path);
                break;
            case 'image/webp':
                $image = imagecreatefromwebp($image_path);
                break;
            default:
                unlink($image_path); // Remove unsupported file
                return ['status' => false, 'message' => 'Unsupported image format.'];
        }

        if ($image) {
            //echo $image.'----------------'.$webp_image_path;
            if($upload_data['file_ext']!=='.webp'){
                // Save as WebP and remove the original file
                if (!imagewebp($image, $webp_image_path)) {
                    imagedestroy($image);
                    unlink($image_path);
                    return ['status' => false, 'message' => 'Failed to save WebP image.'];
                }
                imagedestroy($image);
                unlink($image_path);
            }

            // Create thumbnail
            list($original_width, $original_height) = getimagesize($webp_image_path);
            $thumbnail_height = 350;
            $thumbnail_width = ($thumbnail_height / $original_height) * $original_width;

            $thumb = imagecreatetruecolor($thumbnail_width, $thumbnail_height);
            $source = imagecreatefromwebp($webp_image_path);

            imagecopyresampled($thumb, $source, 0, 0, 0, 0, $thumbnail_width, $thumbnail_height, $original_width, $original_height);

            //$thumbnail_file = $thumbnail_path . $upload_data['raw_name'] . '_thumb.webp';
            $thumbnail_file = $thumbnail_path . $upload_data['raw_name'] . '.webp';
            if (!imagewebp($thumb, $thumbnail_file)) {
                imagedestroy($source);
                imagedestroy($thumb);
                return ['status' => false, 'message' => 'Failed to save thumbnail image.'];
            }

            imagedestroy($source);
            imagedestroy($thumb);

            return [
                'status' => true,
                'file_name' => $upload_data['raw_name'] . '.webp',
                'thumbnail' => $thumbnail_file,
            ];
        } else {
            return ['status' => false, 'message' => 'Failed to process image.'];
        }
    }

    private function updateSitemap($slug) {
        //
        $url = base_url('case-study-details/' . $slug); // Adjust based on your URL structure
        $sitemap_path = './sitemap.xml'; // Adjust path as necessary

        // Load the existing sitemap
        $sitemap = simplexml_load_file($sitemap_path);

        // Add a new URL entry
        $new_url = $sitemap->addChild('url');
        $new_url->addChild('loc', htmlspecialchars($url));
        $new_url->addChild('lastmod', date('Y-m-d\TH:i:sP')); // Format: 2024-06-12T11:14:33+00:00
        $new_url->addChild('priority', '0.64'); // Adjust priority as needed

        // Save the updated sitemap
        $sitemap->asXML($sitemap_path);
    }

    private function createSlug($slug_input, $title)
    {
        $slug = $slug_input ? $this->create_slug($slug_input) : $this->create_slug($title);
        $original_slug = $slug;
        $counter = 1;

        while ($this->CasestudiesModel->slugExists($slug)) {
            $slug = $original_slug . '-' . $counter;
            $counter++;
        }

        return $slug;
    }

    public function create_slug($title)
    {
        // Convert to lowercase
        $slug = strtolower($title);

        // Remove special characters
        $slug = preg_replace('/[^a-z0-9\s-]/', '', $slug);

        // Replace spaces with hyphens
        $slug = preg_replace('/\s+/', '-', $slug);

        // Replace multiple hyphens with a single hyphen
        $slug = preg_replace('/-+/', '-', $slug);

        // Trim leading and trailing hyphens
        $slug = trim($slug, '-');

        return $slug;
    }

    public function editCasestudies($id)
    {
        $data['case_studies'] = $this->CasestudiesModel->getCasestudiesById($id);
        $this->load_view('backend/case-studies/edit', $data);
    }

    public function updateCasestudies()
    {
        try {
            $this->form_validation->set_rules('background_color', 'Background Color', 'required');
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('description', 'Description', 'required');
            $this->form_validation->set_rules('location', 'Location', 'required');

            if ($this->form_validation->run() == FALSE) {
                echo json_encode(['status' => 'error', 'message' => validation_errors()]);
                return;
            }

            $user_id = $this->session->userdata('user_id');

            $front_thumbnail = null;
            if (!empty($_FILES['front_thumbnail']['name'])) {
                // Process and validate the front_thumbnail
                $front_thumbnail = $this->uploadAndProcessImage('front_thumbnail', './assets/images/case_studies/uploads/', './assets/images/case_studies/uploads/thumbnails/');
                if (!$front_thumbnail['status']) {
                    echo json_encode(['status' => 'error', 'message' => $front_thumbnail['message']]);
                    return;
                }
            }

            $front_logo = null;
            if (!empty($_FILES['front_logo']['name'])) {
                // Process and validate the front_logo
                $front_logo = $this->uploadAndProcessImage('front_logo', './assets/images/case_studies/uploads/', './assets/images/case_studies/uploads/thumbnails/');
                if (!$front_logo['status']) {
                    echo json_encode(['status' => 'error', 'message' => $front_logo['message']]);
                    return;
                }
            }

            $background_top_img = null;
            if (!empty($_FILES['background_top_img']['name'])) {
                $background_top_img = $this->uploadAndProcessImage('background_top_img', './assets/images/case_studies/uploads/', './assets/images/case_studies/uploads/thumbnails/');
                if (!$background_top_img['status']) {
                    echo json_encode(['status' => 'error', 'message' => $background_top_img['message']]);
                    return;
                }
            }

            $background_mid_img = null;
            if (!empty($_FILES['background_mid_img']['name'])) {
                $background_mid_img = $this->uploadAndProcessImage('background_mid_img', './assets/images/case_studies/uploads/', './assets/images/case_studies/uploads/thumbnails/');
                if (!$background_mid_img['status']) {
                    echo json_encode(['status' => 'error', 'message' => $background_mid_img['message']]);
                    return;
                }
            }

            $challenges_img = null;
            if (!empty($_FILES['challenges_img']['name'])) {
                $challenges_img = $this->uploadAndProcessImage('challenges_img', './assets/images/case_studies/uploads/', './assets/images/case_studies/uploads/thumbnails/');
                if (!$challenges_img['status']) {
                    echo json_encode(['status' => 'error', 'message' => $challenges_img['message']]);
                    return;
                }
            }

            $solution_implementation_img = null;
            if (!empty($_FILES['solution_implementation_img']['name'])) {
                $solution_implementation_img = $this->uploadAndProcessImage('solution_implementation_img', './assets/images/case_studies/uploads/', './assets/images/case_studies/uploads/thumbnails/');
                if (!$solution_implementation_img['status']) {
                    echo json_encode(['status' => 'error', 'message' => $solution_implementation_img['message']]);
                    return;
                }
            }

            $slug = $this->createSlug($this->input->post('slug'), $this->input->post('title'));

            $data = array(
                'background_color' => $this->input->post('background_color'),
                'title' => $this->input->post('title'),
                'slug' => $slug,
                'description' => $this->input->post('description'),
                'location' => $this->input->post('location'),
                'front_end' => $this->input->post('front_end'),
                'back_end' => $this->input->post('back_end'),
                'app_application' => $this->input->post('app_application'),
                'app_type' => $this->input->post('app_type'),
                'display_status' => $this->input->post('display_status'),
                'android_url' => $this->input->post('android_url'),
                'ios_url' => $this->input->post('ios_url'),
                'web_url' => $this->input->post('web_url'),
                'technologies' => $this->input->post('technologies'),
                'client_overview' => $this->input->post('client_overview'),
                'how_does_it_work_title' => $this->input->post('how_does_it_work_title'),
                'project_objectives_title' => $this->input->post('project_objectives_title'),
                'challenges_title' => $this->input->post('challenges_title'),
                'solution_implementation_title' => $this->input->post('solution_implementation_title'),
                'outcome_title' => $this->input->post('outcome_title'),
                'screens_title' => $this->input->post('screens_title'),
                'testimonial_title' => $this->input->post('testimonial_title'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => $this->input->post('status')
            );

            if ($front_thumbnail) {
                $data['front_thumbnail'] = $front_thumbnail['file_name'];
            }

            if ($front_logo) {
                $data['front_logo'] = $front_logo['file_name'];
            }

            if ($background_top_img) {
                $data['background_top_img'] = $background_top_img['file_name'];
            }

            if ($background_mid_img) {
                $data['background_mid_img'] = $background_mid_img['file_name'];
            }

            if ($challenges_img) {
                $data['challenges_img'] = $challenges_img['file_name'];
            }

            if ($solution_implementation_img) {
                $data['solution_implementation_img'] = $solution_implementation_img['file_name'];
            }



            //Fetch case_study record by id to update xml matching old slug
            $casestudiesrow = $this->CasestudiesModel->getCasestudiesById($this->input->post('id'));
            $old_slug = $casestudiesrow->slug;

            if ($this->CasestudiesModel->updateCasestudies($this->input->post('id'), $data)) {

                $this->updateSitemapSlug($old_slug, $slug); // Update sitemap slug

                echo json_encode(['status' => 'success', 'message' => 'Casestudies updated successfully.']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Failed to update case_studies.']);
            }
        } catch (\Throwable $th) {
            echo json_encode(['status' => 'error', 'message' => $th->getMessage()]);
        }
    }

    private function updateSitemapSlug($old_slug, $new_slug) {
        $sitemap_path = './sitemap.xml'; // Adjust path as necessary
        $sitemap = simplexml_load_file($sitemap_path);

        // Track whether the old URL exists
        $url_found = false;

        // Find the existing URL entry with the old slug
        foreach ($sitemap->url as $url) {
            if ((string)$url->loc === base_url('case-study-details/' . $old_slug)) {
                // Update the <loc> element
                $url->loc = base_url('case-study-details/' . $new_slug);
                $url->lastmod = date('Y-m-d\TH:i:sP'); // Update last modified date
                $url_found = true;
                break;
            }
        }

        // If the old URL wasn't found, add a new URL entry
        if (!$url_found) {
            $new_url = $sitemap->addChild('url');
            $new_url->addChild('loc', base_url('case-study-details/' . $new_slug));
            $new_url->addChild('lastmod', date('Y-m-d\TH:i:sP'));
            $new_url->addChild('changefreq', 'monthly'); // Optional, adjust frequency
            $new_url->addChild('priority', '0.8'); // Optional, adjust priority
        }

        // Save the updated sitemap
        $sitemap->asXML($sitemap_path);
    }
    
    public function deleteCasestudies($id)
    {
        $this->load->model('CasestudiesModel');
        
        //Fetch case_studies record by id to update xml matching old slug
        $case_studies = $this->CasestudiesModel->getCasestudiesById($id);

        if ($this->CasestudiesModel->deleteCasestudiesById($id)) {
            echo json_encode(['status' => 'success', 'message' => 'Casestudies deleted successfully.']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to delete case_studies.']);
        }
    }

    private function removeFromSitemap($slug) {
        $sitemap_path = './sitemap.xml'; // Adjust path as necessary
        $sitemap = simplexml_load_file($sitemap_path);

        // Create a new SimpleXMLElement to hold the updated sitemap
        $new_sitemap = new SimpleXMLElement('<urlset/>');

        // Loop through existing URLs and copy them to the new sitemap, except the one to remove
        foreach ($sitemap->url as $url) {
            if ((string)$url->loc !== base_url('case-study-details/' . $slug)) {
                $new_url = $new_sitemap->addChild('url');
                $new_url->addChild('loc', htmlspecialchars($url->loc));
                $new_url->addChild('lastmod', $url->lastmod);
                $new_url->addChild('priority', $url->priority);
            }
        }

        // Save the updated sitemap
        $new_sitemap->asXML($sitemap_path);
    }

    public function update_sequence() {
        $order = $this->input->post('order');
        foreach ($order as $item) {
            $this->CasestudiesModel->update_sequence($item['id'], $item['sequence']);
        }
        echo json_encode(['status' => 'success']);
    }

    public function updateAllCasestudiesInSitemap() 
    {
        $sitemap_path = './sitemap.xml'; // Path to the sitemap
        $base_case_studies_url = base_url('case-study-details/'); // Base URL for case_study posts
    
        // Load existing sitemap
        if (file_exists($sitemap_path)) {
            $sitemap = simplexml_load_file($sitemap_path);
        } else {
            return false;
            // Create new sitemap structure if the file doesn't exist
            /* $sitemap = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"></urlset>'); */

        }
    
        // Get all case_studys from the database
        $case_studys = $this->CasestudiesModel->getAllCasestudiess(); // Make sure this function returns all case_studys
    
        // Collect all existing URLs from sitemap
        $existing_urls = [];
        foreach ($sitemap->url as $url_entry) {
            $existing_urls[] = (string) $url_entry->loc;
        }
    
        // Add missing case_studys to the sitemap
        foreach ($case_studys as $case_study) {
            $case_study_url = $base_case_studies_url . $case_study['slug'];
    
            if (!in_array(htmlspecialchars($case_study_url), $existing_urls)) {
                // If the case_study URL is not in the sitemap, add it
                $new_url = $sitemap->addChild('url');
                $new_url->addChild('loc', htmlspecialchars($case_study_url));
                $new_url->addChild('lastmod', date('Y-m-d\TH:i:sP')); // Last modified time
                $new_url->addChild('priority', '0.64'); // Set priority if needed
            }
        }
    
        // Save the updated sitemap
        $sitemap->asXML($sitemap_path);
    
        echo json_encode(['status' => 'success', 'message' => 'All Case Studies added to sitemap.']);
    }
    
    /////////////////////////////////////////////////////////////////////////
    public function adminCaseStudiesDetails($id)
    {
        $data['details_set'] = 
        [
            'how_does_it_work' => 'How Does It Work', 
            'project_objectives' => 'Project Objectives',  
            'challenges' => 'Challenges',  
            'solution_implementation' => 'Solution And Implementation',  
            'outcome' => 'Outcome',  
            'screens' => 'Screens', 
        ];
        $data['selected_detail'] = ($this->input->post('details_set'))?$this->input->post('details_set'):'how_does_it_work';
        $data['case_studies'] = $this->CasestudiesModel->getCasestudiesById($id);
        $data['case_studies_details'] = $this->CasestudiesModel->getCasestudiesDetailsByIdWithSType($id, $data['selected_detail']);
        $this->load_view('backend/case-studies/details', $data);
    }

    public function adminCaseStudiesDetailsById($id)
    {
        $data = $this->CasestudiesModel->getCasestudiesDetailsById($id);
        echo json_encode(['status' => 'success', 'message' => 'Casestudies updated successfully.', 'data'=>$data]);
    }

    public function submitCaseStudiesDetails()
    {
        try {
            //$this->form_validation->set_rules('img', 'Image', 'required');
            $this->form_validation->set_rules('title', 'Title', 'required');
            //$this->form_validation->set_rules('description', 'Description', 'required');

            if ($this->form_validation->run() == FALSE) {
                echo json_encode(['status' => 'error', 'message' => validation_errors()]);
                return;
            }

            $user_id = $this->session->userdata('user_id');

            $img = null;
            if (!empty($_FILES['img']['name'])) {
                // Process and validate the img
                $img = $this->uploadAndProcessImage('img', './assets/images/case_studies/uploads/', './assets/images/case_studies/uploads/thumbnails/');
                if (!$img['status']) {
                    echo json_encode(['status' => 'error', 'message' => $img['message']]);
                    return;
                }
            }

            $case_studies_details_id = $this->input->post('case_studies_details_id');

            $data = array(
                'case_studies_id' => $this->input->post('case_studies_id'),
                'type' => $this->input->post('type'),
                //'img' => $img['file_name'],
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
                'status' => $this->input->post('status'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            );

            if ($img) {
                $data['img'] = $img['file_name'];
            }

            if ($this->CasestudiesModel->insertCasestudiesDetails($data, $case_studies_details_id)) {
                if($case_studies_details_id){
                    echo json_encode(['status' => 'success', 'message' => 'Casestudies updated successfully.']);
                }
                else{
                    echo json_encode(['status' => 'success', 'message' => 'Casestudies added successfully.']);
                }
                
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Failed to add case_studies.']);
            }
        } catch (\Throwable $th) {
            echo json_encode(['status' => 'error', 'message' => $th->getMessage()]);
        }
    }

    public function deleteCaseStudiesDetails($id)
    {
        $this->load->model('CasestudiesModel');
        if ($this->CasestudiesModel->deleteCasestudiesDetailsById($id)) {
            echo json_encode(['status' => 'success', 'message' => 'Casestudies details deleted successfully.']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to delete case_studies.']);
        }
    }

    /////////////////////////////////////////////////////////////////////////
    public function adminCaseStudiesTestimonials($id)
    {
        /*$data['details_set'] = 
        [
            'how_does_it_work' => 'how does it work', 
            'project_objectives' => 'project objectives',  
            'challenges' => 'challenges',  
            'solution_implementation' => 'solution and implementation',  
            'outcome' => 'outcome',  
            'screens' => 'screens', 
        ];
        $data['selected_detail'] = ($this->input->post('details_set'))?$this->input->post('details_set'):'how_does_it_work';*/
        $data['case_studies'] = $this->CasestudiesModel->getCasestudiesById($id);
        $data['case_studies_testimonials'] = $this->CasestudiesModel->getCasestudiesTestimonialsByCSId($id);
        $this->load_view('backend/case-studies/testimonials', $data);
    }

    public function adminCaseStudiesTestimonialsById($id)
    {
        $data = $this->CasestudiesModel->getCasestudiesTestimonialsById($id);
        echo json_encode(['status' => 'success', 'message' => 'Casestudies updated successfully.', 'data'=>$data]);
    }

    public function submitCaseStudiesTestimonials()
    {
        try {
            //$this->form_validation->set_rules('img', 'Image', 'required');
            $this->form_validation->set_rules('name', 'name', 'required');
            //$this->form_validation->set_rules('description', 'Description', 'required');

            if ($this->form_validation->run() == FALSE) {
                echo json_encode(['status' => 'error', 'message' => validation_errors()]);
                return;
            }

            $user_id = $this->session->userdata('user_id');

            $img = null;
            if (!empty($_FILES['img']['name'])) {
                // Process and validate the img
                $img = $this->uploadAndProcessImage('img', './assets/images/case_studies/uploads/', './assets/images/case_studies/uploads/thumbnails/');
                if (!$img['status']) {
                    echo json_encode(['status' => 'error', 'message' => $img['message']]);
                    return;
                }
            }

            $case_studies_testimonials_id = $this->input->post('case_studies_testimonials_id');

            $data = array(
                'case_studies_id' => $this->input->post('case_studies_id'),
                //'type' => $this->input->post('type'),
                //'img' => $img['file_name'],
                'name' => $this->input->post('name'),
                'position' => $this->input->post('position'),
                'location' => $this->input->post('location'),
                'comments' => $this->input->post('comments'),
                'status' => $this->input->post('status'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            );

            if ($img) {
                $data['img'] = $img['file_name'];
            }

            if ($this->CasestudiesModel->insertCasestudiesTestimonials($data, $case_studies_testimonials_id)) {
                if($case_studies_testimonials_id){
                    echo json_encode(['status' => 'success', 'message' => 'Casestudies updated successfully.']);
                }
                else{
                    echo json_encode(['status' => 'success', 'message' => 'Casestudies added successfully.']);
                }
                
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Failed to add case_studies.']);
            }
        } catch (\Throwable $th) {
            echo json_encode(['status' => 'error', 'message' => $th->getMessage()]);
        }
    }

    public function deleteCaseStudiesTestimonials($id)
    {
        $this->load->model('CasestudiesModel');
        if ($this->CasestudiesModel->deleteCasestudiesTestimonialsById($id)) {
            echo json_encode(['status' => 'success', 'message' => 'Casestudies testimonial deleted successfully.']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to delete case_studies.']);
        }
    }

}
