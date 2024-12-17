    <?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Theme extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct();
            $this->load->model('ThemeModel');
            $this->load->helper('url');
        }
        private function load_view($view, $data = [])
        {
            $this->load->view('frontend/common/header', $data);
            $this->load->view($view, $data);
            $this->load->view('frontend/common/footer', $data);
        }
        public function index()
        {
            $data['title'] = 'Color Theme';
            $data['header_background'] = $this->ThemeModel->get_color('header-background');
            $data['colors'] = $this->ThemeModel->get_all_colors();
            $this->load_view('backend/theme/index', $data);
        }
        public function getColorCodes() {
            $data['colors'] = $this->ThemeModel->get_all_colors(); // Fetch color codes from model
            $this->load->view('backend/theme/styles', $data);
        }
        public function save()
        {
            try {
                //code...
                $name = $this->input->post('name');
                $color = $this->input->post('favcolor');

                if ($name && $color) {
                    $existing = $this->ThemeModel->get_color_by_name($name);
                    if ($existing) {
                        // Update the color
                        $this->ThemeModel->update_color($name, $color);
                        $response = ['status' => 'success', 'message' => 'Color updated successfully!'];
                    } else {
                        // Insert new color
                        $this->ThemeModel->save_color($name, $color);
                        $response = ['status' => 'success', 'message' => 'Color saved successfully!'];
                    }
                } else {
                    $response = ['status' => 'error', 'message' => 'Failed to save color.'];
                }

                echo json_encode($response);
            } catch (\Throwable $th) {
                print_r($th);
            }
        }
        public function dynamicCss() {
            header("Content-Type: text/css");
            $header_background_color = $this->ThemeModel->get_header_background_color();
            $header_text_color = $this->ThemeModel->get_header_text_color(); 
            $footer_background_color = $this->ThemeModel->get_footer_background_color();
            $footer_text_color = $this->ThemeModel->get_footer_text_color(); 
            
            $data = [
                'header_background_color' => isset($header_background_color['color']) ? $header_background_color['color'] : '#ffffff',
                'header_text_color' => isset($header_text_color['color']) ? $header_text_color['color'] : '#212529',
                'footer_background_color' => isset($footer_background_color['color']) ? $footer_background_color['color'] : '#ffffff',
                'footer_text_color' => isset($footer_text_color['color']) ? $footer_text_color['color'] : '#212529'
            ];
            $this->load->view('backend/theme/dynamic_css', $data);
        }
    }
