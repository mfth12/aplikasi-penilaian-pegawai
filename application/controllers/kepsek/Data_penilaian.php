<?php

class Data_penilaian extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		//sd mulai menggunakan method user model dan pemeriksaan login
		$this->load->model("UserModel");
		$this->UserModel->terotentikasi();
		//setelah itu modeluser
		//$this->load->model("user_model");
		// if($this->user_model->isNotLogin()) redirect(site_url(''));
		$admin = "kepsek";
		if ($this->session->userdata('role') != $admin) show_404(); // tampilkan error jika mengakses penilaian orang lain selain anda
	}

	public function index()
	{
        // load view admin/overview.php
        $this->load->view("kepsek/data_penilaian/data_penilaian_list.php");
	}
}