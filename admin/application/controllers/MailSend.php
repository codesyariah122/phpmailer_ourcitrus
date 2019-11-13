<?php
require_once(APPPATH. 'libraries/phpmailer/PHPMailerAutoload.php');
class MailSend extends CI_Controller {
	private $emailSend = "ourcitrus@ourcitrus.id";
	public function index()
	{
		if(isset($_POST['add'])){
		
			$mail = new PHPMailer();
			$post=$this->input->post(null, TRUE);
				$mail->IsSMTP();
				$mail->SMTPDebug = 0;
				$mail->SMTPAuth = TRUE;
				$mail->SMTPSecure = "tls";
				$mail->Port     = 587;  
				$mail->Username = "ourcitrus2019@gmail.com";
				$mail->Password = "OurCitrus_2019";
				$mail->Host     = "smtp.googlemail.com";
				$mail->Mailer   = "smtp";
				
				$mail->SetFrom($this->emailSend, htmlspecialchars(strtolower(str_replace(" ","", $_POST["userName"]))));
				$mail->AddAddress($_POST['userEmail']);
				$mail->AddReplyTo($_POST["userEmail"], htmlspecialchars(strtolower(str_replace(" ","", $_POST["userName"]))));
					
				$mail->Subject = htmlspecialchars($post["subject"]);
				$mail->WordWrap   = 80;
				$mail->MsgHTML($post["content"]);
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
					alert('Hai ".$post['userName']."\\nTerima kasih sudah menghubungi kami \\nEmail Anda : ".$post['userEmail']."\\nkami telah merespon email anda dan akan segera diproses oleh management kami \\nby ourcitrus team.');
					window.location.href='MailSend/success_page?id=success';
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
						$config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|xlsx|docx';
						
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
 				
							 
	}
        
}
	
	public function success_page()
	{
		$data['title'] = "Success Page";
	
		$this->template->load('template', 'email-service/success_page', $data);
	}
	
	public function err_page()
	{
		$data['title'] = "error Page";
				$this->template->load('template', 'email-service/err_page', $data);

	}
	
}