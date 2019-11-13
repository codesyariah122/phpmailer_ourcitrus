<?php
class Admin extends CI_Controller {
	
	public function login()
	{
		$data['title'] = 'Admin | Page';
		
		$data['h1'] = "Welcome in My Website";
		
		$data['title'] = "Dashboard";
		$data['logo'] = "<span class='text-info'>Dashboard  <i class='fa fa-cubes'></i></span>";
		$data['logo_min'] = "<span class='logo-mini text-success'><b>O</b>C</span>";
		$data['logo_max'] = "<span class='logo-lg text-success'><b>OURCITRUS</b></span>";
		
		if(!check_already_login()):
		$this->load->view('admin/login', $data);
		endif;
	}
	
	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($post['login'])){
			$this->load->model('admin_m');
			$query=$this->admin_m->login($post);
			
			if($query->num_rows() > 0){
				$row = $query->row();
				
				$params = [
				'userid' => $row->user_id,
				'level' => $row->level,
				'username' => $row->username,
				'name' => $row->name
				];
				
				$this->session->set_userdata($params);
				
				echo "<script>
				alert('selamat login berhasil, anda login sebagai ".$row->username ."');
				window.location.href='" .site_url('dashboard') ."';
				</script>";
			}else{
				$this->session->set_flashdata('wrong', 'login gagal username atau password salah');
				redirect('admin/login');
			}
		}
	}
		
		public function logout()
		{
			$params = ['userid', 'level'];
			$this->session->unset_userdata($params);
			redirect('admin/login');
		}
	
	
}