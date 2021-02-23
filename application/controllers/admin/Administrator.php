<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrator extends CI_Controller {

	
	public function index()
	{ 
		$this->model_security->getsecurity();
		$isi['content'] = 'admin/administrator_view';
		$isi['judul'] = 'Administrator';
		$isi['menu'] = 'admin/side_admin';
		$isi['data'] = $this->db->get('user');
		$this->load->view('admin/home_view',$isi);
	}

	public function tambahData()
	{
		$this->model_security->getsecurity();
		$isi['content'] = 'admin/form_tambahUser';
		$isi['menu'] = 'admin/side_admin';
		$isi['judul'] = 'Tambah User';
		$this->load->view('admin/home_view',$isi);	

	}

	public function simpanData()
	{
		$this->model_security->getsecurity();
		$data = array(
					'username' => $this->input->post('username'), 
					'level' => $this->input->post('level'),
					'nama_depan' => $this->input->post('nama_depan'),
					'nama_belakang' => $this->input->post('nama_belakang'),
				);
		$pass = $this->input->post('password');
		$data['password'] = md5($pass);
		$this->load->model('admin/model_administrator');
		$this->model_administrator->getinsert($data);

		$this->session->set_flashdata('info','data berhasil disimpan');
		 
		redirect('admin/administrator/tambahData');
	}

	public function delete($id)
	{
		$this->model_security->getsecurity();
		$where = array('id' => $id);

	//	$query = $this->db->get('event');
	//	$row = $query->row();

		$this->load->model('admin/model_administrator');		
		$del = $this->model_administrator->deleteData('user',$where);

		if($del >= 1)
		{
			$this->session->set_flashdata('info','data berhasil dihapus');
		}

		redirect('admin/administrator');
	}

	public function editData($id){
		$this->model_security->getsecurity();
		$isi['content'] = 'admin/form_editUser';
		$isi['menu'] = 'admin/side_admin';
		$isi['judul'] = 'User';
		$isi['sub_judul'] = 'edit User';


		$where = array('id' => $id);
		$this->load->model('admin/model_administrator');
		$query = $this->model_administrator->getdata($where);
		
			
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{
				$isi['id'] = $row->id;
				$isi['username'] = $row->username;
				$isi['nama_depan'] = $row->nama_depan;
				$isi['nama_belakang'] = $row->nama_belakang;
				
			}
		}
		
		$this->load->view('admin/home_view',$isi);
	}

	public function updateData()
	{
		$this->model_security->getsecurity();
		$data = array(
					'username' => $this->input->post('username'), 
					
					'nama_depan' => $this->input->post('nama_depan'),
					'nama_belakang' => $this->input->post('nama_belakang'),
				);
		
		$where = array('id' => $this->input->post('kode'), );
		$this->load->model('admin/model_administrator');
		$upd = $this->model_administrator->updatedata('user',$data,$where);

		if($upd >= 1)
		 {
			$this->session->set_flashdata('info','data berhasil diubah');
		 }         
	
		redirect('admin/administrator');	
	}

	public function gantiPassword()
	{
		$this->model_security->getsecurity();
		$pass = $this->input->post('password2');
		$data['password'] = md5($pass);
		$where = array('id' => $this->input->post('kode'), );
		$this->load->model('admin/model_administrator');
		$upd = $this->model_administrator->updatedata('user',$data,$where);

		if($upd >= 1)
		 {
			$this->session->set_flashdata('info','pasword berhasil dirubah');
		 }         
	
		redirect('admin/administrator');	
	}
	
}