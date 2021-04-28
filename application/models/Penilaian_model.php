<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Penilaian_model extends CI_Model //ini perintah untuk ngambil data dari database
{
    private $_table_nilai = "data_penilaian"; //nama tabel database
    // nama kolom di tabel database, harus sama huruf besar dan huruf kecilnya!
    // ini berguna untuk mendeklarasikan variabel yang akan digunakan
    public $id_penilaian;
    public $penginput_id;
    public $user_id;
    public $full_name;
    public $tahun;
    public $tgl_penilaian;
    public $status = "0";

    public function rulesUserConfirm()
    {
        return [
            ['field' => 'komplain_pegawai',
            'label' => 'komplain_pegawai',
            'rules' => 'required'],

            ['field' => 'status',
            'label' => 'status',
            'rules' => 'required']
        
        ];
    }
    
    public function rulesKepsekSetujui()
    {
        return [
            ['field' => 'tanggapan_penilai',
            'label' => 'tanggapan_penilai',
            'rules' => 'required'],

            ['field' => 'status',
            'label' => 'status',
            'rules' => 'required']
        
        ];
    }
    
    public function rulesAdminSetujui()
    {
        return [
            ['field' => 'keputusan_yayasan',
            'label' => 'keputusan_yayasan',
            'rules' => 'required'],
            
            ['field' => 'status',
            'label' => 'status',
            'rules' => 'required'],

            ['field' => 'keputusan',
            'label' => 'keputusan',
            'rules' => 'required']
        
        ];
    }

    public function rulesAdd()
    {
        return [
            ['field' => 'nilai_nama',
            'label' => 'nilai_nama',
            'rules' => 'required'],
            
            ['field' => 'nilai_1a',
            'label' => 'nilai_1a',
            'rules' => 'required'],
            
            ['field' => 'nilai_1b',
            'label' => 'nilai_1b',
            'rules' => 'required'],
            ////////////////
            ////////////////
            ////////////////
            ['field' => 'nilai_2a',
            'label' => 'nilai_2a',
            'rules' => 'required'],
            
            ['field' => 'nilai_2b',
            'label' => 'nilai_2b',
            'rules' => 'required'],
            
            ['field' => 'nilai_2c',
            'label' => 'nilai_2c',
            'rules' => 'required'],
            
            ['field' => 'nilai_2d',
            'label' => 'nilai_2d',
            'rules' => 'required'],
            ////////////////
            ////////////////
            ////////////////
            ['field' => 'nilai_3a',
            'label' => 'nilai_3a',
            'rules' => 'required'],
            
            ['field' => 'nilai_3b',
            'label' => 'nilai_3b',
            'rules' => 'required'],
            
            ['field' => 'nilai_3c',
            'label' => 'nilai_3c',
            'rules' => 'required'],
            
            ['field' => 'nilai_3d',
            'label' => 'nilai_3d',
            'rules' => 'required'],
            ////////////////
            ////////////////
            ////////////////
            
            ['field' => 'nilai_4a',
            'label' => 'nilai_4a',
            'rules' => 'required'],

            ['field' => 'nilai_4b',
            'label' => 'nilai_4b',
            'rules' => 'required'],

            ['field' => 'nilai_4c',
            'label' => 'nilai_4c',
            'rules' => 'required'],

            ['field' => 'nilai_4d',
            'label' => 'nilai_4d',
            'rules' => 'required'],

            ['field' => 'nilai_4e',
            'label' => 'nilai_4e',
            'rules' => 'required'],
            ////////////////
            ////////////////
            ////////////////

            ['field' => 'nilai_5a',
            'label' => 'nilai_5a',
            'rules' => 'required'],

            ['field' => 'nilai_5b',
            'label' => 'nilai_5b',
            'rules' => 'required'],

            ['field' => 'nilai_5c',
            'label' => 'nilai_5c',
            'rules' => 'required'],

            ['field' => 'nilai_5d',
            'label' => 'nilai_5d',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        $this->db->order_by("tgl_penilaian", "desc");
        return $this->db->get($this->_table_nilai)->result();
    }
    
    public function getById($id) //ngambil sesuai dengan identitas user tersebut
    {
        $this->db->order_by("tgl_penilaian", "desc");
        return $this->db->get_where($this->_table_nilai, ["user_id" => $id])->result();
    }
    
    public function getPenilaianById($id) //ngambil sesuai dengan identitas user tersebut
    {
        return $this->db->get_where($this->_table_nilai, ["id_penilaian" => $id])->row();
    }

    public function getAllByUnit($id)
    {
        $aku = array(
            "penginput_id" => $id
            // "role" => $pegawai
        );
        
        $this->db->order_by("tgl_penilaian", "desc");
        return $this->db->get_where($this->_table_nilai, $aku)->result(); // semua data yang unit nya sama
    }
    
    public function getAllApprove()
    {
        $disetujui = "5";
        $aku = array(
            "status" => $disetujui
            // "role" => $pegawai
        );
        
        $this->db->order_by("tgl_penilaian", "desc");
        return $this->db->get_where($this->_table_nilai, $aku)->result(); // semua data yang unit nya sama
    }
    
    public function getAllDecline()
    {
        $decline = "6";
        $aku = array(
            "status" => $decline
            // "role" => $pegawai
        );
        
        $this->db->order_by("tgl_penilaian", "desc");
        return $this->db->get_where($this->_table_nilai, $aku)->result(); // semua data yang unit nya sama
    }
    
    public function getAllApproving()
    {
        $disetujui = "2";
        $aku = array(
            "status" => $disetujui
            // "role" => $pegawai
        );
        
        $this->db->order_by("tgl_penilaian", "desc");
        return $this->db->get_where($this->_table_nilai, $aku)->result(); // semua data yang unit nya sama
    }


    public function kirim_nilai()
    {
        $post = $this->input->post();
        
        $this->id_penilaian = null;
        $this->penginput_id = $post["penginput_id"];
        $this->penginput_nama = $post["penginput_nama"];
        // $passwd_hash$passwd_hash$passwd_hash$passwd_hash$passwd_hash
        $this->user_id = $post["user_id"];
        $this->full_name = $post["nilai_nama"];
        $this->unit = $post["nilai_unit"];
        $this->tahun = $post["nilai_tahun"];
        // $this->tgl_penilaian = "now()";
        // $passwd_hash$passwd_hash$passwd_hash$passwd_hash$passwd_hash
        $this->nilai_1a = $post["nilai_1a"];
        $this->nilai_1b = $post["nilai_1b"];
        $nilai_1a = $post["nilai_1a"];
        $nilai_1b = $post["nilai_1b"];
        //
        $jumlah1 = $nilai_1a+$nilai_1b;
        $rata1 = $jumlah1 / 2;
        ///////////
        ///////////
        $this->nilai_2a = $post["nilai_2a"];
        $this->nilai_2b = $post["nilai_2b"];
        $this->nilai_2c = $post["nilai_2c"];
        $this->nilai_2d = $post["nilai_2d"];
        $nilai_2a = $post["nilai_2a"];
        $nilai_2b = $post["nilai_2b"];
        $nilai_2c = $post["nilai_2c"];
        $nilai_2d = $post["nilai_2d"];
        //
        $jumlah2 = $nilai_2a+$nilai_2b+$nilai_2c+$nilai_2d;
        $rata2 = $jumlah2 / 4;
        //////////
        $this->nilai_3a = $post["nilai_3a"];
        $this->nilai_3b = $post["nilai_3b"];
        $this->nilai_3c = $post["nilai_3c"];
        $this->nilai_3d = $post["nilai_3d"];
        $nilai_3a = $post["nilai_3a"];
        $nilai_3b = $post["nilai_3b"];
        $nilai_3c = $post["nilai_3c"];
        $nilai_3d = $post["nilai_3d"];
        //
        $jumlah3 = $nilai_3a+$nilai_3b+$nilai_3c+$nilai_3d;
        $rata3 = $jumlah3 / 4;
        //////////
        $this->nilai_4a = $post["nilai_4a"];
        $this->nilai_4b = $post["nilai_4b"];
        $this->nilai_4c = $post["nilai_4c"];
        $this->nilai_4d = $post["nilai_4d"];
        $this->nilai_4e = $post["nilai_4e"];
        $nilai_4a = $post["nilai_4a"];
        $nilai_4b = $post["nilai_4b"];
        $nilai_4c = $post["nilai_4c"];
        $nilai_4d = $post["nilai_4d"];
        $nilai_4e = $post["nilai_4e"];
        //
        $jumlah4 = $nilai_4a+$nilai_4b+$nilai_4c+$nilai_4d+$nilai_4e;
        $rata4 = $jumlah4 / 5;
        ///////////
        $this->nilai_5a = $post["nilai_5a"];
        $this->nilai_5b = $post["nilai_5b"];
        $this->nilai_5c = $post["nilai_5c"];
        $this->nilai_5d = $post["nilai_5d"];
        $nilai_5a = $post["nilai_5a"];
        $nilai_5b = $post["nilai_5b"];
        $nilai_5c = $post["nilai_5c"];
        $nilai_5d = $post["nilai_5d"];
        //
        $jumlah5 = $nilai_5a+$nilai_5b+$nilai_5c+$nilai_5d;
        $rata5 = $jumlah5 / 4;
        ////////////
        $summ = $rata1+$rata2+$rata3+$rata4+$rata5;
        $rata_semua = $summ / 5;
        //////
        $this->status = "0"; // setting untuk status pertama "pending"
        $this->avg_nilai_1 = $rata1;
        $this->avg_nilai_2 = $rata2;
        $this->avg_nilai_3 = $rata3;
        $this->avg_nilai_4 = $rata4;
        $this->avg_nilai_5 = $rata5;
        $this->avg_semua = $rata_semua;
        $this->teks_penilai = $post["nilai_tambahan"];
        // $this->teks_pegawai = null;
        // $this->teks_tgp_penilai = null;
        // $this->teks_yayasan = null;
        // $this->teks_ket = null;
        // $this->last_login = null;
        // $this->created_at = $this->_updateDaftarBaru();
        
        return $this->db->insert($this->_table_nilai, $this);
    }

    public function proses_konfirmasi_update($id) //untuk user
    {
        $post = $this->input->post();
        $status_sekarang = $post["status"];
        $status_sekarang = "1";

        if($status_sekarang == 1) 
        {
            //cs..,fd
            $data = array(
                'status' => $status_sekarang,
                'teks_pegawai' => $post["komplain_pegawai"]
            );
           
        } //////
        else {
            $this->session->set_flashdata('message_maaf', 'Anda sudah mengkonfirmasi ini.');
            redirect(site_url('user/data_penilaian'));  //menuju ke halaman admin/products/.
        }
        return $this->db->update($this->_table_nilai, $data, array('id_penilaian' => $id));
	}
    
    
    public function proses_setujui_update($id) //untuk user
    {
        $post = $this->input->post();
        $status_sekarang = $post["status"];
        $status_sekarang = "2";

        if($status_sekarang == 2) 
        {
            //cs..,fd
            $data = array(
                'status' => $status_sekarang,
                'teks_tgp_penilai' => $post["tanggapan_penilai"]
            );
           
        } //////
        else {
            $this->session->set_flashdata('message_maaf', 'Ada kesalahan dalam proses penyetujuan. Mohon periksa kembali proses sebelumnya.');
            redirect(site_url('kepsek/hasil_input'));  //menuju ke halaman admin/products/.
        }
        return $this->db->update($this->_table_nilai, $data, array('id_penilaian' => $id));
	}
    

    public function admin_setujui_update($id) //untuk user
    {
        $post = $this->input->post();
        $status = $post["status"];
        $keputusan = $post["keputusan"];
        // $status_sekarang = "2";

        if($keputusan == 5) 
        {
            //cs..,fd
            $data = array(
                'status' => $keputusan,
                'teks_yayasan' => $post["keputusan_yayasan"]
            );
           
        }
        else if ($keputusan == 6) //////
        {
            //cs..,fd
            $data = array(
                'status' => $keputusan,
                'teks_yayasan' => $post["keputusan_yayasan"]
            );
        }
        else {
            $this->session->set_flashdata('message_maaf', 'Ada kesalahan. Mohon periksa kembali proses sebelumnya.');
            redirect(site_url('admin/proses_penilaian'));  //menuju ke halaman admin/products/.
        }
        return $this->db->update($this->_table_nilai, $data, array('id_penilaian' => $id));
	}

    public function delete($id)
    {
        // $this->_deleteImage($id);
        return $this->db->delete($this->_table_nilai, array("id_penilaian" => $id));
    }

    /////////
    /////////  TEMPAT PRIVATE FUNCTION YAAAA.......
    /////////
    

    
}