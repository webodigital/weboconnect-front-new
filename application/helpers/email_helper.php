<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed'); 

function sendEmail($subject, $messages, $to, $CI)
{

	$CI->load->library('email');
	
	$config['protocol']='smtp';
	$config['smtp_host']='smtp.hostinger.com';
	$config['smtp_port']=587;
	$config['smtp_timeout']=30;
	$config['smtp_user']='info@staffinc.io';
	$config['smtp_pass']='Staff-$abc-2024';
	$config['charset']='utf-8';
	$config['mailtype']='html';    
	$config['newline'] = "\r\n";
	$CI->email->initialize($config);
	
	$CI->email->from('info@staffinc.io', 'StaffInc');
	$CI->email->to($to);
	$CI->email->subject($subject); 
	$CI->email->message($messages);
	if($CI->email->send()) {
		return true;
	}else{
		return false;
		echo $CI->email->print_debugger(array('headers'));
	}
}
