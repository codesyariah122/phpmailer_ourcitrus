<?php
require_once(APPPATH. 'libraries/phpmailer/PHPMailerAutoload.php');
//require_once(APPPATH. 'libraries/phpmailer/class.smtp.php');

class EmailService extends CI_Controller {
	private $emailSend = "ourcitrus@ourcitrus.id";
	
	
	public function index()
	{
		$data['title'] = "OURCITRUS | Admin";
				
                        $this->template->load('template', 'email-service/email_service', $data);
						$this->load->view('chat.php');
	}
	
	public function EmailOrder()
	{		
	
	$this->load->library('form_validation');
				$this->form_validation->set_rules('fullName','Nama Lengkap','required');
				$this->form_validation->set_rules('userEmail','Alamat Email','required');
				$this->form_validation->set_rules('username','UserName','required');
				//$this->form_validation->set_rules('bank','Bank','required');
				//$this->form_validation->set_rules('norek','noRekening','required');
				$this->form_validation->set_rules('content','Pesan(Message)','required');
				
				
				$this->form_validation->set_message('required', '%s Masih Kosong Silahkan Diisi Gan');
				$this->form_validation->set_error_delimiters('<div class="alert alert-danger mt-2" role="alert">', "</div>");
		if ($this->form_validation->run() == FALSE)
        {
		$data['title'] = "OurCitrus | EmailOrder";
		$this->template->load('template', 'Form_Mail_service/emailorder', $data);
		$this->load->view('chat.php');
		}else{
			if(isset($_POST['add'])):
			$mail = new PHPMailer();
				$post=$this->input->post(null, TRUE);
					$body = '
						<html>
						<body>
						<h1>OurCitrus Email Service</h1>
						<p style="color:salmon; font-weight:bold;">from : '.$post['fullName'].'<br/>
						subject : '.$post['subject'].'</p>
						<table border="1">
						<tr style="background-color:#F8F8FF;">
						<th>Username</th>
						<th>Email</th>
						<th>Telp</th>
						<th>Whatsapp</th>
						<th>Layanan</th>
						<th>Message</th>
						</tr>
						<tr>
						<td>'
						.$post['username'].'</td>
						<td>'.$post['userEmail'].'</td>
						<td>'.$post['notelp'].'</td>
						<td>'.$post['wa'].'</td>
						<td>'.$post['subject'].'</td>
						<td>'.$post["content"].'</td>
						</tr>
						</table>';
				$mail->IsSMTP();
				$mail->SMTPDebug = 0;
				$mail->SMTPAuth = TRUE;
				$mail->SMTPSecure = "ssl";
				$mail->Port     = 465;  
				$mail->Username = "ourcitrus2019@gmail.com";
				$mail->Password = "Bismillah_|123654789";
				$mail->Host     = "ssl://smtp.googlemail.com";
				$mail->Mailer   = "smtp";
				
				$mail->SetFrom($_POST['userEmail'], htmlspecialchars(strtolower(str_replace(" ","", $_POST["fullName"]))));
				$mail->AddAddress($this->emailSend);
				$mail->AddReplyTo($_POST["userEmail"], htmlspecialchars(strtolower(str_replace(" ","", $_POST["fullName"]))));
					
				$mail->Subject = htmlspecialchars($post["subject"]);
				$mail->WordWrap   = 80;
				//$mail->Body = $post['username'];
				//$mail->AltBody = $post['norek'];
				$mail->MsgHTML($body);
				
				foreach ($_FILES["attachment"]["name"] as $k => $v) {
					$mail->AddAttachment( $_FILES["attachment"]["tmp_name"][$k], $_FILES["attachment"]["name"][$k] );
				}
				
				$mail->IsHTML(true);
				if(!$mail->Send()) {
					$this->session->set_flashdata('error', 'Gagal Mengirim Email!');
					redirect('MailSend/err_page?id=err');
				} else {
					
					$this->order_m->add($post);
					
					$this->session->set_flashdata('success', 'Data Berhasil disimpan ke database ourcitrus');
					
					echo "<script>
					alert('Hai ".$post['fullName']."\\nTerima kasih sudah menghubungi kami \\nEmail Anda : ".$post['userEmail']."\\nkami telah merespon email anda dan akan segera diproses oleh management kami \\nby ourcitrus team.');
					window.location.href='".base_url()."MailSend/success_page?id=success';
					</script>";
					
					// lanjut upload file dan insert ke database
					
				$filesCount = count($_FILES['attachment']['name']);
						for($i = 0; $i < $filesCount; $i++){
						$_FILES['file']['name']     = $_FILES['attachment']['name'][$i];
						$_FILES['file']['type']     = $_FILES['attachment']['type'][$i];
						$_FILES['file']['tmp_name'] = $_FILES['attachment']['tmp_name'][$i];
						$_FILES['file']['error']     = $_FILES['attachment']['error'][$i];
						$_FILES['file']['size']     = $_FILES['attachment']['size'][$i];
						
						// File upload configuration
						$uploadPath = 'uploads/email/';
						$config['upload_path'] = $uploadPath;
						$config['allowed_types'] = '*';
						
						// Load and initialize upload library
						$this->load->library('upload', $config);
						$this->upload->initialize($config);
                
                // Upload file to server
                if($this->upload->do_upload('file')){
                    // Uploaded file data
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
					$uploadData[$i]['username'] = $_POST['userName'];
                    $uploadData[$i]['uploaded_on'] = date("Y-m-d H:i:s");
                }
            }//for
            
            if(!empty($uploadData)){
                // Insert files data into the database
                $insert = $this->file->insert($uploadData);
                
                // Upload status message
                $statusMsg = $insert?'Files uploaded successfully.':'Some problem occurred, please try again.';
                $this->session->set_flashdata('statusMsg',$statusMsg);
            }
        }	
		endif;		
							 
		}
	}
	
