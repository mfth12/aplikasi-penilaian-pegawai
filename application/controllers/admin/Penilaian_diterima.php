<?php

class Penilaian_diterima extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model("UserModel");
		$this->UserModel->terotentikasi();
		$this->load->model("pegawai_model");
		
		$this->load->model("penilaian_model");
        $this->load->library('form_validation');
		$admin = "admin";
		if ($this->session->userdata('role') != $admin) show_404(); // tampilkan error jika mengakses penilaian orang lain selain anda
	}

	public function index()
	{
		$nilai_model = $this->penilaian_model;
		$dia = $this->session->userdata('user_id');
        // load view admin/overview.php
		// $this->load->view("admin/penilaian_diterima/penilaian_diterima_list.php");
		
		
        $data["data_nilai"] = $nilai_model->getAllApprove(); //mengambil data untuk ditampilkan pada form
        $this->load->view("admin/penilaian_diterima/penilaian_diterima_list.php", $data);
	}
	public function lihat($id = null)
	{
		if (!isset($id)) redirect('admin/penilaian_diterima'); // redirect jika tidak ada $id 
		$nilai_model = $this->penilaian_model;
		/////////\\\\\\\\\
        $data["nilai_kamu"] = $nilai_model->getPenilaianById($id); //mengambil data untuk ditampilkan pada form
        $this->load->view("admin/penilaian_diterima/lihat.php", $data);
        // $this->load->view("user/data_penilaian/data_penilaian_list.php");
	}
}