<?php

class Profile extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		//sd mulai menggunakan method user model dan pemeriksaan login
		$this->load->model("UserModel");
		//load model pegawai
		$this->load->model("pegawai_model");
        $this->load->library('form_validation');
		clearstatcache();
		$this->UserModel->terotentikasi();
		//setelah itu modeluser
		//$this->load->model("user_model");
		// if($this->user_model->isNotLogin()) redirect(site_url(''));
	}

	public function index()
	{
		$username = $this->session->userdata('username');
		//ngambil seri username dari session yg telah ada
		$user = $this->UserModel->get($username); // Panggil fungsi get yang ada di UserModel.php
		$datas = array(
			//'data_unit'=> $pegawai->getById($id),
			'username'=>$user->nik,  // Buat session username
			'user_id'=>$user->user_id,  // Buat session username
          	'nama'=>$user->full_name, // Buat session nama
          	'password'=>$user->password, // Buat session nama
          	'tempat'=>$user->tempat, // Buat session role
          	'tgl_lahir'=>$user->tgl_lahir, // Buat session role
          	'pangkat_gol'=>$user->pangkat_gol, // Buat session role
          	'jabatan_pekerjaan'=>$user->jabatan_pekerjaan, // Buat session role
          	'phone'=>$user->phone, // Buat session role
          	'email'=>$user->email, // Buat session role
          	'role'=>$user->role, // Buat session role
          	'unit'=>$user->unit, // Buat session role
          	'last_login'=>$user->last_login, // Buat session role
          	'photo'=>$user->photo, // Buat session role
          	'created_at'=>$user->created_at, // Buat session role
          	'is_active'=>$user->is_active // Buat session role

		);	
        // load view admin/overview.php
        $this->load->view("profile.php", $datas);
	}

	
	public function edits($id = null)
    {
        if (!isset($id)) redirect('profile'); // redirect jika tidak ada $id 
       
        $pegawai = $this->pegawai_model; //object manual
        $validation = $this->form_validation; //object validation
        $validation->set_rules($pegawai->rulesEditMandiri()); //meneraptkan rules
        //$pegawai->update();   //menyimpan data
 
        if ($validation->run()) { //melakukan validasi
			$pegawai->updateMandiri($id);   //menyimpan data
			clearstatcache(); // menghapus cache images/files pada site
            $this->session->set_flashdata('success_edit', 'Data anda telah berhasil diperbarui');
            redirect(site_url('profile'));  //menuju ke halaman admin/products/.
		}
		
		redirect(site_url('profile_inigagal'));  //menuju ke halaman admin/products/.
        // $data["pegawai"] = $pegawai->getById($id); //mengambil data untuk ditampilkan pada form
        // if (!$data["pegawai"]) show_404(); //jika tidak ada data, tampilkan error
        
        // $this->load->view("admin/data_pegawai/edit_form", $data); //menampilkan form edit
    }
	
	
	public function edit_password($id = null)
    {
        if (!isset($id)) redirect('profile'); // redirect jika tidak ada $id 
       
        $pegawai = $this->pegawai_model; //object manual
        $validation = $this->form_validation; //object validation
        $validation->set_rules($pegawai->rulesEditPassword()); //meneraptkan rules
		//$pegawai->update();   //menyimpan data
		
 
        if ($validation->run()) { //melakukan validasi
			$pegawai->updatePassword($id);   //menyimpan data
            $this->session->set_flashdata('success_edit', 'Password anda berhasil diubah');
            redirect(site_url('profile'));  //menuju ke halaman admin/products/.
		}
		
		redirect(site_url('profile_inigagal'));  //menuju ke halaman admin/products/.
	}
	
	
	// end
}