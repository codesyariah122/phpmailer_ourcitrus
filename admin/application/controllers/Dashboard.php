<?php
class Dashboard extends CI_Controller {
	
	public function index()
	{
		check_not_login();
		$data['website_name'] = "OURCITRUS";
		$data['title'] = "Dashboard";
		$data['logo_min'] = "<span class='logo-mini'><b>O</b>C</span>";
		$data['logo_max'] = "<span class='logo-lg'><b>OURCITRUS</b></span> <i class='fa fa-cubes'></i>";
		$data['usertotal'] = $this->admin_m->jumlahuser();
		$data['mailorder'] = $this->order_m->total_mail_order();
		$data['mailrevisi'] = $this->order_m->total_mail_revisi();
		$data['customerservice'] = $this->order_m->total_customer_service();
		//$data['itemtotal'] = $this->item_m->jumlahitem();
		$this->template->load('admin/template','admin/dashboard', $data);
	}
	
}