<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Akademik extends CI_Controller {

	
	public function index()
	{ 
		$this->model_security->getsecurity();
		$isi['content'] = 'admin/akademik_view';
		$isi['judul'] = 'akademik';
		$isi['menu'] = 'admin/side_admin';
		$isi['data'] = $this->db->get('akademik');
		$this->load->view('admin/home_view',$isi);
	}

	public function tambahData()
	{
		$this->model_security->getsecurity();
		$isi['content'] = 'admin/form_tambahAkademik';
		$isi['menu'] = 'admin/side_admin';
		$isi['judul'] = 'Tambah akademik';
		$this->load->view('admin/home_view',$isi);	

	}

	public function simpanData()
	{
		$this->model_security->getsecurity();
		$this->load->library('upload');
        //config untuk upload gambar
         $nmfile = "file_".time();
        $config['upload_path'] = './assets/images/Akademik';
        $config['allowed_types'] = 'jpg|png|bmp|jpeg';
        $config['overwrite'] = FALSE;
        $config['max_size'] = '10000';
        $config['file_name'] = $nmfile;
        $this->upload->initialize($config);

		array('upload_data' => $this->upload->data());
        $this->load->model('admin/model_akademik');
        if($_FILES['files']['name'])
        {
            if ($this->upload->do_upload('files'))
            {
                $gbr = $this->upload->data();
                $data = array(
                  
                  'nama' => $this->input->post('nama'),
                  'isi' =>$this->input->post('isi'),
                  'file' =>$gbr['file_name'],   
                );
             }
         } else{
         	$data = array(
                  
                  'nama' => $this->input->post('nama'),
                  'isi' =>$this->input->post('isi'),
              //    'gambar' =>$gbr['file_name'],  
                );
         }

		
		$this->model_akademik->getinsert($data);
		$this->session->set_flashdata('info','data berhasil disimpan');
		redirect('admin/akademik/tambahData');
	}

	public function delete($id)
	{
		$this->model_security->getsecurity();
		$where = array('id' => $id);

		$query = $this->db->get('akademik');
		$row = $query->row();
		unlink('./assets/images/Akademik/'.$row->file);
		$this->load->model('admin/model_akademik');		
		$del = $this->model_akademik->deleteData('akademik',$where);

		if($del >= 1)
		{
			$this->session->set_flashdata('info','data berhasil dihapus');
		}

		redirect('admin/akademik');
	}

	public function editData($id){
		$this->model_security->getsecurity();
		$isi['content'] = 'admin/form_editAkademik';
		$isi['menu'] = 'admin/side_admin';
		$isi['judul'] = 'Edit akademik';
		$isi['sub_judul'] = 'edit akademik';


		$where = array('id' => $id);
		$this->load->model('admin/model_akademik');
		$query = $this->model_akademik->getdata($where);
		
			
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{
				$isi['id'] = $row->id;
				$isi['nama'] = $row->nama;
				$isi['isi'] = $row->isi;
				$isi['file'] = $row->file;
				
				
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
        $config['upload_path'] = './assets/images/Akademik/';
        $config['allowed_types'] = 'jpg|png|bmp|jpeg';
        $config['overwrite'] = FALSE;
        $config['max_size'] = '10000';
        $config['file_name'] = $nmfile;
        $this->upload->initialize($config);

        array('upload_data' => $this->upload->data());

        if($_FILES['files']['name'])
        {
            if ($this->upload->do_upload('files'))
            {
                $gbr = $this->upload->data();
                $data = array(
                  
                  'nama' => $this->input->post('nama'),
                  'isi' =>$this->input->post('isi'),
                  'file' =>$gbr['file_name'],
               // 'tanggal' => $this->input->post('tanggal'),
                );
                $query = $this->db->get('akademik');
				$row = $query->row();
				unlink('./assets/images/Akademik/'.$row->file);
               
             }

         }else{
         	$data = array(
                  
                  'nama' => $this->input->post('nama'),
                  'isi' =>$this->input->post('isi'),
               // 'tanggal' => $this->input->post('tanggal'),
                );
         } 
        $where = array('id' => $this->input->post('id'), );
		$this->load->model('admin/model_akademik');
		$upd = $this->model_akademik->updatedata('akademik',$data,$where);
		//$upd = $this->session->set_flashdata('info','data berhasil disimpan');

		if($upd >= 1)
		{
			$this->session->set_flashdata('info','data berhasil diupdate');
		}

         redirect('admin/akademik');
	
	}	
	

	
	
}