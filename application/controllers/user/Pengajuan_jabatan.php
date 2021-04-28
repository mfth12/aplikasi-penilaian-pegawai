<?php

class Pengajuan_jabatan extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		//sd mulai menggunakan method user model dan pemeriksaan login
		$this->load->model("UserModel");
		$this->UserModel->terotentikasi();
		//setelah itu modeluser
		//$this->load->model("user_model");
		// if($this->user_model->isNotLogin()) redirect(site_url(''));
		$user = "pegawai";
		if ($this->session->userdata('role') != $user) show_404(); // tampilkan error jika mengakses penilaian orang lain selain anda
	}

	public function index()
	{
        // sedang dalam maintenance
        $this->load->view("_partials/maintenance.php");
	}
}