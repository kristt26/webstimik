<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Maba extends CI_Controller{
    
    public function index()
	{ 
		$this->model_security->getsecurity();
		$isi['content'] = 'publisher/maba_view';
		$isi['judul'] = 'Calon Mahasiswa';
		$isi['menu'] = 'admin/side_publisher';
		$isi['data'] = $this->db->get('maba');
		$this->load->view('admin/home_view',$isi);
	}
    
    public function tambahData()
	{
		$this->model_security->getsecurity();
		$isi['content'] = 'publisher/form_tambahMaba';
		$isi['menu'] = 'admin/side_publisher';
		$isi['judul'] = 'Tambah Maba';
		$this->load->view('admin/home_view',$isi);	

	}
	
	public function simpanData()
	{
		$this->model_security->getsecurity();
		$this->load->model('admin/model_maba');
		$data = array(
					'nama' => $this->input->post('nama') , 
					'prodi' => $this->input->post('prodi'),
					'alamat' => $this->input->post('alamat'),
					'asal_sekolah' => $this->input->post('sekolah'),
					'register' => $this->input->post('register'),
					'gelombang'=> $this->input->post('gelombang')
				);
		
		$this->model_maba->getinsert($data);
		$this->session->set_flashdata('info','data berhasil disimpan');
		redirect('admin/maba/tambahData');
	}
	
		public function delete($id)
	{
		$this->model_security->getsecurity();
		$where = array('id' => $id);

	//	$query = $this->db->get('pengumuman');
	//	$row = $query->row();
	//	unlink('./assets/images/pengumuman/'.$row->gambar);
		$this->load->model('admin/model_maba');		
		$del = $this->model_maba->deleteData('maba',$where);

		if($del >= 1)
		{
			$this->session->set_flashdata('info','data berhasil dihapus');
		}

		redirect('publisher/maba');
	}
	
		public function editData($id){
		$this->model_security->getsecurity();
		$isi['content'] = 'publisher/form_editMaba';
		$isi['menu'] = 'admin/side_publisher';
		$isi['judul'] = 'Edit Calon Maba';
		$isi['sub_judul'] = 'edit calon maba';


		$where = array('id' => $id);
		$this->load->model('admin/model_maba');
		$query = $this->model_maba->get_data($where);
		
			
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{
				$isi['id'] = $row->id;
				$isi['nama'] = $row->nama;
				$isi['prodi'] = $row->prodi;
				$isi['alamat'] = $row->alamat;
				$isi['sekolah'] = $row->asal_sekolah;
				$isi['register'] = $row->register;
				$isi['gelombang'] = $row->gelombang;
			}
		}
		
		$this->load->view('admin/home_view',$isi);
	}
    
    public function updateData()
	{
		$this->model_security->getsecurity();
		
		$data = array(
					'nama' => $this->input->post('nama'),
					'prodi' => $this->input->post('prodi'),
					'alamat' => $this->input->post('alamat'),
					'asal_sekolah' => $this->input->post('sekolah'),
					'register' => $this->input->post('register'),
					'gelombang' => $this->input->post('gelombang'),
				);

        $where = array('id' => $this->input->post('id'), );
		$this->load->model('admin/model_maba');
		$upd = $this->model_maba->updatedata('maba',$data,$where);
		//$upd = $this->session->set_flashdata('info','data berhasil disimpan');

		if($upd >= 1)
		{
			$this->session->set_flashdata('info','data berhasil diupdate');
		}

         redirect('publisher/maba');
	
	}	

}