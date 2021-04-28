<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_tahun_unit extends CI_Model //ini perintah untuk ngambil data dari database
{
    private $_table_unit = "per_unit"; //nama tabel database unit
    private $_table_tahun = "per_tahun"; //nama tabel database tahun
    // ini berguna untuk mendeklarasikan variabel yang akan digunakan
    public $unit_id;
    public $unit;
    public $tahun_id;
    public $tahun;
    // public setpublik
    // public setpublik
    // public setpublik
    // public setpublik
    // public setpublik
    // public setpublik

    public function rulesAddUnit()
    {
        return [
            ['field' => 'input_unit',
            'label' => 'input_unit',
            'rules' => 'required']
        ];
    }
    
    public function rulesAddTahun()
    {
        return [
            ['field' => 'input_tahun',
            'label' => 'input_tahun',
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

    //ambil data dari tabel
	public function ShowDataTabel($tabel){
		$data = $this->db->get($tabel);
		return $data;
    }
    ///////
	public function ShowDataTabelUnit($tabel){
		$data = $this->db->get($tabel);
		return $data;
	}
	public function ShowDataTabelTahun($tabel){
        $this->db->order_by("tahun", "desc");
		$data = $this->db->get($tabel);
		return $data;
	}

    public function getAllUnit()
    {
        return $this->db->get($this->_table_unit)->result();
    }
    
    public function getAllTahun()
    {
        return $this->db->get($this->_table_tahun)->result();
    }
    
    // 
    // 
    /////////////////////////////////////////////////
    /////////////////////////////////////////////////
    /////////////////////////////////////////////////
    // 
    // 
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["user_id" => $id])->row();
    }


    public function saveUnit()
    {
        $post = $this->input->post();
        // $this->product_id = uniqid();
        $this->unit_id = null;
        $this->unit = $post["input_unit"];
        // $this->created_at = $this->_updateDaftarBaru();
        $datas = array(
            'unit_id' => $this->unit_id,
            'unit'=> $this->unit
        );
        
        return $this->db->insert($this->_table_unit, $datas);
    }

    public function saveTahun()
    {
        $post = $this->input->post();
        // $this->product_id = uniqid();
        $this->tahun_id = null;
        $this->tahun = $post["input_tahun"];
        // $this->created_at = $this->_updateDaftarBaru();
        $datas = array(
            'tahun_id' => $this->tahun_id,
            'tahun'=> $this->tahun
        );
        
        return $this->db->insert($this->_table_tahun, $datas);
    }

    public function deleteUnit($id)
    {
        return $this->db->delete($this->_table_unit, array("unit_id" => $id));
    }
    
    public function deleteTahun($id)
    {
        return $this->db->delete($this->_table_tahun, array("tahun_id" => $id));
    }

    // end a
}