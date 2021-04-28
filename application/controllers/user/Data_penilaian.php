<?php

class Data_penilaian extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		//sd mulai menggunakan method user model dan pemeriksaan login
		$this->load->model("UserModel");
		$this->UserModel->terotentikasi();
		//setelah itu modeluser
		$this->load->model("pegawai_model");
		$this->load->model("m_tahun_unit");
		$this->load->model("penilaian_model");
        $this->load->library('form_validation');
		$user = "pegawai";
		if ($this->session->userdata('role') != $user) show_404(); // tampilkan error jika mengakses penilaian orang lain selain anda
	}

	public function index()
	{
		// load view admin/overview.php
		$nilai_model = $this->penilaian_model;
		$kamu = $this->session->userdata('user_id');
		/////////\
        $data["data_nilai_kamu"] = $nilai_model->getById($kamu); //mengambil data untuk ditampilkan pada form
        $this->load->view("user/data_penilaian/data_penilaian_list.php", $data);
        // $this->load->view("user/data_penilaian/data_penilaian_list.php");
	}
	
	public function konfirmasi($id = null)
	{
		if (!isset($id)) redirect('user/data_penilaian'); // redirect jika tidak ada $id 
		
		$nilai_model = $this->penilaian_model;
		/////////\\\\\\\\\
		$data["nilai_kamu"] = $nilai_model->getPenilaianById($id); //mengambil data untuk ditampilkan pada form
		// if ($nilai_kamu->user_id != $this->session->userdata('user_id')) show_404(); // tampilkan error jika mengakses penilaian orang lain
        $this->load->view("user/data_penilaian/konfirmasi.php", $data);
        // $this->load->view("user/data_penilaian/data_penilaian_list.php");
	}
	
	public function proses_konfirmasi($id = null)
	{
		if (!isset($id)) redirect('user/data_penilaian'); // redirect jika tidak ada $id 
		
		$nilai_mod = $this->penilaian_model; //dari model dikasi variabel  $penilaian
        $validation = $this->form_validation;
		$validation->set_rules($nilai_mod->rulesUserConfirm());
		

        if ($validation->run()) {
            $nilai_mod->proses_konfirmasi_update($id);
			$this->session->set_flashdata('success_simpan', 'Anda berhasil mengkonfirmasi penilaian.');
			redirect(site_url('user/data_penilaian/'));  //menuju ke halaman admin/products/.
		}
		
		$this->session->set_flashdata('message_maaf', 'Anda gagal mengkonfirmasi penilaian.');
		// $this->load->view("kepsek/input_penilaian");
		redirect(site_url('user/data_penilaian'));  //menuju ke halaman admin/products/.
	}

	public function belum_ada($id)
	{
		$nilai_model = $this->penilaian_model;
		/////////\\\\\\\\\
        $data["nilai_kamu"] = $nilai_model->getByPenilaianId($id); //mengambil data untuk ditampilkan pada form
        $this->load->view("user/data_penilaian/lihat.php", $data);
        // $this->load->view("user/data_penilaian/data_penilaian_list.php");
	}

	// end of all
}