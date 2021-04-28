<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		//sd mulai menggunakan method user model dan pemeriksaan login
		$this->load->model("UserModel");
		$this->UserModel->terotentikasi();
		//setelah itu modeluser
		//sd mulai menggunakan method user model dan pemeriksaan login
		//$this->load->model("user_model");
	}
	
	public function index()
	{
	//fungsi untuk load login page
		$this->load->view('about.php');
	}
}
