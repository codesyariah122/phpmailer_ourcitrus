<?php
/*
All Work No Play Makes Jack And Dull Boy
pujiermanto - 2019
*/

class User extends CI_Controller {
	
	public function __construct() 
    {
        parent::__construct();
        check_not_login();
        //check_admin();
    }
	public function index()
	{
		$data['title'] = "Email Revisi";
		$data['logo_min'] = "<span class='logo-mini'><b>O</b>C</span>";
		$data['logo_max'] = "<span class='logo-lg'><b>OURCITRUS</b></span> <i class='fa fa-cubes'></i>";
		
		$data['row'] = $this->user_m->get();
		
		$this->template->load("admin/template", "admin/user", $data);
	}
	
	public function add()
    {
        $data['title'] = "Tambah User Baru";
        $data['logo_min'] = "<span class='logo-mini'><b>O</b>C</span>";
        $data['logo_max'] = "<span class='logo-lg'><b>OURCITRUS</b></span> <i class='fa fa-cubes'></i>";

        $this->load->library('form_validation');

        $this->form_validation->set_rules('fullname', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[user.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
        $this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'required|matches[password]', ['matches' => '%s Tidak sesuai dengan password']);
        $this->form_validation->set_rules('level', 'Level', 'required');
        
        $this->form_validation->set_message('required', '%s Masih Kosong Silahkan Diisi');
        $this->form_validation->set_message('min_length', '{field} Minimal 5 Karakter');
        $this->form_validation->set_message('is_unique', '{field} Sudah Digunakan');
        
        //delimiter form_error
        $this->form_validation->set_error_delimiters('<span class="help-block">', "</span>");

        if ($this->form_validation->run() == FALSE)
        {
            $this->template->load('admin/template', 'admin/user_form_add', $data);
        }
        else
        {
               $post = $this->input->post(null, TRUE);
               $this->user_m->add($post);

               if( $this->db->affected_rows() > 0 ){
                    echo "<script>
                            alert('Data Berhasil Disimpan');
                        </script>";
               }
               echo "<script>window.location.href='".site_url('admin/user')."';</script>";
        }

    }

    public function edit($id)
    {
        $data['title'] = "Edit User";
        $data['logo_min'] = "<span class='logo-mini'><b>O</b>C</span>";
        $data['logo_max'] = "<span class='logo-lg'><b>OURCITRUS</b></span> <i class='fa fa-cubes'></i>";

        $this->form_validation->set_rules('fullname', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|callback_username_check');
        
        if($this->input->post('password')) {
        $this->form_validation->set_rules('password', 'Password', 'min_length[5]');
        $this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'matches[password]', ['matches' => '%s Tidak sesuai dengan password']);
        }


        $this->form_validation->set_rules('level', 'Level', 'required');      
        $this->form_validation->set_message('required', '%s Masih Kosong Silahkan Diisi');
        $this->form_validation->set_message('min_length', '{field} Minimal 5 Karakter');
        $this->form_validation->set_message('is_unique', '{field} Sudah Digunakan');
        
        //delimiter form_error
        $this->form_validation->set_error_delimiters('<span class="help-block">', "</span>");

        if ($this->form_validation->run() == FALSE)
        {
            $query = $this->user_m->get($id);
            
            if($query->num_rows() > 0){
            $data['row'] = $query->row();
            $this->template->load('admin/template', 'admin/user_form_edit', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan');";
            echo "window.location.href='".site_url('user')."';</script>";
        }
        
    }
        else
        {
               $post = $this->input->post(null, TRUE);
               
               $this->user_m->edit($post);

               if( $this->db->affected_rows() > 0 ){
                    echo "<script>
                            alert('Data Berhasil Disimpan');
                        </script>";
               }
               echo "<script>window.location.href='".site_url('user')."';</script>";
        }

    }

    function username_check() 
    {
        $post = $this->input->post(null, TRUE);
        $query = $this->db->query("SELECT * FROM user WHERE username = '$post[username]' AND user_id != '$post[user_id]'");

        if($query->num_rows() > 0){
            $this->form_validation->set_message('username_check', '{field} ini sudah dipakai, silahkan ganti');
            return FALSE;
        }else{
            return TRUE;
        }
    }



    public function del()
    {
        $id = $this->input->post('user_id');
        $this->user_m->del($id);

        if( $this->db->affected_rows() > 0 ){
            echo "<script>
                    alert('Data Berhasil Dihapus');
                </script>";
       }
       echo "<script>window.location.href='".site_url('user')."';</script>";
    }


}

	
