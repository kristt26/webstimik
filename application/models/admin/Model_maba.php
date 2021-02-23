<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_maba extends CI_Model{
    public function get_data($where){
        $query = $this->db->get_where('maba', $where);
        return $query;
    }
    
    public function getinsert($data)
	{
		$this->db->insert('maba',$data);
	}
	
	public function updatedata($tabelName,$data,$where)
	{		
		$upd = $this->db->update($tabelName,$data,$where);
		return $upd;
	}
	
	public function deleteData($tabelName,$where)
	{
		$del = $this->db->delete($tabelName,$where);
		return $del;

	}
}
