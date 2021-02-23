<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Model_galeri extends CI_Model
{

    public function getdata($where)
    {

        $query = $this->db->get_where('galeri', $where);
        return $query;
        //    $this->db->where('id_profil',$key);
        //    $hasil = $this->db->get('profil');
        //    return $hasil;
    }

    public function select()
    {
        return $this->db->query("SELECT * FROM galeri ORDER BY id DESC LIMIT 8");
    }

    public function updatedata($tabelName, $data, $where)
    {
        $upd = $this->db->update($tabelName, $data, $where);
        return $upd;
    }

    public function getinsert($data)
    {
        $this->db->insert('galeri', $data);
    }

    public function deleteData($tabelName, $where)
    {
        $del = $this->db->delete($tabelName, $where);
        return $del;

    }

}
