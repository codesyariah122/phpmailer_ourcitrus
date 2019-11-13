<?php
defined('BASEPATH') or exit('No direct access allowed');

class Email extends CI_Controller {
	
	
	public function sendingMail()
	{		
		$data = [];
			/*$config['upload_path'] = './uploads/email/';
			$config['allowed_types'] = '*';
			$config['max_size']     = 5048;
			$config['file_name'] = 'item-'.date('ymg').'-'.substr(md5(rand()),0,10);
			$this->load->library('upload', $config); */
			$countfiles = count($_FILES['files']['name']);
			for($i=0;$i<$countfiles;$i++){
			$_FILES['file']['name'] = $_FILES['files']['name'][$i];
			$_FILES['file']['type'] = $_FILES['files']['type'][$i];
			$_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
			$_FILES['file']['error'] = $_FILES['files']['error'][$i];
			$_FILES['file']['size'] = $_FILES['files']['size'][$i];
			
		$config['upload_path'] = './uploads/email/'; 
        $config['allowed_types'] = '*';
        $config['max_size'] = '5000000'; // max_size in kb
        $config['file_name'] = $this->input->post('nama')."-".$_FILES['files']['name'][$i];
		$this->load->library('upload',$config);
		
		if(isset($_POST['add'])){
			
			$post = $this->input->post(null, TRUE);
			
			if($this->upload->do_upload('file')){  
			
			$uploadData = $this->upload->data();
			$filename = $uploadData['file_name'];
			//$data['files'][] = $filename;
			
			$data = [ 
			'nama' => $post['nama'],
			'email' => $post['email'],
			'subject' => $post['subject'],
			'pesan' => $post['pesan'],
			'files' => $filename
			];
			
			$this->db->insert('data', $data);
			
				//$post['image'] = $this->upload->data('file_name');
			
			$name = $post['nama'];
			$email = $post['email'];
			$subject = $post['subject'];
			//$image = $post['image'];
			//$file = $post['filename'][];
			$pesan = $post['pesan'];
			
		$config = [
		'protocol' => 'smtp',
		'smtp_host' => 'ssl://smtp.googlemail.com',
		'smtp_port' => 465,
		'smtp_user' => 'ourcitrus2019@gmail.com',
		'smtp_pass' => 'OurCitrus_2019',
		'mailtype' => 'html',
		'charset' => 'iso-8859-1'
		];
		
		$this->load->library('email', $config);
			
			//$this->order_m->add($post);
		
			$this->session->set_flashdata('success', 'Data Berhasil disimpan ke database ourcitrus');
		
		$dir = "./uploads/email/".$filename;
		
		$this->email->set_newline("\r\n");
	
		$this->email->from($email, $name);
		
		$this->email->to('ourcitrus@ourcitrus.id');
	
		$this->email->subject($subject);
		
		$this->email->attach($dir);
		
		$this->email->message($pesan);
	
		if($this->email->send()){
		
		echo "<script>
		alert('Hai ".$name."\\nTerima kasih sudah menghubungi kami \\nEmail Anda : ".$email."\\nkami telah merespon email anda dan akan segera diproses oleh management kami \\nby ourcitrus team.');
		window.location.href='success_page?id=success';
		</script>";
		
		return $this->email->send();	
		
			}else{
				$this->session->set_flashdata('error', $error);
			}
				
		}else{
			$error = $this->upload->display_errors();
            $this->session->set_flashdata('error', $error);
			redirect('EmailService');
		}
		
	}
	
	}//for loop

}
	
	public function autoreply($id)
	{
		$query = $this->order_m->get($id);
		if($query->num_rows() > 0):
			$unit = $query->row();
			$data = [
					'page' => 'edit',
					'row' => $unit
		];
		
		$data['title'] = "Edit Data unit";
		$data['logo_min'] = "<span class='logo-mini'><b>O</b>C</span>";
		$data['logo_max'] = "<span class='logo-lg'><b>OURCITRUS</b></span> <i class='fa fa-cubes'></i>";

		$this->template->load('admin/template', 'admin/email_form', $data);
		else:
			echo "<script>alert('Data tidak ditemukan');";
            echo "window.location.href='".site_url('unit')."';</script>";
        endif;
	}
	
	public function replyproses()
	{
		$config = [
		'protocol' => 'smtp',
		'smtp_host' => 'ssl://smtp.googlemail.com',
		'smtp_port' => 465,
		'smtp_user' => 'ourcitrus2019@gmail.com',
		'smtp_pass' => 'OurCitrus_2019',
		'mailtype' => 'html',
		'charset' => 'iso-8859-1'
		];
		
		$this->load->library('email', $config);
		
		$post = $this->input->post(null, TRUE);
		$nama = $post['nama'];
		$email = $post['email'];
		$subject = "OURCITRUS Email Service";
		$pesan = "
		<b>Terima kasih ".$nama."</b>,<br/>

		<p>Email Anda ".$email." sudah kami terima dengan baik dan masuk kedalam antrian.<br/>
		Mohon menunggu - Kami akan segera memprosesnya.<br/>

		<b>Salam Gemilang!</b></p>";
		
		if(isset($_POST['autoreply'])){
			$this->session->set_flashdata('success', 'Data Berhasil disimpan ke database ourcitrus');
		
		//kirim ke email
		$this->email->set_newline("\r\n");
	
		$this->email->from('ourcitrus2019@gmail.com');
		
		$this->email->to($email, $nama);
	
		$this->email->subject($subject);
		
		$this->email->message($pesan);
	
		if($this->email->send()):
		
		echo "reply ke email ".$email." Berhasil";
		
		redirect("dashboard");
		
		return $this->email->send();

		
		else:
		echo "pesan anda gagal di proses";
		endif;	
		}
		
	}

		public function del($id)
	{
		$this->order_m->del($id);
		if($this->db->affected_rows() > 0){
		$this->session->set_flashdata('del', 'Data Berhasil hapus dari database');			
		redirect('unit');
		}
	}
	
	
	public function success_page()
	{
		$data['title'] = "Success Page";
	
		$this->template->load('template', 'email-service/success_page', $data);
	}
	
	public function wrong_page()
	{
		$data['title'] = "Err Page";
		$this->template->load('template', 'email-service/err_page', $data);
	}
	
}