<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_pengumuman extends CI_Model {
	
	public function getdata($where)
	{
		
		$query = $this->db->get_where('pengumuman',$where);
		return $query;
	//	$this->db->where('id_profil',$key);
	//	$hasil = $this->db->get('profil');
	//	return $hasil;
	}

	public function updatedata($tabelName,$data,$where)
	{		
		$upd = $this->db->update($tabelName,$data,$where);
		return $upd;
	}

	public function getinsert($data)
	{
		$this->db->insert('pengumuman',$data);
	}

	public function deleteData($tabelName,$where)
	{
		$del = $this->db->delete($tabelName,$where);
		return $del;

	}
	
	
}