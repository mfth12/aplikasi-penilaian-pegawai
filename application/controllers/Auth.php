<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->model('UserModel');
  }
  public function index(){
    if($this->session->userdata('terotentikasi')) // Jika user sudah login (Session authenticated ditemukan)
      {
        // untuk memeriksa session
        if($this->session->userdata('role') == 'pegawai') // Jika user yg login adalah pegawai
          {redirect('user'); // Redirect ke halaman home untuk user
          }
        if($this->session->userdata('role') == 'kepsek') // Jika user yg login adalah pegawai
          {redirect('kepsek'); // Redirect ke halaman home untuk kepsek
          }
        if($this->session->userdata('role') == 'admin') // Jika user yg login adalah pegawai
          {redirect('admin'); // Redirect ke halaman home untuk admin
          }
        // akhir untuk memeriksa session

        //redirect('admin'); // Redirect ke page home
      }
    // function render_login tersebut dari file core/MY_Controller.php
    $this->load->view('masuk'); // Load view login.php
  }
  public function login(){
    $username = $this->input->post('nik'); // Ambil isi dari inputan username pada form login
    $password = md5($this->input->post('password')); // Ambil isi dari inputan password pada form login dan encrypt dengan md5
    $user = $this->UserModel->get($username); // Panggil fungsi get yang ada di UserModel.php
    ///////
    if(empty($user))
    { // Jika hasilnya kosong / user tidak ditemukan
      $this->session->set_flashdata('message_masuk', 'NIPY Anda belum terdaftar dalam sistem. Atau gunakan (titik) sebagai pemisah NIPY.'); // Buat session flashdata
      redirect('auth'); // Redirect ke halaman login
    }
    else{
      if($password == $user->password){ // Jika password yang diinput sama dengan password yang didatabase
        $session = array(
          'terotentikasi'=>true, // Buat session authenticated dengan value true
          'username'=>$user->nik,  // Buat session username
          'nama'=>$user->full_name, // Buat session nama
          'photoanda'=>$user->photo, // Buat session nama
          'unit'=>$user->unit, // Buat session nama
          'user_id'=>$user->user_id, // Buat session nama
          'role'=>$user->role // Buat session role

        );
        $this->session->set_userdata($session); // Buat session sesuai $session
        $this->_updateLastLogin($user->user_id); //untuk mengupdate last login
        // untuk memeriksa session
        if($this->session->userdata('role') == 'pegawai') // Jika user yg login adalah pegawai
          {redirect('user'); // Redirect ke halaman home untuk user
          }
        if($this->session->userdata('role') == 'kepsek') // Jika user yg login adalah pegawai
          {redirect('kepsek'); // Redirect ke halaman home untuk kepsek
          }
        if($this->session->userdata('role') == 'admin') // Jika user yg login adalah pegawai
          {redirect('admin'); // Redirect ke halaman home untuk admin
          }
        // akhir untuk memeriksa session
      }
      else{
        $this->session->set_flashdata('message_masuk', 'Password Anda salah'); // Buat session flashdata
        redirect('auth'); // Redirect ke halaman login
      }
    }
  }
  public function logout(){
    $this->session->sess_destroy(); // Hapus semua session
    redirect('auth'); // Redirect ke halaman login
  }

  private function _updateLastLogin($user_id) //untuk mengupdate last login
  {
    $sql = "UPDATE pegawai_user SET last_login=now() WHERE user_id={$user_id}";
    $this->db->query($sql);
  }

}