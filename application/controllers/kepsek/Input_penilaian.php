<?php

class Input_penilaian extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		//sd mulai menggunakan method user model dan pemeriksaan login
		$this->load->model("UserModel");
		$this->UserModel->terotentikasi();
		//setelah itu modeluser
		// if($this->user_model->isNotLogin()) redirect(site_url(''));
		$this->load->model("pegawai_model");
		$this->load->model("m_tahun_unit");
		$this->load->model("penilaian_model");
        $this->load->library('form_validation');
		$admin = "kepsek";
		if ($this->session->userdata('role') != $admin) show_404(); // tampilkan error jika mengakses penilaian orang lain selain anda
	}

	public function index()
	{
		$mau_input = $this->pegawai_model;
		$unitdia = $this->session->userdata('unit');
		$data = array(
			'data_input' => $mau_input->getByUnit($unitdia),
			'data_tahun'=> $this->m_tahun_unit->ShowDataTabelTahun("per_tahun")->result_array()
		);	
		// $data["mau_input"] = $pegawai->getById($id); //mengambil data untuk ditampilkan pada form
        // if (!$data["data_pegawai"]) show_404(); //jika tidak ada data, tampilkan error
        $this->load->view("kepsek/input_penilaian/input.php", $data);
	}
	
	
	public function kirim()
    {
        $nilai_mod = $this->penilaian_model; //dari model dikasi variabel  $penilaian
        $validation = $this->form_validation;
		$validation->set_rules($nilai_mod->rulesAdd());
		

        if ($validation->run()) {
            $nilai_mod->kirim_nilai();
			$this->session->set_flashdata('success_simpan', 'Data penilaian berhasil disimpan');
			redirect(site_url('kepsek/input_penilaian'));  //menuju ke halaman admin/products/.
		}
		
		$this->session->set_flashdata('message_maaf', 'Data gagal disimpan. Mohon teliti, ada field nilai yang belum anda input.');
		// $this->load->view("kepsek/input_penilaian");
		redirect(site_url('kepsek/input_penilaian'));  //menuju ke halaman admin/products/.
	}

    
}