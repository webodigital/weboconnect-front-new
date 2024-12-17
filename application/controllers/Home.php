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
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $message = $this->input->post('message');
		
		$captcha = $this->captcha_verify();

        $error = [];
        if (empty($job_title))
            $error['job'] = 'Please enter job title!';
        if (empty($name))
            $error['name'] = 'Please enter full name!';
        if (empty($email))
            $error['email'] = 'Please enter email!';
        if (empty($message))
            $error['message'] = 'Please enter message!';
		if (!$captcha)
            $error['captcha'] = 'Please check the captcha form.';
        
        $tmp_name    = $_FILES['resume']['tmp_name']; // get the temporary file name of the file on the server 
        $file_name        = $_FILES['resume']['name'];  // get the name of the file 
        $size        = $_FILES['resume']['size'];  // get size of the file for size validation 
        $file_type        = $_FILES['resume']['type'];  // get type of the file 
        $file_error       = $_FILES['resume']['error']; // get the error (if any) 
      
        //validate form field for attaching the file 
        if($file_error > 0) 
        { 
            $error['resume'] = 'Upload error or No files uploaded';
        } 
        
        if (!empty($error)) {
            $result = ['s' => 'f', 'error' => $error];
        } else {
			
            $data['job_title'] = $job_title;
            $data['name'] = $name;
            $data['email'] = $email;
            $data['phone'] = $phone;
            $data['message'] = $message;
            
            //$body = $this->load->view('front/emailer/contactus',$data,TRUE);
            $this->load->database();
            $this->load->model('Contact_Model');
			$date = '%Y%m%d%h%i%s%a';
			$time = time();
			$new_name = mt_rand(100,999).mDate($date,$time);
			$config =  array(
				'upload_path' => "./uploads/careers",
				'allowed_types' => "txt|pdf|doc|docx",
				'overwrite' => False,
				'file_name'=>$new_name
			);			

			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if($this->upload->do_upload('resume'))
			{   
				$data['resume'] = $this->upload->data('file_name');
				if ($this->Contact_Model->add('webo_careers',$data)) {
				
					$message = '';
					/*foreach ($data as $key => $val) {
						$message .="<p><b>$key</b>:- $val</p>";
					}*/
					$message .='Job Title : '.$job_title.'--';
					$message .='Name : '.$name.'--';
					$message .='Email : '.$email.'--';
					$message .='Phone  : '.$phone.'--';
					$message .='Message: '.$data['message'].'--';
					
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
					
					if (mail('hr@weboconnect.com', 'Application for Job', $body, $headers)) {
					//if (mail('info@weboconnect.com', 'Application for Job', $body, $headers)) {
						$result = ['s' => 's', 'm' => 'Thanks for Applying. We will contact you soon.'];
						//echo "mail send ... OK"; // or use booleans here
					} else {
						$result = ['s' => 'f', 'error' => 'Something went wrong. Please try again.'];
					// echo "mail send ... ERROR!";
						//print_r( error_get_last() );
					}
					
					//mail('webo.phpdev@gmail.com', 'Application for Job', $body, $headers);
				//$result = ['s' => 's', 'm' => 'Thanks for Applying. We will contact you soon.'];
					//$this->send_mails($email, 'Thanks for contacting us', $body);

					
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
        //$captcha = $this->captcha_verify();

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
        
        /*if (!$captcha)
            $error['captcha'] = 'Please check the captcha form.';*/

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
        //if (!$captcha)
            //$error['captcha'] = 'Please check the captcha form.';

        if (!empty($error)) {
            $result = ['s' => 'f', 'error' => $error];
        } else {
            $data['phone'] = (($full_phone)?$full_phone:$phone);
            $data['description'] = $message;
            $data['name'] = $first_name.' '.$last_name;
            $data['email'] = $email;
            $data['development'] = $development?$development:'Other';
            $data['budget'] = $budget?$budget:'Not Sure';
            
            $body = $this->load->view('front/emailer/newenquiry',$data,TRUE);

            $this->load->database();
            $this->load->model('Contact_Model');
            if ($this->Contact_Model->add('webo_enquiry_now',$data)) {
            
    			$message = '';
    			foreach ($data as $key => $val) {
    				$message .="<p><b>$key</b>:- $val</p>";
    			}
    			$subject = "Enquiry from ".$phone;
    			$this->send_mails('info@weboconnect.com', $subject, $message);

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

