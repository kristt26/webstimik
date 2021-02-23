<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_admin extends CI_Model {
	public function getlogin($u,$p,$l)
	{
		$pwd = md5($p);
		$this->db->where('username',$u);
		$this->db->where('password',$pwd);
		$this->db->where('level',$l);
		$query = $this->db->get('user');


				if($query->num_rows() > 0)
				{
					foreach ($query->result() as $row) 
					{
						$isi = array('username'     => $row->username,
									  'nama_depan'	 => $row->nama_depan,
							);
						
						$this->session->set_userdata($isi);
						redirect('admin/home_admin');
						
					}

				}
				else
				{
					$this->session->set_flashdata('info','maaf username atau password salah !!!');
					redirect('admin/login');
				}

	}
	
	
}