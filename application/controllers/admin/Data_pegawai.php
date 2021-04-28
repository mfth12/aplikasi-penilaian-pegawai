<?php

class Data_pegawai extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
        //sd mulai menggunakan method user model dan pemeriksaan login
		$this->load->model("UserModel");
		$this->UserModel->terotentikasi();
		//setelah itu modeluser
		//$this->load->model("user_model");
		// if($this->user_model->isNotLogin()) redirect(site_url(''));
		//$isAdmin = $user->role == "admin";

		///
		$this->load->model("pegawai_model");
		$this->load->model("penilaian_model");
		$this->load->model("m_tahun_unit");
        $this->load->library('form_validation');
		$admin = "admin";
		if ($this->session->userdata('role') != $admin) show_404(); // tampilkan error jika mengakses penilaian orang lain selain anda
	}

	public function index()
	{
        // load view admin/overview.php
		//$this->load->view("admin/data_pegawai.php");
		// $data_["data_pegawai"] = $this->pegawai_model->getAll(); // ambil data dari model
		// $data_unit["data_unit"] = $this->m_tahun_unit->getAllUnit(); // ambil data dari model
        // $data_tahun["data_tahun"] = $this->m_tahun_unit->getAllTahun(); // ambil data dari model
        $data = array(
                'data_pegawai' => $this->pegawai_model->getAll(),
	            'data_unit'=> $this->m_tahun_unit->ShowDataTabel("per_unit")->result_array(),
                'data_tahun'=> $this->m_tahun_unit->ShowDataTabelTahun("per_tahun")->result_array()
            );	
        $this->load->view("admin/data_pegawai/data_pegawai_list", $data); // kirim data ke view
    }
    
    public function lihat($id = null) 
    {
        if (!isset($id)) redirect('admin/data_pegawai'); // redirect jika tidak ada $id 
       
        $pegawai = $this->pegawai_model; //object manual
        $penilaian = $this->penilaian_model; //object manual
        $data = array(
            'nilai_kamu' => $pegawai->getById($id),
            'data_nilai_kamu' => $penilaian->getById($id)
        );
        $this->load->view("admin/data_pegawai/lihat", $data);
    }

	public function add()
    {
        $pegawai = $this->pegawai_model; //dari model dikasi variabel  $pegawai
        $validation = $this->form_validation;
		$validation->set_rules($pegawai->rulesAdd());
		

        if ($validation->run()) {
            $pegawai->save();
			$this->session->set_flashdata('success_simpan', 'Data pegawai telah berhasil disimpan');
			redirect(site_url('admin/data_pegawai'));  //menuju ke halaman admin/products/.
        }
        $data = array(
            'data_unit'=> $this->m_tahun_unit->ShowDataTabel("per_unit")->result_array()
        );	
        $this->load->view("admin/data_pegawai/tambah_form", $data);
	}
    
    public function addUnit()
    {
        $unitahun = $this->m_tahun_unit; //dari model dikasi variabel $unitahun
        $validation = $this->form_validation;
        $validation->set_rules($unitahun->rulesAddUnit());

        if ($validation->run()){
            $unitahun->saveUnit();
            $this->session->set_flashdata('success_simpan', 'Data unit berhasil ditambah');
            redirect(site_url('admin/data_pegawai'));  //menuju ke halaman admin/products/.
        }
        else {
            $this->session->set_flashdata('gak_jadi', 'Tidak boleh mengisi data kosong');
            redirect(site_url('admin/data_pegawai'));
        } 
	}
    
    public function addTahun()
    {
        $unitahun = $this->m_tahun_unit; //dari model dikasi variabel $unitahun
        $validation = $this->form_validation;
        $validation->set_rules($unitahun->rulesAddTahun());

        if ($validation->run()){
            $unitahun->saveTahun();
		    $this->session->set_flashdata('success_simpan', 'Data tahun berhasil ditambah');
            redirect(site_url('admin/data_pegawai'));  //menuju ke halaman admin/products/.
        }
        else {
            $this->session->set_flashdata('gak_jadi', 'Tidak boleh mengisi data kosong');
            redirect(site_url('admin/data_pegawai'));
        } 
	}

	public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/data_pegawai'); // redirect jika tidak ada $id 
       
        $pegawai = $this->pegawai_model; //object manual
        $validation = $this->form_validation; //object validation
        $validation->set_rules($pegawai->rulesEdit()); //meneraptkan rules
        //$pegawai->update();   //menyimpan data
 
        if ($validation->run()) { //melakukan validasi
            $pegawai->update();   //menyimpan data
            clearstatcache(); // menghapus cache images/files pada site
            $this->session->set_flashdata('success_edit', 'Data pegawai berhasil diperbarui');
            redirect(site_url('admin/data_pegawai'));  //menuju ke halaman admin/pegawai
        }
        $data = array(
            'pegawai' => $pegawai->getById($id), //mengambil data untuk ditampilkan pada form
            'data_unit'=> $this->m_tahun_unit->ShowDataTabel("per_unit")->result_array()
        );
        // $data["pegawai"] = $pegawai->getById($id); //mengambil data untuk ditampilkan pada form
        if (!$data["pegawai"]) show_404(); //jika tidak ada data, tampilkan error
        
        $this->load->view("admin/data_pegawai/edit_form", $data); //menampilkan form edit
    }



    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        
        if ($this->pegawai_model->delete($id)) { //Apabila data berhasil dihapus, maka kita langsung alihkan (redirect())
            $this->session->set_flashdata('dihapus', 'Data pegawai telah dihapus'); // flash message
            redirect(site_url('admin/data_pegawai'));  //menuju ke halaman admin/products/.
        }

    }
    
    public function deleteUnit($id=null)
    {
        if (!isset($id)) show_404();
        $unitahun = $this->m_tahun_unit;
        
        if ($unitahun->deleteUnit($id)) { //Apabila data berhasil dihapus, maka kita langsung alihkan (redirect())
            $this->session->set_flashdata('dihapus', 'Data unit telah dihapus'); // flash message
            redirect(site_url('admin/data_pegawai'));  //menuju ke halaman admin/products/.
        }

    }

    public function deleteTahun($id=null)
    {
        if (!isset($id)) show_404();
        $unitahun = $this->m_tahun_unit;
        
        if ($unitahun->deleteTahun($id)) { //Apabila data berhasil dihapus, maka kita langsung alihkan (redirect())
            $this->session->set_flashdata('dihapus', 'Data tahun telah dihapus'); // flash message
            redirect(site_url('admin/data_pegawai'));  //menuju ke halaman admin/products/.
        }

    }

    /////////////////////
    ///////////////////// FUNCTION UNTUK UNIT DAN TAHUN
    ///////////////////// FUNCTION UNTUK UNIT DAN TAHUN //////////////
    ///////////////////// FUNCTION UNTUK UNIT DAN TAHUN ////////////// FUNCTION UNTUK UNIT DAN TAHUN
    ///////////////////// FUNCTION UNTUK UNIT DAN TAHUN //////////////
    ///////////////////// FUNCTION UNTUK UNIT DAN TAHUN
    /////////////////////
    


	// end function or classes
	// end function or classes
	// end function or classes
	// end function or classes
	// end function or classes
	// end function or classes
}