<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_pendaftar extends CI_Model 
{
	public function getPendaftar($where="")
	{
		$query = $this->db->get_where('pendaftaran',$where);
		return $query;

	}

	public function getinsert($data)
	{
		$this->db->insert('pendaftaran',$data);
	}

	public function getbayar($data)
	{
		$this->db->insert('pembayaran',$data);
	}

	public function updatedata($tabelName,$data,$where)
	{		
		$upd = $this->db->update($tabelName,$data,$where);
		return $upd;
	}


	
}