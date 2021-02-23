<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tentang extends CI_Controller {

	
	public function index()
	{ 
		$this->model_security->getsecurity();
		$isi['content'] = 'admin/tentang_view';
		$isi['judul'] = 'tentang';
		$isi['menu'] = 'admin/side_admin';
		$isi['data'] = $this->db->get('tentang');
		$this->load->view('admin/home_view',$isi);
	}

	public function tambahData()
	{
		$this->model_security->getsecurity();
		$isi['content'] = 'admin/form_tambahTentang';
		$isi['menu'] = 'admin/side_admin';
		$isi['judul'] = 'Tambah tentang';
		$this->load->view('admin/home_view',$isi);	

	}

	public function simpanData()
	{
		$this->model_security->getsecurity();
		$this->load->library('upload');
        //config untuk upload gambar
         $nmfile = "file_".time();
        $config['upload_path'] = './assets/images/Tentang';
        $config['allowed_types'] = 'jpg|png|bmp|jpeg|pdf';
        $config['overwrite'] = FALSE;
        $config['max_size'] = '10000';
        $config['file_name'] = $nmfile;
        $this->upload->initialize($config);

		array('upload_data' => $this->upload->data());
        $this->load->model('admin/model_tentang');
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

		
		$this->model_tentang->getinsert($data);
		$this->session->set_flashdata('info','data berhasil disimpan');
		redirect('admin/tentang/tambahData');
	}

	public function delete($id)
	{
		$this->model_security->getsecurity();
		$where = array('id' => $id);

		$query = $this->db->get('tentang');
		$row = $query->row();
		unlink('./assets/images/tentang/'.$row->gambar);
		$this->load->model('admin/model_tentang');		
		$del = $this->model_tentang->deleteData('tentang',$where);

		if($del >= 1)
		{
			$this->session->set_flashdata('info','data berhasil dihapus');
		}

		redirect('admin/tentang');
	}

	public function editData($id){
		$this->model_security->getsecurity();
		$isi['content'] = 'admin/form_editTentang';
		$isi['menu'] = 'admin/side_admin';
		$isi['judul'] = 'Edit tentang';
		$isi['sub_judul'] = 'edit tentang';


		$where = array('id' => $id);
		$this->load->model('admin/model_tentang');
		$query = $this->model_tentang->getdata($where);
		
			
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
        $config['upload_path'] = './assets/images/Tentang/';
        $config['allowed_types'] = 'jpg|png|bmp|jpeg|pdf';
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
                $query = $this->db->get('tentang');
				$row = $query->row();
				unlink('./assets/images/Tentang/'.$row->gambar);
               
             }

         }else{
         	$data = array(
                  
                  'judul' => $this->input->post('judul'),
                  'isi' =>$this->input->post('isi'),
               // 'tanggal' => $this->input->post('tanggal'),
                );
         } 
        $where = array('id' => $this->input->post('id'), );
		$this->load->model('admin/model_tentang');
		$upd = $this->model_tentang->updatedata('tentang',$data,$where);
		//$upd = $this->session->set_flashdata('info','data berhasil disimpan');

		if($upd >= 1)
		{
			$this->session->set_flashdata('info','data berhasil diupdate');
		}

         redirect('admin/tentang');
	
	}	
	

	
	
}