<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Galeri extends CI_Controller {

	
	public function index()
	{ 
		$this->model_security->getsecurity();
		$isi['content'] = 'publisher/galeri_view';
		$isi['judul'] = 'galeri';
		$isi['menu'] = 'admin/side_publisher';
		$isi['data'] = $this->db->get('galeri');
		$this->load->view('admin/home_view',$isi);
	}

	public function tambahData()
	{
		$this->model_security->getsecurity();
		$isi['content'] = 'publisher/form_tambahGaleri';
		$isi['menu'] = 'admin/side_publisher';
		$isi['judul'] = 'Tambah galeri';
		$this->load->view('admin/home_view',$isi);	

	}

	public function simpanData()
	{
		$this->model_security->getsecurity();
		$this->load->library('upload');
        //config untuk upload gambar
         $nmfile = "file_".time();
        $config['upload_path'] = './assets/images/Galeri';
        $config['allowed_types'] = 'jpg|png|bmp|jpeg';
        $config['overwrite'] = FALSE;
        $config['max_size'] = '10000';
        $config['file_name'] = $nmfile;
        $this->upload->initialize($config);

		array('upload_data' => $this->upload->data());
        $this->load->model('admin/model_galeri');
        if($_FILES['gambar']['name'])
        {
            if ($this->upload->do_upload('gambar'))
            {
                $gbr = $this->upload->data();
                $data = array(
                  
                  'judul' => $this->input->post('judul'),
                  'isi' =>$this->input->post('isi'),
                  'gambar' =>$gbr['file_name'],   
                );
             }
         } else{
         	$data = array(
                  
                  'judul' => $this->input->post('judul'),
                  'isi' =>$this->input->post('isi'),
              //    'gambar' =>$gbr['file_name'],  
                );
         }

		
		$this->model_galeri->getinsert($data);
		$this->session->set_flashdata('info','data berhasil disimpan');
		redirect('publisher/galeri/tambahData');
	}

	public function delete($id)
	{
		$this->model_security->getsecurity();
		$where = array('id' => $id);

		$query = $this->db->get('galeri');
		$row = $query->row();
		unlink('./assets/images/Galeri/'.$row->gambar);
		$this->load->model('admin/model_galeri');		
		$del = $this->model_galeri->deleteData('galeri',$where);

		if($del >= 1)
		{
			$this->session->set_flashdata('info','data berhasil dihapus');
		}

		redirect('publisher/galeri');
	}

	public function editData($id){
		$this->model_security->getsecurity();
		$isi['content'] = 'publisher/form_editGaleri';
		$isi['menu'] = 'admin/side_publisher';
		$isi['judul'] = 'Edit Galeri';
		$isi['sub_judul'] = 'edit galeri';


		$where = array('id' => $id);
		$this->load->model('admin/model_galeri');
		$query = $this->model_galeri->getdata($where);
		
			
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{
				$isi['id'] = $row->id;
				$isi['judul'] = $row->judul;
				$isi['isi'] = $row->isi;
				$isi['gambar'] = $row->gambar;
				
				
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
        $config['upload_path'] = './assets/images/Galeri/';
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
               // 'tanggal' => $this->input->post('tanggal'),
                );
                $query = $this->db->get('galeri');
				$row = $query->row();
				unlink('./assets/images/Galeri/'.$row->gambar);
               
             }

         }else{
         	$data = array(
                  
                  'judul' => $this->input->post('judul'),
                  'isi' =>$this->input->post('isi'),
               // 'tanggal' => $this->input->post('tanggal'),
                );
         } 
        $where = array('id' => $this->input->post('id'), );
		$this->load->model('admin/model_galeri');
		$upd = $this->model_galeri->updatedata('galeri',$data,$where);
		//$upd = $this->session->set_flashdata('info','data berhasil disimpan');

		if($upd >= 1)
		{
			$this->session->set_flashdata('info','data berhasil diupdate');
		}

         redirect('publisher/galeri');
	
	}	
	

	
	
}