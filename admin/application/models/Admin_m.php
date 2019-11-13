<?php
class Admin_m extends CI_Model {
	
	public function login($post)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username', $post['username']);
		$this->db->where('password', sha1($post['password']));
		$query = $this->db->get();
		return $query;
	}
	public function getSubject()
	{
		$query = $this->db->query('SELECT * FROM user');
       
        return $query;
	}
	public function get($id = null)
	{
		$this->db->select('*');
		$this->db->from('user');
		if($id != null){
			$this->db->where('user_id', $id);
		}
		
		$query = $this->db->get();
		return $query;
	}
	
	 public function jumlahuser()
    {   
        $query = $this->db->query('SELECT * FROM user');
        $total = $query->num_rows();
        return $total;
    }

    public function add($post)
    {
        $params['name'] = $post['fullname'];
        $params['username'] = $post['username'];
        $params['password'] = sha1($post['password']);
        $params['address'] = $post['address'] != '' ? $post['address'] : null;
        $params['level'] = $post['level'];
        $params['ip_address'] = $this->input->ip_address();
        $this->db->insert('user', $params);
    }

    public function edit($post)
    {
        $params['name'] = $post['fullname'];
        $params['username'] = $post['username'];
        if(!empty($post['password'])){
            $params['password'] = sha1($post['password']);
        }
        $params['address'] = $post['address'] != '' ? $post['address'] : null;
        $params['level'] = $post['level'];
        $params['updated'] = date('Y-m-d H:i:s');
        $params['ip_address'] = $this->input->ip_address();

        $this->db->where('user_id', $post['user_id']);
        $this->db->update('user', $params);
    }

    public function del($id)
	{
        $this->db->where('user_id', $id);
        $this->db->delete('user');
    }
    
	
}