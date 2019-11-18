<?php
/*
All Work No Play Makes jack A dull Boy
@pujiermanto-codesyariah
@ourcitrus by pt.gemilang citrus berjaya
@copyright-2019
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Emailorder extends CI_Controller {

	public function __construct() 
    {
        parent::__construct();
        check_not_login();
        //check_admin();
    }

	public function index()
	{
		$data['title'] = "Email Order";
		$data['logo_min'] = "<span class='logo-mini'><b>O</b>C</span>";
		$data['logo_max'] = "<span class='logo-lg'><b>OURCITRUS</b></span> <i class='fa fa-cubes'></i>";

		$data['row'] = $this->order_m->TampilOrder();
		$data['files'] = $this->file->TampilFile();
		$data['join'] = $this->file->joinTable();
		$this->template->load('admin/template', 'admin/emailorder', $data);
	}
	

}