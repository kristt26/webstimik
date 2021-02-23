<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_admin extends CI_Controller {

	
	public function index()
	{ 
	
		$this->model_security->getsecurity();

		$query = $this->db->get('user');
			
		$isi['menu'] = 'admin/side_admin';
		$isi['content'] = 'admin/content_view';
		$isi['judul'] = 'Dashboard';
	//	$isi['nama_depan'] = $row['nama_depan'];
	//	$isi['sub_judul'] = ''; 
		
		
		$this->load->view('admin/home_view',$isi );
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('admin/login'); 
	}
	
}