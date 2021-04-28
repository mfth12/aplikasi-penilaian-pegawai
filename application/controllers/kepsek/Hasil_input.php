<?php

class Hasil_input extends CI_Controller {
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
		$admin = "kepsek";
		if ($this->session->userdata('role') != $admin) show_404(); // tampilkan error jika mengakses penilaian orang lain selain anda
	}

	public function index()
	{
		$nilai_model = $this->penilaian_model;
		$dia = $this->session->userdata('user_id');
		// load view admin/overview.php
		// $data = array(
		// 	'data_input' => $nilai_mod->getAllByUnit($dia)
		// );	
		
        $data["data_nilai"] = $nilai_model->getAllByUnit($dia); //mengambil data untuk ditampilkan pada form
        $this->load->view("kepsek/hasil_input/hasil_input_list.php", $data);
	}

	public function kepsek_lihat($id = null)
	{
		if (!isset($id)) redirect('kepsek/hasil_input'); // redirect jika tidak ada $id 
		$nilai_model = $this->penilaian_model;
		/////////\\\\\\\\\
        $data["nilai_kamu"] = $nilai_model->getPenilaianById($id); //mengambil data untuk ditampilkan pada form
        $this->load->view("kepsek/hasil_input/lihat.php", $data);
        // $this->load->view("user/data_penilaian/data_penilaian_list.php");
	}
	
	public function proses_approve($id = null)
	{
		if (!isset($id)) redirect('kepsek/hasil_input'); // redirect jika tidak ada $id 
		$nilai_mod = $this->penilaian_model; //dari model dikasi variabel  $penilaian
        $validation = $this->form_validation;
		$validation->set_rules($nilai_mod->rulesKepsekSetujui());
		
		if ($validation->run()) {
            $nilai_mod->proses_setujui_update($id);
			$this->session->set_flashdata('success_simpan', 'Penyetujuan penilaian berhasil. Selanjutnya akan diteruskan ke yayasan untuk disetujui/ditolak penilaiannya.');
			redirect(site_url('kepsek/hasil_input'));  //menuju ke halaman admin/products/.
		}
		
		$this->session->set_flashdata('message_maaf', 'Anda gagal mengkonfirmasi penilaian.');
		// $this->load->view("kepsek/input_penilaian");
		redirect(site_url('kepsek/data_penilaian'));  //menuju ke halaman admin/products/.
	}

	public function hapus_penilaian($id=null)
    {
        if (!isset($id)) show_404();
        
        
        if ($this->penilaian_model->delete($id)) { //Apabila data berhasil dihapus, maka kita langsung alihkan (redirect())
            $this->session->set_flashdata('dihapus', 'Data penilaian pegawai telah dihapus'); // flash message
            redirect(site_url('kepsek/hasil_input'));  //menuju ke halaman admin/products/.
        }

    }

	// end of all
}