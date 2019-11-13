<?php
class File extends CI_Controller{
	
    function __construct(){
        parent::__construct();
 
    }
    function index(){
        $this->load->view('upload');
    }
    function upload_image(){
        $config['upload_path'] = './uploads/images/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
 
        $this->load->library('upload',$config);
        for ($i=1; $i <=5 ; $i++){ 
            if(!empty($_FILES['filefoto'.$i]['name'])){
                if(!$this->upload->do_upload('filefoto'.$i))
                    $this->upload->display_errors();  
                else
                    echo "Foto berhasil di upload";
            }
        }
                 
    }
}