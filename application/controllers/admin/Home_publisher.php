<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_publisher extends CI_Controller {

	
	public function index()
	{ 
	
		$this->model_security->getsecurity();
			
		$isi['menu'] = 'admin/side_publisher';
		$isi['content'] = 'admin/content_view';
		$isi['judul'] = 'Dashboard';
	//	$isi['sub_judul'] = ''; 
		$this->load->view('admin/home_view',$isi );
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('admin/login'); 
	}
	
}