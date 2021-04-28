<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		//sd mulai menggunakan method user model dan pemeriksaan login
		$this->load->model("UserModel");
		$this->UserModel->terotentikasi();
		//setelah itu modeluser
		//$this->load->model("user_model");
		if($this->user_model->isNotLogin()) redirect(site_url(''));
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	//fungsi untuk load login page
		$this->load->view('contact.php');
	}
}