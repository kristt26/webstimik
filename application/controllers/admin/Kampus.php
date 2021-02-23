<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kampus extends CI_Controller {

	
	public function index()
	{ 
		$this->model_security->getsecurity();
		$isi['content'] = 'admin/kampus_view';
		$isi['judul'] = 'kampus';
		$isi['menu'] = 'admin/side_admin';
		$isi['data'] = $this->db->get('kampus');
		$this->load->view('admin/home_view',$isi);
	}

	public function tambahData()
	{
		$this->model_security->getsecurity();
		$isi['content'] = 'admin/form_tambahKampus';
		$isi['menu'] = 'admin/side_admin';
		$isi['judul'] = 'Tambah kampus';
		$this->load->view('admin/home_view',$isi);	

	}

	public function simpanData()
	{
		$this->model_security->getsecurity();
		$this->load->library('upload');
        //config untuk upload gambar
         $nmfile = "file_".time();
        $config['upload_path'] = './assets/images/Kampus';
        $config['allowed_types'] = 'jpg|png|bmp|jpeg|pdf';
        $config['overwrite'] = FALSE;
        $config['max_size'] = '10000';
        $config['file_name'] = $nmfile;
        $this->upload->initialize($config);

		array('upload_data' => $this->upload->data());
        $this->load->model('admin/model_kampus');
        if($_FILES['gambar']['name'])
        {
            if ($this->upload->do_upload('gambar'))
            {
                $gbr = $this->upload->data();
                $data = array(
                  
                  'nama' => $this->input->post('nama'),
                  'isi' =>$this->input->post('isi'),
                  'gambar' =>$gbr['file_name'],   
                );
             }
         } else{
         	$data = array(
                  
                  'nama' => $this->input->post('nama'),
                  'isi' =>$this->input->post('isi'),
              //    'gambar' =>$gbr['file_name'],  
                );
         }

		
		$this->model_kampus->getinsert($data);
		$this->session->set_flashdata('info','data berhasil disimpan');
		redirect('admin/kampus/tambahData');
	}

	public function delete($id)
	{
		$this->model_security->getsecurity();
		$where = array('id' => $id);

		$query = $this->db->get('kampus');
		$row = $query->row();
		unlink('./assets/images/Kampus/'.$row->gambar);
		$this->load->model('admin/model_kampus');		
		$del = $this->model_kampus->deleteData('kampus',$where);

		if($del >= 1)
		{
			$this->session->set_flashdata('info','data berhasil dihapus');
		}

		redirect('admin/kampus');
	}

	public function editData($id){
		$this->model_security->getsecurity();
		$isi['content'] = 'admin/form_editKampus';
		$isi['menu'] = 'admin/side_admin';
		$isi['judul'] = 'Edit kampus';
		$isi['sub_judul'] = 'edit kampus';


		$where = array('id' => $id);
		$this->load->model('admin/model_kampus');
		$query = $this->model_kampus->getdata($where);
		
			
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{
				$isi['id'] = $row->id;
				$isi['nama'] = $row->nama;
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
        $config['upload_path'] = './assets/images/Kampus/';
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
               // 'tanggal' => $this->input->post('tanggal'),
                );
                $query = $this->db->get('kampus');
				$row = $query->row();
				unlink('./assets/images/Kampus/'.$row->gambar);
               
             }

         }else{
         	$data = array(
                  
                  'nama' => $this->input->post('nama'),
                  'isi' =>$this->input->post('isi'),
               // 'tanggal' => $this->input->post('tanggal'),
                );
         } 
        $where = array('id' => $this->input->post('id'), );
		$this->load->model('admin/model_kampus');
		$upd = $this->model_kampus->updatedata('kampus',$data,$where);
		//$upd = $this->session->set_flashdata('info','data berhasil disimpan');

		if($upd >= 1)
		{
			$this->session->set_flashdata('info','data berhasil diupdate');
		}

         redirect('admin/kampus');
	
	}	
	

	
	
}