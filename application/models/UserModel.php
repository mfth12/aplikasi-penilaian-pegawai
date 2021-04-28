<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class UserModel extends CI_Model 
{
    public $_table = "pegawai_user";

    public function get($username){
        $this->db->where('nik', $username); // Untuk menambahkan Where Clause : username='$username'
        $result = $this->db->get('pegawai_user')->row(); // Untuk mengeksekusi dan mengambil data hasil query
        return $result;
    }

    // public function lastLogin($username)
    // {
    //     $this->db->where('nik', $username); // Untuk menambahkan Where Clause : username='$username'
    //     $hasil = $this->db->query("UPDATE {$this->_table} SET last_login=now() WHERE nik");
    //     return $hasil;
    // }

    public function terotentikasi(){ // Fungsi ini berguna untuk mengecek apakah user sudah login atau belum
        // Pertama kita cek dulu apakah controller saat ini yang sedang diakses user adalah controller Auth apa bukan
        // Karena fungsi cek login hanya kita berlakukan untuk controller selain controller Auth
        if($this->uri->segment(1) != 'auth' && $this->uri->segment(1) != ''){
            // Cek apakah terdapat session dengan nama authenticated
            if( ! $this->session->userdata('terotentikasi')) // Jika tidak ada / artinya belum login
                redirect('auth'); // Redirect ke halaman login
        }
    }

    // private function _updateLastLogin($username){
    //     $sql = "UPDATE {$this->_table} SET last_login=now() WHERE nik={$nik}";
    //     $this->db->query($sql);
    // }
    

    
}