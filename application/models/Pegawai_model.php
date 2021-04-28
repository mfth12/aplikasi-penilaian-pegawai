<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai_model extends CI_Model //ini perintah untuk ngambil data dari database
{
    private $_table = "pegawai_user"; //nama tabel database
    // nama kolom di tabel database, harus sama huruf besar dan huruf kecilnya!
    // ini berguna untuk mendeklarasikan variabel yang akan digunakan
    public $user_id;
    public $nik;
    public $password;
    public $email;
    public $full_name;
    public $phone;
    public $role;
    public $unit;
    ///////
    public $pangkat_gol;
    public $jabatan_pekerjaan;
    ///////
    public $last_login;
    public $photo = "default.jpg";
    public $created_at;
    public $is_active = "1";
    


    // public $unit;
    // public $name;
    // public $price;
    // public $image = "default.jpg";
    // public $description;

    public function rulesAdd()
    {
        return [
            ['field' => 'nik',
            'label' => 'nik',
            'rules' => 'required'],
            
            ['field' => 'unit',
            'label' => 'unit',
            'rules' => 'required'],

            ['field' => 'full_name',
            'label' => 'full_name',
            'rules' => 'required'],
            
            ['field' => 'password',
            'label' => 'password',
            'rules' => 'required']
        ];
    }

    public function rulesEdit()
    {
        return [
            ['field' => 'nik',
            'label' => 'nik',
            'rules' => 'required'],

            ['field' => 'full_name',
            'label' => 'full_name',
            'rules' => 'required']
        
        ];
    }
    
    public function rulesEditMandiri()
    {
        return [
            ['field' => 'nama',
            'label' => 'nama',
            'rules' => 'required']
        ];
    }

    public function rulesEditPassword()
    {
        return [
            ['field' => 'password_baru',
            'label' => 'password_baru',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        $this->db->order_by("user_id", "desc");
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["user_id" => $id])->row();
    }
    
    public function getByUnit($unitdia)
    {
        $pegawai = "pegawai";
        $aku = array(
            "unit" => $unitdia,
            "role" => $pegawai
        );
        $this->db->order_by("user_id", "desc");
        return $this->db->get_where($this->_table, $aku)->result(); // semua data yang unit nya sama
    }



    public function save()
    {
        $post = $this->input->post();
        // $this->product_id = uniqid();
        // $this->name = $post["name"];
        // $this->price = $post["price"];
        // $this->image = $this->_uploadImage();
        // $this->description = $post["description"];
        $this->user_id = null;
        $this->nik = $post["nik"];
        $this->password = md5($post["password"]); // hash password
        
        // $passwd_hash = password_hash($password, PASSWORD_DEFAULT); // hash password
        $this->email = $post["email"];
        $this->full_name = $post["full_name"];
        $this->phone = $post["phone"];
        $this->role = $post["role"];
        $this->unit = $post["unit"];
        //////
        $this->pangkat_gol = $post["pangkat_gol"];
        $this->jabatan_pekerjaan = $post["jabatan_pekerjaan"];
        $this->tempat = $post["tempat"];
        $this->tgl_lahir = $post["tgl_lahir"];
        //////
        $this->is_active = "1";
        $this->last_login = null;
        // $this->last_login = null;
        $this->photo = $this->_uploadImage();
        // $this->created_at = $this->_updateDaftarBaru();
        
        return $this->db->insert($this->_table, $this);
    }

    

    public function update()
    {
        $post = $this->input->post();
        //mengambil input secara post dari sini
        $this->user_id = $post["id"];
        $this->nik = $post["nik"];
        $this->role = $post["role"];
        $this->unit = $post["unit"]; // mengganti jenis UNIT DI YAYASAN
        $this->full_name = $post["full_name"];
        $this->email = $post["email"];
        //$this->password = md5($post["password"]);
        $this->phone = $post["phone"];
        //////
        $this->pangkat_gol = $post["pangkat_gol_display"];
        $this->jabatan_pekerjaan = $post["jabatan_pekerjaan"];
        $this->tempat = $post["tempat"];
        $this->tgl_lahir = $post["tgl_lahir"];
        //////
        $this->created_at = $post["created_at"];//supaya tetap created_at nya (tidak berubah)
        $this->last_login = $post["last_login"];//supaya tetap created_at nya (tidak berubah)

        // $this->photo = $post["photo"];
        // //////
        if (!empty($post["password"])) { //ini jika kolom password berisi inputan, maka akan di update psswrd nya
            $this->password = md5($post["password"]);
        } else { // dan jika tidak berisi inputan
            $this->password = $post["password_lama"]; //maka akan tetap menggunakan password yang lama
        }

        
        if (!empty($_FILES["photo"]["name"])) {
            //$this->_deleteImage($user_id);
            $this->photo = $this->_uploadImage();


        } else {
            $this->photo = $post["old_photo"];
        }

        
        //////////////
        //update this riow was selected
        //////
        return $this->db->update($this->_table, $this, array('user_id' => $post['id']));
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("user_id" => $id));
    }

    /////////
    /////////  TEMPAT PRIVATE FUNCTION YAAAA.......
    /////////

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/user/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->full_name;
        $config['overwrite']			= true;
        $config['max_size']             = 1024; // 1MB saja maksimal
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('photo')) {
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }

    private function _deleteImage($id)
    {
        $pegawai = $this->getById($id);
        if ($pegawai->photo != "default.jpg") {
    	    $filename = explode(".", $pegawai->photo)[0];
    		return array_map('unlink', glob(FCPATH."upload/user/$filename.*"));
        }
    }

    public function updateMandiri($id)
    {
        $post = $this->input->post();
        //mengambil input secara post dari sini
        $this->user_id = $post["user_id"];
        $this->nik = $post["nik"];
        $this->full_name = $post["nama"];
        $this->role = $post["role"];
        $this->unit = $post["unit"];
        $this->email = $post["email"];
        //$this->password = md5($post["password"]);
        $this->phone = $post["phone"];
        //////
        $this->pangkat_gol = $post["pangkat_gol"];
        $this->jabatan_pekerjaan = $post["jabatan_pekerjaan"];
        $this->tempat = $post["tempat"];
        $this->tgl_lahir = $post["tgl_lahir"];
        //////
        $this->created_at = $post["created_at"];//supaya tetap created_at nya (tidak berubah)
        $this->last_login = $post["last_login"];//supaya tetap created_at nya (tidak berubah)

        if (!empty($post["password"])) { //ini jika kolom password berisi inputan, maka akan di update psswrd nya
            $this->password = md5($post["password"]);
        } else { // dan jika tidak berisi inputan
            $this->password = $post["password_lama"]; //maka akan tetap menggunakan password yang lama
        }
        
        if (!empty($_FILES["photo"]["name"])) {
            //$this->_deleteImage($user_id);
            $this->photo = $this->_uploadImage();


        } else {
            $this->photo = $post["old_photo"];
        }
        return $this->db->update($this->_table, $this, array('user_id' => $id));
	}

    public function updatePassword($id)
    {
        $post = $this->input->post();
        if(md5($post["password_lama"]) == $post["data_password_lama"]) 
        {
            //cs..,fd
            if ($post["password_verif"] == $post["password_baru"]) 
            { 
                $data = array(
                    'password' => md5($post["password_baru"])
                );
            }
            else 
            { // dan jika tidak berisi inputan
                $this->session->set_flashdata('message_maaf', 'Konfirmasi password baru anda tidak sama. Silakan periksa kembali password baru dan konfirmasi anda.');
                redirect(site_url('profile'));  //menuju ke halaman admin/products/.
            }
        } //if untuk ngecek password lama
        else {
            $this->session->set_flashdata('message_maaf', 'Anda salah menginput password lama.');
            redirect(site_url('profile'));  //menuju ke halaman admin/products/.
        }
        return $this->db->update($this->_table, $data, array('user_id' => $id));
	}

    
}