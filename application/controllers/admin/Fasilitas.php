<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fasilitas extends CI_Controller {

	
	public function index()
	{ 
		$this->model_security->getsecurity();
		$isi['content'] = 'admin/fasilitas_view';
		$isi['judul'] = 'fasilitas';
		$isi['menu'] = 'admin/side_admin';
		$isi['data'] = $this->db->get('fasilitas');
		$this->load->view('admin/home_view',$isi);
	}

	public function tambahData()
	{
		$this->model_security->getsecurity();
		$isi['content'] = 'admin/form_tambahFasilitas';
		$isi['menu'] = 'admin/side_admin';
		$isi['judul'] = 'Tambah fasilitas';
		$this->load->view('admin/home_view',$isi);	

	}

	public function simpanData()
	{
		$this->model_security->getsecurity();
		$this->load->library('upload');
        //config untuk upload gambar
         $nmfile = "file_".time();
        $config['upload_path'] = './assets/images/Fasilitas';
        $config['allowed_types'] = 'jpg|png|bmp|jpeg';
        $config['overwrite'] = FALSE;
        $config['max_size'] = '10000';
        $config['file_name'] = $nmfile;
        $this->upload->initialize($config);

		array('upload_data' => $this->upload->data());
        $this->load->model('admin/model_fasilitas');

        $data = array(
        			'nama' => $this->input->post('nama') , 
        			'isi' => $this->input->post('isi'),
        		);
        if($_FILES['gambar1']['name'])
        {
        	if($this->upload->do_upload('gambar1'));
        	$gbr1 = $this->upload->data();
        	$data['gambar1'] = $gbr1['file_name'];
        }
        
        if($_FILES['gambar2']['name'])
        {
        	if($this->upload->do_upload('gambar2'));
        	$gbr2 = $this->upload->data();
        	$data['gambar2'] = $gbr2['file_name'];
        }

        if($_FILES['gambar3']['name'])
        {
        	if($this->upload->do_upload('gambar3'));
        	$gbr3 = $this->upload->data();
        	$data['gambar3'] = $gbr3['file_name'];
        }
        
        if($_FILES['gambar4']['name'])
        {
        	if($this->upload->do_upload('gambar4'));
        	$gbr4 = $this->upload->data();
        	$data['gambar4'] = $gbr4['file_name'];
        }
    /*    

        if($_FILES['gambar']['name'])
        {
            if ($this->upload->do_upload('gambar'))
            {
                $gbr = $this->upload->data();
                $data = array(
                  
                  'judul' => $this->input->post('judul'),
                  'isi' =>$this->input->post('isi'),
                  'gambar1' =>$gbr1['file_name'],                  
                  
                  
                  
                );
             }
         } else{
         	$data = array(
                  
                  'judul' => $this->input->post('judul'),
                  'isi' =>$this->input->post('isi'),
              //    'gambar' =>$gbr['file_name'],                  
                  'tanggal' => $this->input->post('tanggal'),
                );
         }
	*/
		
		$this->model_fasilitas->getinsert($data);
		$this->session->set_flashdata('info','data berhasil disimpan');
		redirect('admin/fasilitas/tambahData');
	}

	public function delete($id)
	{
		$this->model_security->getsecurity();
		$where = array('id' => $id);

		$query = $this->db->get('fasilitas');
		$row = $query->row();
		unlink('./assets/images/Fasilitas/'.$row->gambar1);
		unlink('./assets/images/Fasilitas/'.$row->gambar2);
		unlink('./assets/images/Fasilitas/'.$row->gambar3);
		unlink('./assets/images/Fasilitas/'.$row->gambar4);
		$this->load->model('admin/model_fasilitas');		
		$del = $this->model_fasilitas->deleteData('fasilitas',$where);

		if($del >= 1)
		{
			$this->session->set_flashdata('info','data berhasil dihapus');
		}

		redirect('admin/fasilitas');
	}

	public function editData($id){
		$this->model_security->getsecurity();
		$isi['content'] = 'admin/form_editfasilitas';
		$isi['menu'] = 'admin/side_admin';
		$isi['judul'] = 'fasilitas';
		$isi['sub_judul'] = 'edit fasilitas';


		$where = array('id' => $id);
		$this->load->model('admin/model_fasilitas');
		$query = $this->model_fasilitas->getdata($where);
		
			
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
        $config['upload_path'] = './assets/images/fasilitas/';
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
                $query = $this->db->get('fasilitas');
				$row = $query->row();
				unlink('./assets/images/fasilitas/'.$row->gambar);
               
             }

         }else{
         	$data = array(
                  
                  'judul' => $this->input->post('judul'),
                  'isi' =>$this->input->post('isi'),
                  'tanggal' => $this->input->post('tanggal'),
                );
         } 
        $where = array('id' => $this->input->post('kode'), );
		$this->load->model('admin/model_fasilitas');
		$upd = $this->model_fasilitas->updatedata('fasilitas',$data,$where);
		//$upd = $this->session->set_flashdata('info','data berhasil disimpan');

		if($upd >= 1)
		{
			$this->session->set_flashdata('info','data berhasil diupdate');
		}

         redirect('admin/fasilitas');
	
	}	
	

	
	
}