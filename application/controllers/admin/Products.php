<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //sd mulai menggunakan method user model dan pemeriksaan login
        $this->load->model("UserModel");
        $this->UserModel->terotentikasi();
        //setelah itu modeluser
        
		//$this->load->model("user_model");
        // if($this->user_model->isNotLogin()) redirect(site_url(''));
        
        //load model produk
        $this->load->model("product_model");
        $this->load->library('form_validation');
		$admin = "admin";
		if ($this->session->userdata('role') != $admin) show_404(); // tampilkan error jika mengakses penilaian orang lain selain anda
        
    }

    public function index()
    {
        $data["products"] = $this->product_model->getAll(); // ambil data dari model
        $this->load->view("admin/product/list", $data); // kirim data ke view
    }

    public function add()
    {
        $product = $this->product_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->save();
            $this->session->set_flashdata('success_simpan', 'Data produk telah berhasil disimpan');
            redirect(site_url('admin/products'));  //menuju ke halaman admin/products/.
        }

        $this->load->view("admin/product/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/products'); // redirect jika tidak ada $id 
       
        $product = $this->product_model; //object manual
        $validation = $this->form_validation; //object validation
        $validation->set_rules($product->rules()); //meneraptkan rules

        if ($validation->run()) { //melakukan validasi
            $product->update();   //menyimpan data
            $this->session->set_flashdata('success_edit', 'Data produk berhasil diperbarui');
            redirect(site_url('admin/products'));  //menuju ke halaman admin/products/.
        }

        $data["product"] = $product->getById($id); //mengambil data untuk ditampilkan pada form
        if (!$data["product"]) show_404(); //jika tidak ada data, tampilkan error
        
        $this->load->view("admin/product/edit_form", $data); //menampilkan form edit
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        
        if ($this->product_model->delete($id)) { //Apabila data berhasil dihapus, maka kita langsung alihkan (redirect())
            $this->session->set_flashdata('dihapus', 'Data telah dihapus'); // flash message
            redirect(site_url('admin/products'));  //menuju ke halaman admin/products/.
        }

    }
}