	//customer service
	public function CustomerService()
	{
	$this->load->library('form_validation');
				$this->form_validation->set_rules('fullName','Nama Lengkap','required');
				$this->form_validation->set_rules('userEmail','Alamat Email','required');
				$this->form_validation->set_rules('username','UserName','required');
				//$this->form_validation->set_rules('bank','Bank','required');
				//$this->form_validation->set_rules('norek','noRekening','required');
				$this->form_validation->set_rules('content','Pesan(Message)','required');
				$this->form_validation->set_message('required', '%s Masih Kosong Silahkan Diisi Gan');
				$this->form_validation->set_error_delimiters('<div class="alert alert-danger mt-2" role="alert">', "</div>");
		if ($this->form_validation->run() == FALSE)
        {
		$data['title'] = "OurCitrus | Customer Service";
		$this->template->load('template', 'Form_Mail_service/customerservice', $data);
		$this->load->view('chat.php');
		}else{
			if(isset($_POST['add'])):
			$mail = new PHPMailer();
				$post=$this->input->post(null, TRUE);
				
				if($post['gantinorek']):
				$aduan = "Ganti No Rekening";
				elseif($post['bonus']):
				$aduan = "Komplain Bonus";
				elseif($post['loginerr']):
				$aduan = "Permasalahan User Login";
				endif;
				
					$body = '
						<html>
						<body>
						<h1>OurCitrus Email Service</h1>
						<p style="color:firebrick; font-weight:bold;">from : '.$post['fullName'].'<br/>
						subject : '.$post['subject'].'</p>
						<table border="1">
						<tr style="background-color:#F8F8FF;">
						<th>Username</th>
						<th>Aduan</th>
						<th>Email</th>
						<th>No Telp</th>
						<th>WhatsApp</th>
						<th>Bank Sebelumnya</th>
						<th>Ganti Bank</th>
						<th>Message</th>
						</tr>
						<tr>
						<td>'
						.$post['username'].'</td>
						<td>'.$aduan.'</td>
						<td>'.$post['userEmail'].'</td>
						<td>'.$post['notelp'].'</td>
						<td>'.$post['wa'].'</td>
						<td> '.$post['banksebelumnya'].' - '.$post['noreksebelumnya'].' </td>
						<td> '.$post['bankbaru'].' - '.$post['norekbaru'].' </td>
						<td>'.$post["content"].'</td>
						</tr>
						</table>';

				$mail->IsSMTP();
				$mail->SMTPDebug = 3;
				$mail->SMTPAuth = TRUE;
				$mail->SMTPSecure = "ssl";
				$mail->Port     = 465;  
				$mail->Username = "ourcitrus2019@gmail.com";
				$mail->Password = "Bismillah_|123654";
				$mail->Host     = "ssl://smtp.googlemail.com";
				$mail->Mailer   = "smtp";
				
				$mail->SetFrom($_POST['userEmail'], htmlspecialchars(strtolower(str_replace(" ","", $_POST["fullName"]))));
				$mail->AddAddress($this->emailSend);
				$mail->AddReplyTo($_POST["userEmail"], htmlspecialchars(strtolower(str_replace(" ","", $_POST["fullName"]))));
					
				$mail->Subject = htmlspecialchars($post["subject"]);
				$mail->WordWrap   = 80;
				//$mail->Body = $post['username'];
				//$mail->AltBody = $post['norek'];
				$mail->MsgHTML($body);
				
				foreach ($_FILES["attachment"]["name"] as $k => $v) {
					$mail->AddAttachment( $_FILES["attachment"]["tmp_name"][$k], $_FILES["attachment"]["name"][$k] );
				}
				
				$mail->IsHTML(true);


				if(!$mail->Send()) {
					$this->session->set_flashdata('error', 'Gagal Mengirim Email!');
					redirect('MailSend/err_page?id=err');
				} else {
					
					$this->order_m->add($post);
					
					$this->session->set_flashdata('success', 'Data Berhasil disimpan ke database ourcitrus');
					echo "<script>
					alert('Hai ".$post['fullName']."\\nTerima kasih sudah menghubungi kami \\nEmail Anda : ".$post['userEmail']."\\nkami telah merespon email anda dan akan segera diproses oleh management kami \\nby ourcitrus team.');
					window.location.href='".base_url()."MailSend/success_page?id=success';
					</script>";
					
					// lanjut upload file dan insert ke database
					
				$filesCount = count($_FILES['attachment']['name']);
						for($i = 0; $i < $filesCount; $i++){
						$_FILES['file']['name']     = $_FILES['attachment']['name'][$i];
						$_FILES['file']['type']     = $_FILES['attachment']['type'][$i];
						$_FILES['file']['tmp_name'] = $_FILES['attachment']['tmp_name'][$i];
						$_FILES['file']['error']     = $_FILES['attachment']['error'][$i];
						$_FILES['file']['size']     = $_FILES['attachment']['size'][$i];
						
						// File upload configuration
						$uploadPath = 'uploads/email/';
						$config['upload_path'] = $uploadPath;
						$config['allowed_types'] = 'jpg|png|jpeg|xls|xlsx|pdf|docx|gif';
						
						// Load and initialize upload library
						$this->load->library('upload', $config);
						$this->upload->initialize($config);
                
                // Upload file to server
                if($this->upload->do_upload('file')){
                    // Uploaded file data
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
					/*$uploadData[$i]['username'] = $post['username1'];
					$uploadData[$i]['username'] = $post['username2'];
					$uploadData[$i]['username'] = $post['username3']; */
                    $uploadData[$i]['uploaded_on'] = date("Y-m-d H:i:s");
                }
            }//for
            
            if(!empty($uploadData)){
                // Insert files data into the database
                $insert = $this->file->insert($uploadData);
                
                // Upload status message
                $statusMsg = $insert?'Files uploaded successfully.':'Some problem occurred, please try again.';
                $this->session->set_flashdata('statusMsg',$statusMsg);
            }
        }	

		endif;		
							 
		}
	}
		
