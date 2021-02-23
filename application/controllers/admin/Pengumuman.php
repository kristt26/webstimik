<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

	
	public function index()
	{ 
		$this->model_security->getsecurity();
		$isi['content'] = 'admin/pengumuman_view';
		$isi['judul'] = 'pengumuman';
		$isi['menu'] = 'admin/side_admin';
		$isi['data'] = $this->db->get('pengumuman');
		$this->load->view('admin/home_view',$isi);
	}

	public function tambahData()
	{
		$this->model_security->getsecurity();
		$isi['content'] = 'admin/form_tambahPengumuman';
		$isi['menu'] = 'admin/side_admin';
		$isi['judul'] = 'Tambah pengumuman';
		$this->load->view('admin/home_view',$isi);	

	}

	public function simpanData()
	{
		$this->model_security->getsecurity();
		$this->load->model('admin/model_pengumuman');
		$data = array(
					'judul' => $this->input->post('judul') , 
					'isi' => $this->input->post('isi'),
					'tanggal' => $this->input->post('tanggal'),
				);
		
		$this->model_pengumuman->getinsert($data);
		$this->session->set_flashdata('info','data berhasil disimpan');
		redirect('admin/pengumuman/tambahData');
	}

	public function delete($id)
	{
		$this->model_security->getsecurity();
		$where = array('id' => $id);

	//	$query = $this->db->get('pengumuman');
	//	$row = $query->row();
	//	unlink('./assets/images/pengumuman/'.$row->gambar);
		$this->load->model('admin/model_pengumuman');		
		$del = $this->model_pengumuman->deleteData('pengumuman',$where);

		if($del >= 1)
		{
			$this->session->set_flashdata('info','data berhasil dihapus');
		}

		redirect('admin/pengumuman');
	}

	public function editData($id){
		$this->model_security->getsecurity();
		$isi['content'] = 'admin/form_editPengumuman';
		$isi['menu'] = 'admin/side_admin';
		$isi['judul'] = 'Edit pengumuman';
		$isi['sub_judul'] = 'edit pengumuman';


		$where = array('id' => $id);
		$this->load->model('admin/model_pengumuman');
		$query = $this->model_pengumuman->getdata($where);
		
			
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{
				$isi['id'] = $row->id;
				$isi['judul'] = $row->judul;
				$isi['isi'] = $row->isi;
				$isi['tanggal'] = $row->tanggal;
				
				
			}
		}
		
		$this->load->view('admin/home_view',$isi);
	}

	public function updateData()
	{
		$this->model_security->getsecurity();
		
		$data = array(
					'judul' => $this->input->post('judul') ,
					'isi' => $this->input->post('isi'),
					'tanggal' => $this->input->post('tanggal'),
				);

        $where = array('id' => $this->input->post('id'), );
		$this->load->model('admin/model_pengumuman');
		$upd = $this->model_pengumuman->updatedata('pengumuman',$data,$where);
		//$upd = $this->session->set_flashdata('info','data berhasil disimpan');

		if($upd >= 1)
		{
			$this->session->set_flashdata('info','data berhasil diupdate');
		}

         redirect('admin/pengumuman');
	
	}	
	

	
	
}