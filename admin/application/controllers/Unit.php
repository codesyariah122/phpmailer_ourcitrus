<?php
/*
All Work No Play Makes jack A dull Boy
@pujiermanto-codesyariah
@ourcitrus by pt.gemilang citrus berjaya
@copyright-2019
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Unit extends CI_Controller {

	public function __construct() 
    {
        parent::__construct();
        check_not_login();
        //check_admin();
    }

	public function index()
	{
		$data['website_name'] = "Deethree Beautycare";
		$data['title'] = "Unit Data";
		$data['logo_min'] = "<span class='logo-mini'><b>O</b>C</span>";
		$data['logo_max'] = "<span class='logo-lg'><b>OURCITRUS</b></span> <i class='fa fa-cubes'></i>";

		$data['row'] = $this->unit_m->get();

		$this->template->load('admin/template', 'admin/unit/unit_data', $data);
	}

	public function add()
	{
		$unit = new stdClass();
		$unit->unit_id = null;
		$unit->name = null;

		$data = [
					'page' => 'add',
					'row' => $unit //mengambil dari data $unit diatas
		];

		$data['website_name'] = "Deethree Beautycare";
		$data['title'] = "Tambah Data unit";
		$data['logo_min'] = "<span class='logo-mini'><b>O</b>C</span>";
		$data['logo_max'] = "<span class='logo-lg'><b>OURCITRUS</b></span> <i class='fa fa-cubes'></i>";
		
		$this->template->load('admin/template', 'admin/unit/unit_form', $data);
	}

	public function edit($id)
	{
		$query = $this->unit_m->get($id);
		if($query->num_rows() > 0):
			$unit = $query->row();
			$data = [
					'page' => 'edit',
					'row' => $unit
		];
		
		$data['title'] = "Edit Data unit";
		$data['logo_min'] = "<span class='logo-mini'><b>O</b>C</span>";
		$data['logo_max'] = "<span class='logo-lg'><b>OURCITRUS</b></span> <i class='fa fa-cubes'></i>";

		$this->template->load('admin/template', 'admin/unit/unit_form', $data);
		else:
			echo "<script>alert('Data tidak ditemukan');";
            echo "window.location.href='".site_url('unit')."';</script>";
        endif;
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);

		if(isset($_POST['add'])){

			$this->unit_m->add($post);

		}else if(isset($_POST['edit'])){
			$this->unit_m->edit($post);
		}

		if($this->db->affected_rows() > 0):
			$this->session->set_flashdata('success', 'Data Berhasil disimpan ke database');
		endif;
			redirect('unit');

	}

	public function del($id)
	{
		$this->unit_m->del($id);
		if($this->db->affected_rows() > 0){
		$this->session->set_flashdata('del', 'Data Berhasil hapus dari database');			
		redirect('unit');
		}
	}


}