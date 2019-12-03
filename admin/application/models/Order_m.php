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
				if($post['gantinorek']):
				$aduan = "Ganti No Rekening";
				elseif($post['bonus']):
				$aduan = "Komplain Bonus";
				elseif($post['loginerr']):
				$aduan = "Lupa / Ganti Password";
				elseif($post['subject'] == 'email-order'):
				$aduan = "Order Via Email";
				endif;
		$bank1 = $post['banksebelumnya'];
		$bank1 .= ' - '; 
		$bank1 .= $post['noreksebelumnya'];
		$bank2 = $post['bankbaru'];
		$bank2 .= ' - ';
		$bank2 .= $post['norekbaru'];
        $params = [
                    'nama' => htmlspecialchars(strtolower(str_replace(' ','', $post['fullName']))),
					'email' => $post['userEmail'],
					'username' => $post['username'],
					'notelp' => $post['notelp'],
					'wa' => $post['wa'],
					'aduan' => $aduan,
					'bank1' => $bank1,
					'bank2' => $bank2,
					//'image' => $post['image'],
					'subject' => $post['subject'],
					'pesan' => $post['content']
        ];
			$this->db->insert($this->table, $params);
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
		
	