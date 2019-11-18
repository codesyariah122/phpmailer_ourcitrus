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
					'email' => $post['userEmail'],
					'subject' => $post['subject'],
					//'image' => $post['image'],
					'pesan' => $post['content']
        ];
			$this->db->insert($this->table, $params);
    }

       public function del($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('data');
    }
	
	public function TampilOrder(){
		return $this->db->query("SELECT id, nama, email, subject, pesan, created, updated FROM data WHERE subject='email-order'");
	}
	
	public function TampilRevisi(){
		return $this->db->query("SELECT id, nama, email, subject, pesan, created, updated FROM data WHERE subject='email-revisi'");
	}
	
	public function TampilService(){
		return $this->db->query("SELECT id, nama, email, subject, pesan, created, updated FROM data WHERE subject='customer-service'");
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
		
	