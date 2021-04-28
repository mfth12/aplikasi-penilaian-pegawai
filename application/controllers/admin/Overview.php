<?php

class overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		//sd mulai menggunakan method user model dan pemeriksaan login
		$this->load->model("UserModel");
		$this->UserModel->terotentikasi();
		
    	// function render_backend tersebut dari file core/MY_Controller.php
		//$this->load->model("user_model");
		//$pengguna = $this->user_model->doLogin;
		// $user_saya = $this->user_model;
		$admin = "admin";
		if ($this->session->userdata('role') != $admin) show_404(); // tampilkan error jika mengakses penilaian orang lain selain anda
		
	}

	
	public function index()
	{
		if($this->session->userdata('role') == 'admin') // Jika user yg login adalah admin
			{$this->load->view("admin/overview.php");}
		////////////////////////////
		////////////////////////////
		////////////////////////////
		if($this->session->userdata('role') == 'pegawai') // Jika user yg login adalah admin
			{show_404();} //menampilkan halaman not found
		if($this->session->userdata('role') == 'kepsek') // Jika user yg login adalah admin
			{show_404();} //menampilkan halaman not found
		
		// akhir halaman dari load view admin/overview.php
	}
}