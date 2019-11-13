<?php
class EmailService extends CI_Controller {
	
	public function index()
	{
		
		$service = new stdClass();
		$service->id = null;
		$service->nama = null;
		$service->email = null;
		$service->subject = null;
		$service->pesan = null;
		
		$data = [
					'service' => $service //mengambil dari data $unit diatas
		];
		$data['title'] = "OURCITRUS | Admin";
		
		$data['row'] = $this->admin_m->get();
		
		$data['subject'] = $this->db->get('unit')->result();
		
		if ($this->form_validation->run() == FALSE)
                {
                        $this->template->load('template', 'email-service/email_service', $data);
                }
                else
                {
                        $this->load->view('formsuccess');
                }
		
	}
	
}