<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('auth_helper');
        $this->load->model('BlogModel'); // Load the Blog model
        $this->load->model('SponsorModel');
        $this->load->model('User');
        $this->load->library('pagination');
        $this->load->library('form_validation');
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
        $data['meta_description'] = 'Find out our expert blogs covering solutions for web and mobile app development. Stay ahead of all with insights and trends from weboconnect technologies!';
        
        $config = array();
        $config['base_url'] = site_url('blog/adminBlog');
        $config['total_rows'] = $this->BlogModel->getBlogCount();
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

        $data['blogs'] = $this->BlogModel->getBlogs($config['per_page'], $page);
        $data['pagination'] = $this->pagination->create_links();

        // $this->load_view('backend/blogs/index', $data);
        $this->load_view('frontend/blogs/index', $data);
    }

    public function singleBlog($id)
    {
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
        $data['comments'] = $comments;
        $data['recentblogs'] = $recentblogs;
        $sponsor = $this->SponsorModel->getSponsorById($blog->sponsor);
        $data['sponsor'] = $sponsor;
        $data['meta_title'] = $blog->meta_title ?? 'Single Blog Page';
        $data['meta_description'] = $blog->meta_description ?? 'Single Blog Page';
        $data['meta_og_img'] = $blog->image ?? '';
        $data['meta_og_url'] = $blog->slug ?? '';
        $this->load_view('frontend/blogs/singleblog', $data);
    }
    public function addBlogComment()
    {
        $comment = $this->input->post('comment');
        $blog_id = $this->input->post('blog_id');
        $user_id = $this->session->userdata('user_id');

        if ($comment && $blog_id) {
            $result = $this->BlogModel->saveComment($blog_id, $comment, $user_id);

            if ($result) {
                // Fetch updated comments
                $comments = $this->BlogModel->getCommentsByBlogId($blog_id);

                $response = [
                    'status' => 'success',
                    'message' => 'Comment added successfully.',
                    'comments' => $comments
                ];
            } else {
                $response = ['status' => 'error', 'message' => 'Failed to add comment.'];
            }
        } else {
            $response = ['status' => 'error', 'message' => 'Invalid input.'];
        }

        echo json_encode($response);
    }
    public function adminBlog($page = 0)
    {
        $this->load->library('pagination');

        $config = array();
        $config['base_url'] = site_url('blog/adminBlog');
        $config['total_rows'] = $this->BlogModel->getBlogCount();
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

        $data['blogs'] = $this->BlogModel->getAdminBlogs($config['per_page'], $page);
        $data['pagination'] = $this->pagination->create_links();

        $this->load_view('backend/blogs/index', $data);
    }

    public function createBlog()
    {
        $data['title'] = 'Create Blog';
        $sponsors = $this->SponsorModel->getAllSponsors();
        $data['sponsors'] = $sponsors;
        $this->load_view('backend/blogs/createblog', $data);
    }

    public function submitBlog()
    {
        
        try {
            //code...
            // $this->ensure_logged_in();
            // $user = $this->ensure_admin();

            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('content', 'Content', 'required');
            $this->form_validation->set_rules('tags', 'Tags', 'required');
            $this->form_validation->set_rules('publish_date', 'Publish Date', 'required');
            $this->form_validation->set_rules('publish_time', 'Publish Time', 'required');

            if ($this->form_validation->run() == FALSE) {
                echo json_encode(['status' => 'error', 'message' => validation_errors()]);
            } else {
                $config['upload_path'] = './assets/images/blogs/uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
                // $config['max_size'] = 2048; // 2MB

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('image')) {
                    echo json_encode(['status' => 'error', 'message' => $this->upload->display_errors()]);
                } else {
                    $upload_data = $this->upload->data();
                    $user_id = $this->session->userdata('user_id');

                    $image_path = $upload_data['full_path'];
                    $webp_image_path = str_replace($upload_data['file_ext'], '.webp', $image_path);

                    // Convert to WebP using GD
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
                            echo json_encode(['status' => 'error', 'message' => 'Unsupported image format.']);
                            return;
                    }

                    if ($image) {
                        // Create WebP version
                        imagewebp($image, $webp_image_path);
                        imagedestroy($image);

                        // Remove the original file
                        unlink($image_path);

                        // Update the file name to the new WebP file name
                        $file_name = $upload_data['raw_name'] . '.webp';

                        // Create thumbnail
                        $thumbnail_path = './assets/images/blogs/uploads/thumbnails/' . $upload_data['raw_name'] . '_thumb.webp';
                        // $thumbnail_width = 150; // Adjust the size as needed
                        $thumbnail_height = 350;

                        list($original_width, $original_height) = getimagesize($webp_image_path);

                        $thumbnail_width = ($thumbnail_height / $original_height) * $original_width;

                        $thumb = imagecreatetruecolor($thumbnail_width, $thumbnail_height);
                        $source = imagecreatefromwebp($webp_image_path);

                        // Resize and save thumbnail
                        imagecopyresampled($thumb, $source, 0, 0, 0, 0, $thumbnail_width, $thumbnail_height, $original_width, $original_height);
                        imagewebp($thumb, $thumbnail_path);

                        imagedestroy($source);
                        imagedestroy($thumb);


                        // if ($original_height > 0) {
                        //     $thumbnail_width = ($thumbnail_height / $original_height) * $original_width;

                        //     // Create thumbnail image
                        //     $thumb = imagecreatetruecolor($thumbnail_width, $thumbnail_height);
                        //     $source = imagecreatefromwebp($webp_image_path);

                        //     // Resize and save thumbnail
                        //     imagecopyresampled($thumb, $source, 0, 0, 0, 0, $thumbnail_width, $thumbnail_height, $original_width, $original_height);
                        //     imagewebp($thumb, $thumbnail_path);

                        //     imagedestroy($source);
                        //     imagedestroy($thumb);
                        // } else {
                        //     echo json_encode(['status' => 'error', 'message' => 'Invalid image dimensions.']);
                        //     return;
                        // }

                        $slug = "";
                        if ($this->input->post('slug')) {
                            $slug = $this->create_slug($this->input->post('slug'));
                        } else {
                            $slug = $this->create_slug($this->input->post('title'));
                        }
                        $original_slug = $slug;
                        $counter = 1;
                        while ($this->BlogModel->slugExists($slug)) {
                            $slug = $original_slug . '-' . $counter;
                            $counter++;
                        }

                        $status = $this->input->post('status');

                        $schedule_datetime = null;

                        if (!empty($this->input->post('schedule_datetime'))) 
                        {
                            $schedule_datetime = $this->input->post('schedule_datetime');
                            $is_published = 0; // Not published yet
                            $status = 'scheduled';
                        } else {
                            $schedule_datetime = null;
                            $is_published = 1; // Publish immediately
                        }
                        
                        $data = array(
                            'title' => $this->input->post('title'),
                            'content' => $this->input->post('content'),
                            'sponsor' => $this->input->post('sponsor'),
                            'image' => $file_name,
                            'tags' => $this->input->post('tags'),
                            'publish_date' => $this->input->post('publish_date'),
                            'publish_time' => $this->input->post('publish_time'),
                            'meta_title' => $this->input->post('metatitle'),
                            'meta_description' => $this->input->post('metadescription'),
                            'created_at' => date('Y-m-d H:i:s'),
                            'updated_at' => date('Y-m-d H:i:s'),
                            'user_id' => $user_id,
                            'slug' => $slug,
                            'thumbnail' => $upload_data['raw_name'] . '_thumb.webp',
                            'status' => $status,
                            'schedule_datetime' => $schedule_datetime
                        );

                        if ($this->BlogModel->insertBlog($data)) {

                            if ($status === 'draft') {
                                // Save as draft logic
                                //$slug = $blog->slug;
                                //$this->removeFromSitemap($slug); // Remove from sitemap
                            } else if ($status === 'publish') {
                                $this->updateSitemap($slug); // Update sitemap here
                            }
                            
                            echo json_encode(['status' => 'success', 'message' => 'Blog added successfully.']);
                        } else {
                            echo json_encode(['status' => 'error', 'message' => 'Failed to add blog.']);
                        }
                    } else {
                        echo json_encode(['status' => 'error', 'message' => 'Failed to create image resource.']);
                    }
                }
            }
        } catch (\Throwable $th) {
            print_r($th);
        }
    }


    public function publish_scheduled_posts() {

        // Load the database library
        $this->load->database();

        date_default_timezone_set('Asia/Kolkata');
        // Get the current datetime
        $current_datetime = date('Y-m-d H:i:s');

        /*if('2024-11-19 12:56:00'>=$current_datetime){
            echo 'matched';
        }*/

        // Fetch posts that need to be published
        $this->db->where('schedule_datetime <=', $current_datetime);
        $this->db->where('status', 'scheduled');
        $query = $this->db->get('webo_blogs');
        $posts = $query->result();

        // Loop through the records and update the sitemap
        foreach ($posts as $post) {
            // Update the status to published
            $this->db->where('id', $post->id); // Assuming 'id' is the primary key
            $this->db->update('webo_blogs', ['status' => 'publish']);

            // After successfully updating, call updateSitemap
            if ($this->db->affected_rows() > 0 && !empty($post->slug)) {
                $this->updateSitemap($post->slug); // Call the function with the slug
            }
        }

        echo count($posts) . " posts published and sitemap updated.";
    }

    private function updateSitemap($slug) {
        $url = base_url('blog/' . $slug); // Adjust based on your URL structure
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

    public function deleteBlog($id)
    {
        $this->load->model('BlogModel');
        
        //Fetch blog record by id to update xml matching old slug
        $blog = $this->BlogModel->getBlogById($id);
        $slug = $blog->slug;

        if ($this->BlogModel->deleteBlogById($id)) {
            $this->removeFromSitemap($slug); // Remove from sitemap

            echo json_encode(['status' => 'success', 'message' => 'Blog deleted successfully.']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to delete blog.']);
        }
    }

    private function removeFromSitemap($slug) {
        $sitemap_path = './sitemap.xml'; // Adjust path as necessary
        $sitemap = simplexml_load_file($sitemap_path);

        // Create a new SimpleXMLElement to hold the updated sitemap
        $new_sitemap = new SimpleXMLElement('<urlset/>');

        // Loop through existing URLs and copy them to the new sitemap, except the one to remove
        foreach ($sitemap->url as $url) {
            if ((string)$url->loc !== base_url('blog/' . $slug)) {
                $new_url = $new_sitemap->addChild('url');
                $new_url->addChild('loc', htmlspecialchars($url->loc));
                $new_url->addChild('lastmod', $url->lastmod);
                $new_url->addChild('priority', $url->priority);
            }
        }

        // Save the updated sitemap
        $new_sitemap->asXML($sitemap_path);
    }

    public function editBlog($id)
    {
        $data['blog'] = $this->BlogModel->getBlogById($id);
        $sponsors = $this->SponsorModel->getAllSponsors();
        $data['sponsors'] = $sponsors;
        $this->load_view('backend/blogs/edit', $data);
    }

    public function updateBlog()
    {
        // $this->ensure_logged_in();
        // $user = $this->ensure_admin();

        $id = $this->input->post('id');
        $title = $this->input->post('title');
        $content = $this->input->post('content');
        $tags = $this->input->post('tags');
        $publish_date = $this->input->post('publish_date');
        $publish_time = $this->input->post('publish_time');
        $sponsor = $this->input->post('sponsor');
        $slug = $this->input->post('slug');
        $meta_title = $this->input->post('metatitle');
        $meta_description = $this->input->post('metadescription');

        $config['upload_path'] = './assets/images/blogs/uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
        $config['max_size'] = 2048; // 2MB max
        $this->load->library('upload', $config);

        $image_path = null;
        $thumbnail_path = './assets/images/blogs/uploads/thumbnails/';

        // if (!$this->upload->do_upload('image')) {
        //     $error = $this->upload->display_errors();
        //     echo json_encode(['status' => 'error', 'message' => 'Image upload failed: ' . $error]);
        //     return;
        // }
        
        $thumbnail_file_name = null;

        if ($this->upload->do_upload('image')) {
            $image_data = $this->upload->data();
            $uploaded_image_path = $image_data['full_path'];
            $webp_image_path = str_replace($image_data['file_ext'], '.webp', $uploaded_image_path);

            // Convert to WebP using GD
            $image = null;
            switch ($image_data['file_type']) {
                case 'image/jpeg':
                case 'image/jpg':
                    $image = imagecreatefromjpeg($uploaded_image_path);
                    break;
                case 'image/png':
                    $image = imagecreatefrompng($uploaded_image_path);
                    break;
                case 'image/gif':
                    $image = imagecreatefromgif($uploaded_image_path);
                    break;
                case 'image/webp':
                    $image = imagecreatefromwebp($uploaded_image_path);
                    break;
                default:
                    echo json_encode(['status' => 'error', 'message' => 'Unsupported image format.']);
                    return;
            }

            if ($image) {
                if (imagewebp($image, $webp_image_path)) {
                    imagedestroy($image);

                    // Remove the original file
                    unlink($uploaded_image_path);

                    // Update the file name to the new WebP file name
                    $image_path = $image_data['raw_name'] . '.webp';

                    // Create thumbnail
                    $thumbnail_height = 350; // Fixed height for the thumbnail
                    list($original_width, $original_height) = getimagesize($webp_image_path);

                    if ($original_height > 0) {
                        $thumbnail_width = ($thumbnail_height / $original_height) * $original_width;

                        // Create thumbnail image
                        $thumb = imagecreatetruecolor($thumbnail_width, $thumbnail_height);
                        $source = imagecreatefromwebp($webp_image_path);

                        if ($thumb && $source) {
                            // Resize and save thumbnail
                            imagecopyresampled($thumb, $source, 0, 0, 0, 0, $thumbnail_width, $thumbnail_height, $original_width, $original_height);
                            $thumbnail_file_name = $image_data['raw_name'] . '_thumb.webp';
                            $thumbnail_full_path = $thumbnail_path . $thumbnail_file_name;
                            if (imagewebp($thumb, $thumbnail_full_path)) {
                                imagedestroy($source);
                                imagedestroy($thumb);
                            } else {
                                echo json_encode(['status' => 'error', 'message' => 'Failed to save thumbnail as WebP.']);
                                return;
                            }
                        } else {
                            echo json_encode(['status' => 'error', 'message' => 'Failed to create thumbnail image resource.']);
                            return;
                        }
                    } else {
                        echo json_encode(['status' => 'error', 'message' => 'Invalid image dimensions.']);
                        return;
                    }
                } else {
                    echo json_encode(['status' => 'error', 'message' => 'Failed to convert image to WebP.']);
                    return;
                }
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Failed to create image resource.']);
                return;
            }
        }

        $this->load->model('BlogModel');

        //Fetch blog record by id to update xml matching old slug
        $blog = $this->BlogModel->getBlogById($id);
        $old_slug = $blog->slug;

        $status = $this->input->post('status');

        $schedule_datetime = null;

        date_default_timezone_set('Asia/Kolkata');

        if (!empty($this->input->post('schedule_datetime'))) 
        {
            $schedule_datetime = $this->input->post('schedule_datetime');
            $is_published = 0; // Not published yet
            $status = 'scheduled';
        }
        else if ($blog->schedule_datetime<=$this->input->post('schedule_datetime')) {
            $schedule_datetime = ($blog->schedule_datetime)?$blog->schedule_datetime:null;
            $is_published = 1; // Publish immediately
        }
        else {
            $schedule_datetime = null;
            //(!empty($this->input->post('schedule_datetime'))$blog->schedule_datetime)?$blog->schedule_datetime:null;
            $is_published = 1; // Publish immediately
        }

        $result = $this->BlogModel->updateBlog($id, $title, $content, $tags, $publish_date, $publish_time, $image_path, $sponsor, $slug, $meta_title, $meta_description, $thumbnail_file_name, $status, $schedule_datetime);

        if ($status === 'draft' || $status === 'scheduled') {
            // Save as draft logic
            //$slug = $blog->slug;
            $this->removeFromSitemap($old_slug); // Remove from sitemap
        } else if ($status === 'publish') {
            if($blog->status === 'draft' || $status === 'scheduled'){
                //echo "5";
                $this->updateSitemap($slug);
            }
            else{
                //echo $old_slug;
                $this->updateSitemapSlug($old_slug, $slug); // Update sitemap slug
            }
        }

        if ($result) {
            echo json_encode(['status' => 'success', 'message' => 'Blog updated successfully.']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to update blog.']);
        }
    }

    private function updateSitemapSlug($old_slug, $new_slug) {
        $sitemap_path = './sitemap.xml'; // Adjust path as necessary
        $sitemap = simplexml_load_file($sitemap_path);

        // Track whether the old URL exists
        $url_found = false;

        // Find the existing URL entry with the old slug
        foreach ($sitemap->url as $url) {
            if ((string)$url->loc === base_url('blog/' . $old_slug)) {
                // Update the <loc> element
                $url->loc = base_url('blog/' . $new_slug);
                $url->lastmod = date('Y-m-d\TH:i:sP'); // Update last modified date
                $url_found = true;
                break;
            }
        }

        // If the old URL wasn't found, add a new URL entry
        if (!$url_found) {
            $new_url = $sitemap->addChild('url');
            $new_url->addChild('loc', base_url('blog/' . $new_slug));
            $new_url->addChild('lastmod', date('Y-m-d\TH:i:sP'));
            $new_url->addChild('changefreq', 'monthly'); // Optional, adjust frequency
            $new_url->addChild('priority', '0.8'); // Optional, adjust priority
        }

        // Save the updated sitemap
        $sitemap->asXML($sitemap_path);
    }


    private function updateSitemapSlug1($old_slug, $new_slug) {
        $sitemap_path = './sitemap.xml'; // Adjust path as necessary
        $sitemap = simplexml_load_file($sitemap_path);

        // Find the existing URL entry with the old slug
        foreach ($sitemap->url as $url) {
            if ((string)$url->loc === base_url('blog/' . $old_slug)) {
                // Update the <loc> element
                $url->loc = base_url('blog/' . $new_slug);
                $url->lastmod = date('Y-m-d\TH:i:sP'); // Update last modified date
                break;
            }
        }

        // Save the updated sitemap
        $sitemap->asXML($sitemap_path);
    }

    // public function toggleLike() {
    //     $userId = $this->session->userdata('user_id'); // Assuming you have user authentication
    //     $blogId = $this->input->post('blog_id');

    //     if ($userId && $blogId) {
    //         $result = $this->LikeModel->blogLike($userId, $blogId);
    //         $this->output->set_content_type('application/json')->set_output(json_encode($result));
    //     } else {
    //         $this->output->set_status_header(400)->set_output(json_encode(['error' => 'Invalid request']));
    //     }
    // }
    public function toggleLike()
    {
        try {
            //code...
            $userId = $this->session->userdata('user_id');
            $blogId = $this->input->post('blog_id');

            if ($userId && $blogId) {
                $result = $this->BlogModel->blogLike($userId, $blogId);
                $likeCount = $this->BlogModel->getLikeCount($blogId);
                $result['likecount'] = $likeCount;
                $this->output->set_content_type('application/json')->set_output(json_encode($result));
            } else {
                $this->output->set_status_header(400)->set_output(json_encode(['error' => 'Invalid request']));
            }
        } catch (\Throwable $th) {
            print_r($th);
        }
    }


    public function updateAllBlogsInSitemap() 
    {
        $sitemap_path = './sitemap.xml'; // Path to the sitemap
        $base_blog_url = base_url('blog/'); // Base URL for blog posts
    
        // Load existing sitemap
        if (file_exists($sitemap_path)) {
            $sitemap = simplexml_load_file($sitemap_path);
        } else {
            return false;
            // Create new sitemap structure if the file doesn't exist
            /* $sitemap = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"></urlset>'); */

        }
    
        // Get all blogs from the database
        $blogs = $this->BlogModel->getAllBlogs(); // Make sure this function returns all blogs
    
        // Collect all existing URLs from sitemap
        $existing_urls = [];
        foreach ($sitemap->url as $url_entry) {
            $existing_urls[] = (string) $url_entry->loc;
        }
    
        // Add missing blogs to the sitemap
        foreach ($blogs as $blog) {
            $blog_url = $base_blog_url . $blog['slug'];
    
            if (!in_array(htmlspecialchars($blog_url), $existing_urls)) {
                // If the blog URL is not in the sitemap, add it
                $new_url = $sitemap->addChild('url');
                $new_url->addChild('loc', htmlspecialchars($blog_url));
                $new_url->addChild('lastmod', date('Y-m-d\TH:i:sP')); // Last modified time
                $new_url->addChild('priority', '0.64'); // Set priority if needed
            }
        }
    
        // Save the updated sitemap
        $sitemap->asXML($sitemap_path);
    
        echo json_encode(['status' => 'success', 'message' => 'All blogs added to sitemap.']);
    }
    
}
