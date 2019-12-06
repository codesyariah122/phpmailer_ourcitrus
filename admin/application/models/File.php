<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class File extends CI_Model{
	private $tableName;
    function __construct() {
        $this->tableName = 'files';
    }
    
    /*
     * Fetch files data from the database
     * @param id returns a single record if specified, otherwise all records
     */
    public function getRows($id=''){
        $this->db->select('*');
        $this->db->from('files');
        if($id != null){
            $this->db->where('id_files', $id);
        }

        $query = $this->db->get();
        return $query;
    }
	
	public function tampilFiles()
	{
		$query = $this->db->query("SELECT * FROM files;");
		return $query;
	}
	
	public function tampilUsernameFiles()
	{
		$query = $this->db->query("SELECT username FROM files;");
		return $query;
	}
    
    /*
     * Insert file data into the database
     * @param array the data for inserting into the table
     */
    public function insert($data = array()){
        $insert = $this->db->insert_batch($this->tableName,$data);
        return $insert?true:false;
    }
	
	
}