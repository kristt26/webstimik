<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

	
	public function index()
	{
		//$this->load->model('pendaftaran/model_pendaftar');
		//$isi['hitung'] = $this->model_pendaftar->getHitung();
		$isi['hitung'] = $this->db->query('select * from pendaftaran where gelombang = 1');
	//	$isi['hitung_ya'] = $this->db->query('select * from pendaftaran where formulir = "daftar" and gelombang = 1');
		$isi['hitung2'] = $this->db->query('select * from pendaftaran where gelombang = 2');
	//	$isi['hitung2_ya'] = $this->db->query('select * from pendaftaran where formulir = "daftar" and gelombang = 2');
		$isi['hitung3'] = $this->db->query('select * from pendaftaran where gelombang = 3');
	//	$isi['hitung3_ya'] = $this->db->query('select * from pendaftaran where formulir = "daftar" and gelombang = 3');
		$isi['data'] = $this->db->query('select * from pendaftaran');	
		$isi['jumlah'] = $this->db->query('select * from user');	

				
		
 		$this->load->view('pendaftaran/view_form',$isi);
	}

	public function listmaba()
	{
		$list['data'] = $this->db->query('select * from pendaftaran where tahun_akademik=2020');
		$this->load->view('pendaftaran/view_listmaba',$list);
	}

	public function listlunas()
	{
		$list['data'] = $this->db->query('select no_pendaftar, nama, gambar from pembayaran');
		$this->load->view('pendaftaran/view_lunas',$list);
	}

	public function simpan()
	{
		$data = array(
					'id' => $this->input->post('nodaf'),
					'nama' => $this->input->post('nama'),
					'ttl' => $this->input->post('ttl'),
					'jenis_kelamin' => $this->input->post('jk'),
					'agama' => $this->input->post('agama'),
					'alamat' => $this->input->post('alamat'),
					'asal_sekolah' => $this->input->post('sekolah'),
					'prodi' => $this->input->post('prodi'),
					'kelas' => $this->input->post('kelas'),
					'tahun_akademik' => $this->input->post('tahun'),
					'telepon' => $this->input->post('telepon'),
					'ayah' => $this->input->post('ayah'),
					'ibu' => $this->input->post('ibu'),
					'gelombang' => $this->input->post('gelombang'),
					
				);

		$this->load->model('pendaftaran/model_pendaftar');
		$this->model_pendaftar->getinsert($data);
		$this->session->set_flashdata('info','data berhasil disimpan');
		redirect('pendaftaran/form');
	}

	public function modal($id)
	{
		$where = array('id' => $id);
		$this->load->model('pendaftaran/model_pendaftar');
		$query = $this->model_pendaftar->getPendaftar($where);
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{
				$isi['id'] = $row->id;
				$isi['nama'] = $row->nama;
				

			}
		}

		$this->load->view('pendaftaran/view_listmaba',$isi);

	}

	public function upload($id)
	{
		$where = array('id' => $id);
		$this->load->model('pendaftaran/model_pendaftar');
		$query = $this->model_pendaftar->getPendaftar($where);
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{
				$isi['id'] = $row->id;
				$isi['nama'] = $row->nama;
				

			}
		}

		$this->load->view('pendaftaran/view_upload',$isi);
	}

	public function simpanBukti()
	{
		// $this->model_security->getsecurity();
		$this->load->library('upload');
        //config untuk upload gambar
         $nmfile = "file_".time();
        $config['upload_path'] = './assets/images/Pembayaran';
        $config['allowed_types'] = 'jpg|png|bmp|jpeg';
        $config['overwrite'] = FALSE;
        $config['max_size'] = '10000';
        $config['file_name'] = $this->input->post('nodaf');
        $this->upload->initialize($config);

		array('upload_data' => $this->upload->data());
        $this->load->model('pendaftaran/model_pendaftar');
    //     $cek = $this->db->query('select * from pembayaran');
    //     foreach ($cek->result() as $row) {
    //     	$a = $this->input->post('nodaf');
    //     	$b = $row->no_pendaftar;	
    //       if($a!=$b)
		  // {

		          
        if($_FILES['gambar']['name'])
        {
            if ($this->upload->do_upload('gambar'))
            {
                $gbr = $this->upload->data();
                $data = array(
                  
                  'no_pendaftar' => $this->input->post('nodaf'),
                  'nama' =>$this->input->post('nama'),
                  'gambar' =>$gbr['file_name'],   
                );
             }
             $this->model_pendaftar->getbayar($data);
             redirect('pendaftaran/form/listlunas');
         } 
         // else{
         // 	echo "<script>alert('Bukti Bayar Belum diupload')</script>";

         // }
 //         echo "<script>alert('sudah ada')</script>";

 //     }

     
	// }	
		// $this->model_pendaftar->getbayar($data);
		 // $this->session->set_flashdata('info','data berhasil disimpan');
		 // redirect('pendaftaran/form/listmaba');
	}
	public function editData($id)
	{
		$where = array('id' => $id);
		$this->load->model('pendaftaran/model_pendaftar');
		$query = $this->model_pendaftar->getPendaftar($where);
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{
				$isi['id'] = $row->id;
				$isi['nama'] = $row->nama;
				$isi['ttl'] = $row->ttl;
				$isi['jk'] = $row->jenis_kelamin;
				$isi['agama'] = $row->agama;
				$isi['alamat'] = $row->alamat;
				$isi['sekolah'] = $row->asal_sekolah;
				$isi['prodi'] = $row->prodi;
				$isi['kelas'] = $row->kelas;
				$isi['tahun'] = $row->tahun_akademik;
				$isi['telepon'] = $row->telepon;
				$isi['ayah'] = $row->ayah;
				$isi['ibu'] = $row->ibu;
				$isi['gelombang'] = $row->gelombang;
				

			}
		}

		$this->load->view('pendaftaran/view_editDaftar',$isi);
	}

	public function updateData()
	{
		$data = array(
					'nama' => $this->input->post('nama'),
					'ttl' => $this->input->post('ttl'),
					'jenis_kelamin' => $this->input->post('jk'),
					'agama' => $this->input->post('agama'),
					'alamat' => $this->input->post('alamat'),
					'asal_sekolah' => $this->input->post('sekolah'),
					'prodi' => $this->input->post('prodi'),
					'kelas' => $this->input->post('kelas'),
					'tahun_akademik' => $this->input->post('tahun'),
					'telepon' => $this->input->post('telepon'),
					'ayah' => $this->input->post('ayah'),
					'ibu' => $this->input->post('ibu'),
					'gelombang' => $this->input->post('gelombang'),
					'formulir' => $this->input->post('formulir'), 
				);

		$where = array('id' => $this->input->post('kode'), );
		$this->load->model('pendaftaran/model_pendaftar');
		$upd = $this->model_pendaftar->updatedata('pendaftaran',$data,$where);
		//$upd = $this->session->set_flashdata('info','data berhasil disimpan');

		if($upd >= 1)
		{
			$this->session->set_flashdata('info','data berhasil diupdate');
		}

         redirect('pendaftaran/Form');
	}
	
	public function maba_lulus()
	{
	    $list['data'] = $this->db->query('select * from maba');
	    $this->load->view('view_maba_lulus',$list);
	}


}
