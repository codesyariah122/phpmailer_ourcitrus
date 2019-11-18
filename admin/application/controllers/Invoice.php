<?php
defined('BASEPATH') OR exit('No direct script access allow');

class Invoice extends CI_Controller {
	
	public function index()
	{
		$data['title'] = "Invoice Order Ourcitrus";
		$this->load->view('invoice.php');
	}
	
}