<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kegiatan extends CI_Controller {

	
	public function index()
	{ 
		$this->model_security->getsecurity();
		$isi['content'] = 'admin/kegiatan_view';
		$isi['judul'] = 'kegiatan';
		$isi['menu'] = 'admin/side_admin';
		$isi['data'] = $this->db->get('kegiatan');
		$this->load->view('admin/home_view',$isi);
	}

	public function tambahData()
	{
		$this->model_security->getsecurity();
		$isi['content'] = 'admin/form_tambahKegiatan';
		$isi['menu'] = 'admin/side_admin';
		$isi['judul'] = 'Tambah kegiatan';
		$this->load->view('admin/home_view',$isi);	

	}

	public function simpanData()
	{
		$this->model_security->getsecurity();
		$this->load->library('upload');
        //config untuk upload gambar
         $nmfile = "file_".time();
        $config['upload_path'] = './assets/images/kegiatan';
        $config['allowed_types'] = 'jpg|png|bmp|jpeg';
        $config['overwrite'] = FALSE;
        $config['max_size'] = '10000';
        $config['file_name'] = $nmfile;
        $this->upload->initialize($config);

		array('upload_data' => $this->upload->data());
        $this->load->model('admin/model_kegiatan');
        if($_FILES['gambar']['name'])
        {
            if ($this->upload->do_upload('gambar'))
            {
                $gbr = $this->upload->data();
                $data = array(
                  
                  'nama' => $this->input->post('nama'),
                  'isi' =>$this->input->post('isi'),
                  'gambar' =>$gbr['file_name'],                  
                  'tanggal' => $this->input->post('tanggal'),
                  
                  
                );
             }
         } else{
         	$data = array(
                  
                  'nama' => $this->input->post('nama'),
                  'isi' =>$this->input->post('isi'),
              //    'gambar' =>$gbr['file_name'],                  
                  'tanggal' => $this->input->post('tanggal'),
                );
         }

		
		$this->model_kegiatan->getinsert($data);
		$this->session->set_flashdata('info','data berhasil disimpan');
		redirect('admin/kegiatan/tambahData');
	}

	public function delete($id)
	{
		$this->model_security->getsecurity();
		$where = array('id' => $id);

		$query = $this->db->get('kegiatan');
		$row = $query->row();
		unlink('./assets/images/kegiatan/'.$row->gambar);
		$this->load->model('admin/model_kegiatan');		
		$del = $this->model_kegiatan->deleteData('kegiatan',$where);

		if($del >= 1)
		{
			$this->session->set_flashdata('info','data berhasil dihapus');
		}

		redirect('admin/kegiatan');
	}

	public function editData($id){
		$this->model_security->getsecurity();
		$isi['content'] = 'admin/form_editKegiatan';
		$isi['menu'] = 'admin/side_admin';
		$isi['judul'] = 'kegiatan';
		$isi['sub_judul'] = 'edit kegiatan';


		$where = array('id' => $id);
		$this->load->model('admin/model_kegiatan');
		$query = $this->model_kegiatan->getdata($where);
		
			
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{
				$isi['id'] = $row->id;
				$isi['nama'] = $row->nama;
				$isi['isi'] = $row->isi;
				$isi['gambar'] = $row->gambar;
				$isi['tanggal'] = $row->tanggal;
				
			}
		}
		
		$this->load->view('admin/home_view',$isi);
	}

	public function updateData()
	{
		$this->model_security->getsecurity();
		$this->load->library('upload');
        //config untuk upload gambar
         $nmfile = "file_".time();
        $config['upload_path'] = './assets/images/kegiatan/';
        $config['allowed_types'] = 'jpg|png|bmp|jpeg';
        $config['overwrite'] = FALSE;
        $config['max_size'] = '10000';
        $config['file_name'] = $nmfile;
        $this->upload->initialize($config);

        array('upload_data' => $this->upload->data());

        if($_FILES['gambar']['name'])
        {
            if ($this->upload->do_upload('gambar'))
            {
                $gbr = $this->upload->data();
                $data = array(
                  
                  'nama' => $this->input->post('nama'),
                  'isi' =>$this->input->post('isi'),
                  'gambar' =>$gbr['file_name'],
                  'tanggal' => $this->input->post('tanggal'),
                );
                $query = $this->db->get('kegiatan');
				$row = $query->row();
				unlink('./assets/images/kegiatan/'.$row->gambar);
               
             }

         }else{
         	$data = array(
                  
                  'nama' => $this->input->post('nama'),
                  'isi' =>$this->input->post('isi'),
                  'tanggal' => $this->input->post('tanggal'),
                );
         } 
        $where = array('id' => $this->input->post('kode'), );
		$this->load->model('admin/model_kegiatan');
		$upd = $this->model_kegiatan->updatedata('kegiatan',$data,$where);
		//$upd = $this->session->set_flashdata('info','data berhasil disimpan');

		if($upd >= 1)
		{
			$this->session->set_flashdata('info','data berhasil diupdate');
		}

         redirect('admin/kegiatan');
	
	}	
	

	
	
}