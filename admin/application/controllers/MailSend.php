<?php
require_once(APPPATH. 'libraries/phpmailer/PHPMailerAutoload.php');
class MailSend extends CI_Controller {

	public function success_page()
	{
		$data['title'] = "Success Page";
	
		$this->template->load('template', 'email-service/success_page', $data);
		$this->load->view('chat.php');
	}
	
	public function err_page()
	{
		$data['title'] = "error Page";
				$this->template->load('template', 'email-service/err_page', $data);

	}
	
}