<?php

class Order_m extends CI_Model {
	
	private $table = 'data';
	
	public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('data');
        if($id != null){
            $this->db->where('id', $id);
        }

        $query = $this->db->get();
        return $query;
    }
	
	public function add($post, $data =[])
    {
        $params = [
                    'nama' => htmlspecialchars(strtolower(str_replace(' ','', $_POST['fullName']))),
					'email' => $_POST['userEmail'],
					'username' => $_POST['username'],
					'notelp' => $_POST['notelp'],
					'wa' => $_POST['wa'],
					//'image' => $_POST['image'],
					'subject' => $_POST['subject'],
					'pesan' => $_POST['content']
        ];
			$this->db->insert($this->table, $params);
    }
	
	public function cs()
	{
		if($_POST['gantinorek']):
				$aduan = "Ganti No Rekening";
		elseif($_POST['bonus']):
				$aduan = "Komplain Bonus";
		elseif($_POST['loginerr']):
				$aduan = "Lupa / Ganti Password";
		else:
				$aduan = "tidak ada";
		endif;
		$bank1 = $_POST['banksebelumnya'];
		$bank1 .= ' - '; 
		$bank1 .= $_POST['noreksebelumnya'];
		$bank2 = $_POST['bankbaru'];
		$bank2 .= ' - ';
		$bank2 .= $_POST['norekbaru'];
        $params = [
                    'nama' => htmlspecialchars(strtolower(str_replace(' ','', $_POST['fullName']))),
					'email' => $_POST['userEmail'],
					'username' => $_POST['username'],
					'notelp' => $_POST['notelp'],
					'wa' => $_POST['wa'],
					'aduan' => $aduan,
					'bank1' => $bank1,
					'bank2' => $bank2,
					//'image' => $_POST['image'],
					'subject' => $_POST['subject'],
					'pesan' => $_POST['content']
					];
	}
	
	public function revisi()
	{
		if($_POST['gantinorek']):
				$aduan = "Ganti No Rekening";
		elseif($_POST['bonus']):
				$aduan = "Komplain Bonus";
		elseif($_POST['loginerr']):
				$aduan = "Lupa / Ganti Password";
		else:
				$aduan = "tidak ada";
		endif;
				
		$bank1 = $_POST['banksebelumnya'];
		$bank1 .= ' - '; 
		$bank1 .= $_POST['noreksebelumnya'];
		$bank2 = $_POST['bankbaru'];
		$bank2 .= ' - ';
		$bank2 .= $_POST['norekbaru'];
        $params = [
                    'nama' => htmlspecialchars(strtolower(str_replace(' ','', $_POST['fullName']))),
					'email' => $_POST['userEmail'],
					'username' => $_POST['username'],
					'notelp' => $_POST['notelp'],
					'wa' => $_POST['wa'],
					'aduan' => $aduan,
					'bank1' => $bank1,
					'bank2' => $bank2,
					//'image' => $_POST['image'],
					'subject' => $_POST['subject'],
					'pesan' => $_POST['content']
					];
	}

       public function del($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('data');
    }
	
	public function ambilusernameData()
	{
		$query = $this->db->query('SELECT id, username FROM data');
		return $query;
	}
	
	public function TampilOrder(){
		return $this->db->query("SELECT id, nama, email, username, subject, pesan, created, updated FROM data WHERE subject='email-order'");
	}
	
	public function TampilRevisi(){
		return $this->db->query("SELECT id, nama, email, username, subject, pesan, created, updated FROM data WHERE subject='email-revisi'");
	}
	
	public function TampilService(){
		return $this->db->query("SELECT id, nama, email, username, subject, pesan, created, updated FROM data WHERE subject='customer-service'");
	}
	
	public function input_data($table, $data){
		$this->db->insert($table, $data);
	}
	
	public function total_mail_order()
	{
		$query = $this->db->query("SELECT id , nama FROM data WHERE subject='email-order'");
        $total = $query->num_rows();
        return $total;
	}
	
	public function total_mail_revisi()
	{
		$query = $this->db->query("SELECT id , nama FROM data WHERE subject='email-revisi'");
        $total = $query->num_rows();
        return $total;
	}
	
	public function total_customer_service()
	{
		$query = $this->db->query("SELECT id , nama FROM data WHERE subject='customer-service'");
        $total = $query->num_rows();
        return $total;
	}

}
		
	