	//email revisi
	public function EmailRevisi()
	{		
	$this->load->library('form_validation');
				$this->form_validation->set_rules('fullName','Nama Lengkap','required');
				$this->form_validation->set_rules('userEmail','Alamat Email','required');
				//$this->form_validation->set_rules('notelp', 'NoTelp', 'required');
				//$this->form_validation->set_rules('wa', 'WA', 'required');
				//$this->form_validation->set_rules('username1','UserName','required');
				//$this->form_validation->set_rules('bank','Bank','required');
				//$this->form_validation->set_rules('norek','noRekening','required');
				$this->form_validation->set_rules('content','Pesan(Message)','required');
				
				
				$this->form_validation->set_message('required', '%s Masih Kosong Silahkan Diisi Gan');
				$this->form_validation->set_error_delimiters('<div class="alert alert-danger mt-2" role="alert">', "</div>");
		if ($this->form_validation->run() == FALSE)
        {
		$data['title'] = "OurCitrus | EmailRevisi";
		$this->template->load('template', 'Form_Mail_service/emailrevisi', $data);
		$this->load->view('chat.php');
		}else{
			if(isset($_POST['add'])):
			$mail = new PHPMailer();
				$post=$this->input->post(null, TRUE);
				
				if($post['gantinorek']):
				$aduan = "Ganti No Rekening";
				elseif($post['loginerr']):
				$aduan = "Ganti password login";
				elseif($post['gantinorek'] || $post['loginerr']):
				$aduan = "Ganti password login | Revisi Data Bank";
				endif;
				
					$body = '
						<html>
						<body>
						<h1>OurCitrus Email Service</h1>
						<p style="color:Crimson; font-weight:bold;">from : '.$post['fullName'].'<br/>
						subject : '.$post['subject'].'</p>
						<table border="1">
						<tr style="background-color:#F8F8FF;">
						<th>Username</th>
						<th>Aduan</th>
						<th>Email</th>
						<th>No Telp</th>
						<th>No WhatsApp</th>
						<th>Bank</th>
						<th>Message</th>
						</tr>
						<tr>
						<td>'
						.$post['username'].'</td>
						<td>'.$aduan.'</td>
						<td>'.$post['userEmail'].'</td>
						<td>'.$post['notelp'].'</td>
						<td>'.$post['wa'].'</td>
						<td> '.$post['bank'].' - '.$post['norek'].' </td>
						<td>'.$post["content"].'</td>
						</tr>
						</table>';

				$mail->IsSMTP();
				$mail->SMTPDebug = 0;
				$mail->SMTPAuth = TRUE;
				$mail->SMTPSecure = "ssl";
				$mail->Port     = 465;  
				$mail->Username = "ourcitrus2019@gmail.com";
				$mail->Password = "Bismillah_|123654";
				$mail->Host     = "ssl://smtp.googlemail.com";
				$mail->Mailer   = "smtp";
				
				$mail->SetFrom($_POST['userEmail'], htmlspecialchars(strtolower(str_replace(" ","", $_POST["fullName"]))));
				$mail->AddAddress($this->emailSend);
				$mail->AddReplyTo($_POST["userEmail"], htmlspecialchars(strtolower(str_replace(" ","", $_POST["fullName"]))));
					
				$mail->Subject = htmlspecialchars($post["subject"]);
				$mail->WordWrap   = 80;
				//$mail->Body = $post['username'];
				//$mail->AltBody = $post['norek'];
				$mail->MsgHTML($body);
				
				foreach ($_FILES["attachment"]["name"] as $k => $v) {
					$mail->AddAttachment( $_FILES["attachment"]["tmp_name"][$k], $_FILES["attachment"]["name"][$k] );
				}

				$mail->IsHTML(true);


				if(!$mail->Send()) {
					$this->session->set_flashdata('error', 'Gagal Mengirim Email!');
					redirect('MailSend/err_page?id=err');
				} else {
					
					$this->order_m->add($post);
					
					$this->session->set_flashdata('success', 'Data Berhasil disimpan ke database ourcitrus');
					echo "<script>
					alert('Hai ".$post['fullName']."\\nTerima kasih sudah menghubungi kami \\nEmail Anda : ".$post['userEmail']."\\nkami telah merespon email anda dan akan segera diproses oleh management kami \\nby ourcitrus team.');
					window.location.href='".base_url()."MailSend/success_page?id=success';
					</script>";
					
					// lanjut upload file dan insert ke database
					
				$filesCount = count($_FILES['attachment']['name']);
						for($i = 0; $i < $filesCount; $i++){
						$_FILES['file']['name']     = $_FILES['attachment']['name'][$i];
						$_FILES['file']['type']     = $_FILES['attachment']['type'][$i];
						$_FILES['file']['tmp_name'] = $_FILES['attachment']['tmp_name'][$i];
						$_FILES['file']['error']     = $_FILES['attachment']['error'][$i];
						$_FILES['file']['size']     = $_FILES['attachment']['size'][$i];
						
						// File upload configuration
						$uploadPath = 'uploads/email/';
						$config['upload_path'] = $uploadPath;
						$config['allowed_types'] = '*';
						
						// Load and initialize upload library
						$this->load->library('upload', $config);
						$this->upload->initialize($config);
                
                // Upload file to server
                if($this->upload->do_upload('file')){
                    // Uploaded file data
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
					$uploadData[$i]['username'] = $post['username'];
                    $uploadData[$i]['uploaded_on'] = date("Y-m-d H:i:s");
                }
            }//for
            
            if(!empty($uploadData)){
                // Insert files data into the database
                $insert = $this->file->insert($uploadData);
                
                // Upload status message
                $statusMsg = $insert?'Files uploaded successfully.':'Some problem occurred, please try again.';
                $this->session->set_flashdata('statusMsg',$statusMsg);
            }
        }	

		endif;		
							 
		}
	}
	
}