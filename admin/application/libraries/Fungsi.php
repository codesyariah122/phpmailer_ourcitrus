<?php

class Fungsi {
	
	protected $ci;
	
	public function __construct()
	{
		$this->ci =& get_instance();
	}
	
	public function user_login()
	{
		$this->ci->load->model('admin_m');
		$user_id = $this->ci->session->userdata('userid');
		$user_data = $this->ci->admin_m->get($user_id)->row();
		return $user_data;
	}
	
	public function PdfGenerator($html, $filename, $paper, $orientation)
	{
		$dompdf = new Dompdf\Dompdf();
		$dompdf->loadHtml($html);
		
		$dompdf->setPaper($paper, $orientation);
		
		$dompdf->render();
		
		$dompdf->stream($filename, ['Attachment' => 0]);
	}
	
}