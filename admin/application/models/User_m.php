<?php
class User_m extends CI_Model {
	
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
	
}
		