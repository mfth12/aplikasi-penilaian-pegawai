<?php

class Proses_penilaian extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		//sd mulai menggunakan method user model dan pemeriksaan login
		$this->load->model("UserModel");
		$this->load->model("penilaian_model");
		$this->UserModel->terotentikasi();
		
		$this->load->model("pegawai_model");
        $this->load->library('form_validation');
		//setelah itu modeluser
		//$this->load->model("user_model");
		// if($this->user_model->isNotLogin()) redirect(site_url(''));
		$admin = "admin";
		if ($this->session->userdata('role') != $admin) show_404(); // tampilkan error jika mengakses penilaian orang lain selain anda
	}

	public function index()
	{
		// load view admin/overview.php
		$nilai_model = $this->penilaian_model;
		// 	'data_input' => $nilai_mod->getAllByUnit($dia)
		// );	
		
        $data["data_nilai"] = $nilai_model->getAll(); //mengambil data untuk ditampilkan pada form
        $this->load->view("admin/proses_penilaian/proses_penilaian_list.php", $data);
	}

	public function lihat($id = null)
	{
		if (!isset($id)) redirect('admin/proses_penilaian'); // redirect jika tidak ada $id 
		$nilai_model = $this->penilaian_model;
		/////////\\\\\\\\\
        $data["nilai_kamu"] = $nilai_model->getPenilaianById($id); //mengambil data untuk ditampilkan pada form
        $this->load->view("admin/proses_penilaian/admin_lihat.php", $data);
        // $this->load->view("user/data_penilaian/data_penilaian_list.php");
	}
	
	public function proses_approve($id = null)
	{
		if (!isset($id)) redirect('admin/proses_penilaian'); // redirect jika tidak ada $id 
		$nilai_mod = $this->penilaian_model; //dari model dikasi variabel  $penilaian
        $validation = $this->form_validation;
		$validation->set_rules($nilai_mod->rulesKepsekSetujui());
		
		if ($validation->run()) {
            $nilai_mod->proses_setujui_update($id);
			$this->session->set_flashdata('success_simpan', 'Penyetujuan penilaian berhasil. Selanjutnya akan diteruskan ke yayasan untuk disetujui/ditolak penilaiannya.');
			redirect(site_url('admin/proses_penilaian'));  //menuju ke halaman admin/products/.
		}
		
		$this->session->set_flashdata('message_maaf', 'Anda gagal mengkonfirmasi penilaian.');
		// $this->load->view("kepsek/input_penilaian");
		redirect(site_url('admin/proses_penilaian'));  //menuju ke halaman admin/products/.
	}
	public function proses_setujui($id = null)
	{
		if (!isset($id)) redirect('admin/proses_penilaian'); // redirect jika tidak ada $id 
		$nilai_mod = $this->penilaian_model; //dari model dikasi variabel  $penilaian
        $validation = $this->form_validation;
		$validation->set_rules($nilai_mod->rulesAdminSetujui());
		
		if ($validation->run()) {
            $nilai_mod->admin_setujui_update($id);
			$this->session->set_flashdata('success_simpan', 'Anda telah memberikan keputusan penilaian.');
			redirect(site_url('admin/approve_penilaian'));  //menuju ke halaman admin/products/.
		}
		
		$this->session->set_flashdata('message_maaf', 'Anda gagal menyetujui penilaian.');
		// $this->load->view("kepsek/input_penilaian");
		redirect(site_url('admin/proses_penilaian'));  //menuju ke halaman admin/products/.
	}
}