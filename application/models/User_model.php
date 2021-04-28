<?php

class User_model extends CI_Model
{
    private $_table = "pegawai_user";
    //public $nama_lengkap;

    public $id_sekarang;
    public $nama_sekarang;
    



    public function doLogin(){
        $post = $this->input->post();
        //
        //
        
        // cari user berdasarkan email dan username
        $this->db->where('user_id', $post["email"]) -> or_where('nik', $post["email"]);
        $user = $this->db->get($this->_table)->row();

        $this->id_sekarang = $user->user_id;
        $this->nama_sekarang = $user->full_name;
        
        
        
        // $data = $query->fetch();
        //     $_SESSION['iduser'] = $data['id'];
        //     $_SESSION['username'] = $data['username'];
        //     echo "<script>alert('Selamat. Login berhasil :)'); window.location='index.php';</script>";

        // jika user terdaftar
        if($user){
            // periksa password-nya
            $isPasswordTrue = password_verify($post["password"], $user->password);
            // periksa role-nya
            $isAdmin = $user->role == "admin";
            //$nama_pengguna_yang_masuk =  $this->db->get('username');
            
            
            // jika password benar dan dia admin
            if($isPasswordTrue && $isAdmin){ 
                // login sukses yay!
                $this->session->set_userdata(['user_logged' => $user]);
                //$siapasaya = $this->db->get_where($this->_table, $post["email"])->row();
                // $this->session->set_userdata(['user_logged' => $user]);

                //$_SESSION['userpengguna'] = $user->full_name;

                //$rowss = $this->db->query("SELECT * FROM pegawai_user where fullname='".$this->session->user_logged."'")->row_array();
                $this->_updateLastLogin($user->user_id);
                

                //$_SESSION['nama_ygmasuk'] = $user['fullname'];
                //$namalengkap = $nmow->full_name;
                //$querynama = $this->db->where('full_name');
                
                //;
                return true;
            }
        }
        
        // login gagal
		return false;
    }

    public function isNotLogin(){
        return $this->session->userdata('user_logged') === null;
    }

    public function sudahLogin(){
        return $this->session->userdata('user_logged') != null ;
    }

    private function _updateLastLogin($user_id){
        $sql = "UPDATE {$this->_table} SET last_login=now() WHERE user_id={$user_id}";
        $this->db->query($sql);
        
    }

    public function getUserId($id)
    {
        return $this->db->get_where($this->_table, ["nik" => $id])->row();
    }


}