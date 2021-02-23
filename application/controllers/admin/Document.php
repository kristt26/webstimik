<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Document extends CI_Controller {

	
	public function index()
	{ 
		$this->model_security->getsecurity();
		$isi['content'] = 'admin/document_view';
		$isi['judul'] = 'Document';
		$isi['menu'] = 'admin/side_admin';
		$isi['data'] = $this->db->get('document');
		$this->load->view('admin/home_view',$isi);
	}

	public function tambahData()
	{
		$this->model_security->getsecurity();
		$isi['content'] = 'admin/form_tambahdocument';
		$isi['menu'] = 'admin/side_admin';
		$isi['judul'] = 'Tambah Document';
		$this->load->view('admin/home_view',$isi);	

	}

	public function simpanData()
	{
		$this->model_security->getsecurity();
		$this->load->library('upload');
        //config untuk upload gambar
         $nmfile = "file_".time();
        $config['upload_path'] = './assets/doc';
        $config['allowed_types'] = 'doc|docx|pdf';
        $config['overwrite'] = FALSE;
        $config['max_size'] = '10000';
        $config['file_name'] = $nmfile;
        $this->upload->initialize($config);

		array('upload_data' => $this->upload->data());
        $this->load->model('admin/model_document');
        if($_FILES['gambar']['name'])
        {
            if ($this->upload->do_upload('gambar'))
            {
                $gbr = $this->upload->data();
                $data = array(
                  
                  'nama_doc' => $this->input->post('judul'),
                  //'isi' =>$this->input->post('isi'),
                  'doc' =>$gbr['file_name'],                  
                  'tanggal' => $this->input->post('tanggal'),
                  
                  
                );
             }
         } else{
         	$data = array(
                  
                  'nama_doc' => $this->input->post('judul'),
            //      'isi' =>$this->input->post('isi'),
              //    'gambar' =>$gbr['file_name'],                  
                  'tanggal' => $this->input->post('tanggal'),
                );
         }

		
		$this->model_document->getinsert($data);
		$this->session->set_flashdata('info','data berhasil disimpan');
		redirect('admin/document/tambahData');
	}

	public function delete($id)
	{
		$this->model_security->getsecurity();
		$where = array('id' => $id);

		$query = $this->db->get('berita');
		$row = $query->row();
		unlink('./assets/images/Berita/'.$row->gambar);
		$this->load->model('admin/model_berita');		
		$del = $this->model_berita->deleteData('berita',$where);

		if($del >= 1)
		{
			$this->session->set_flashdata('info','data berhasil dihapus');
		}

		redirect('admin/berita');
	}

	public function editData($id){
		$this->model_security->getsecurity();
		$isi['content'] = 'admin/form_editBerita';
		$isi['menu'] = 'admin/side_admin';
		$isi['judul'] = 'Berita';
		$isi['sub_judul'] = 'edit Berita';


		$where = array('id' => $id);
		$this->load->model('admin/model_berita');
		$query = $this->model_berita->getdata($where);
		
			
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{
				$isi['id'] = $row->id;
				$isi['judul'] = $row->judul;
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
        $config['upload_path'] = './assets/images/Berita/';
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
                  
                  'judul' => $this->input->post('judul'),
                  'isi' =>$this->input->post('isi'),
                  'gambar' =>$gbr['file_name'],
                  'tanggal' => $this->input->post('tanggal'),
                );
                $query = $this->db->get('berita');
				$row = $query->row();
				unlink('./assets/images/Berita/'.$row->gambar);
               
             }

         }else{
         	$data = array(
                  
                  'judul' => $this->input->post('judul'),
                  'isi' =>$this->input->post('isi'),
                  'tanggal' => $this->input->post('tanggal'),
                );
         } 
        $where = array('id' => $this->input->post('kode'), );
		$this->load->model('admin/model_berita');
		$upd = $this->model_berita->updatedata('berita',$data,$where);
		//$upd = $this->session->set_flashdata('info','data berhasil disimpan');

		if($upd >= 1)
		{
			$this->session->set_flashdata('info','data berhasil diupdate');
		}

         redirect('admin/berita');
	
	}	
	

	
	
}