<?php

class Overview_kepsek extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		//sd mulai menggunakan method user model dan pemeriksaan login
		$this->load->model("UserModel");
		$this->UserModel->terotentikasi();
		//setelah itu modeluser
    	// function render_backend tersebut dari file core/MY_Controller.php
		//$this->load->model("user_model");
		//$pengguna = $this->user_model->doLogin;
		// $user_saya = $this->user_model;
		$admin = "kepsek";
		if ($this->session->userdata('role') != $admin) show_404(); // tampilkan error jika mengakses penilaian orang lain selain anda
	}
	
	public function index()
	{
		//$this->load->view("kepsek/overview_kepsek");
		// redirect('contact'); // Redirect ke halaman user
		if($this->session->userdata('role') == 'kepsek') // Jika user yg login adalah admin
			{$this->load->view("kepsek/overview_kepsek");} //menampilkan halaman not found
		////////////////
		////////////////
		if($this->session->userdata('role') == 'admin') // Jika user yg login adalah admin
			{show_404();} //menampilkan halaman not found
		////////////////////////////
		////////////////////////////
		////////////////////////////
		if($this->session->userdata('role') == 'pegawai') // Jika user yg login adalah admin
			{show_404();} //menampilkan halaman not found
			 
		// load view admin/overview.php
	}
}