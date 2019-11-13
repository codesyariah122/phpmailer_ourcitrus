$countfiles = count($_FILES['files']['name']);
			for($i=0;$i<$countfiles;$i++){
			$_FILES['file']['name'] = $_FILES['files']['name'][$i];
			$_FILES['file']['type'] = $_FILES['files']['type'][$i];
			$_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
			$_FILES['file']['error'] = $_FILES['files']['error'][$i];
			$_FILES['file']['size'] = $_FILES['files']['size'][$i];
			
		$config['upload_path'] = './uploads/email/'; 
        $config['allowed_types'] = '*';
        $config['max_size'] = '50000000'; // max_size in kb
        $config['file_name'] = $_FILES['files']['name'][$i];
		$this->load->library('upload',$config);
								
			if($this->upload->do_upload('file')){
			
			$uploadData = $this->upload->data();
			$filename = $uploadData['file_name'];
			//$data['files'][] = $filename;
			
			$data = [
			"files" => $_FILES['files']['name'][$i]
			];
			
			$this->db->insert('data', $data);
			$this->order_m->add($post);
				
			}else{
				$this->session->set_flashdata('error', $error);
			}

		}