<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_home extends CI_Model {
	
	public function getAkademik($where=""){
		$data = $this->db->query('select * from akademik '.$where);
		return $data;
	}

	
	public function getBerita($where=""){
		$data = $this->db->query("SELECT
			`berita`.*,
			`user`.`username`,
			`user`.`password`,
			`user`.`level`,
			`user`.`nama_depan`,
			`user`.`nama_belakang`
		FROM
			`berita`
			LEFT JOIN `user` ON `berita`.`userid` = `user`.`id` WHERE berita.publish='Y' order by tanggal");
		return $data;
	}
	
	public function getListBerita(){
		$data = $this->db->query('select * from berita order by tanggal desc');
		return $data;
	}
	
	public function getDocument(){
		$data = $this->db->query('select * from document order by tanggal desc');
		return $data;
	}

	public function getFasilitas($where=""){
		$data = $this->db->query('select * from fasilitas '.$where);
		return $data;
	}

	public function getkegiatan($where=""){
		$data = $this->db->query('select * from kegiatan '.$where);
		return $data;
	}

	public function getSliding(){
		$data = $this->db->query('select * from slider where tampil = "Ya" order by id desc');
		return $data;
	}

	public function getVideo(){
		$data = $this->db->query('select * from video where tampil = "ya"');
		return $data;
	}

	public function getGaleriVideo(){
		$data = $this->db->query('select * from video');
		return $data;
	}
	
	public function getKampus($where=""){
		$data = $this->db->query('select * from kampus '.$where);
		return $data;
	}

	public function getGaleri($where=""){
		$data = $this->db->query('select * from galeri order by id desc'.$where);
		return $data;
	}
	
	public function getGaleriHome($where=""){
		$data = $this->db->query('select * from galeri order by id desc limit 10'.$where);
		return $data;
	}

	public function getinsert($data)
	{
		$this->db->insert('pengaduan',$data);
	}

	public function getPengumuman(){
		$data = $this->db->query('select * from pengumuman order by tanggal desc limit 3');
		return $data;
	}
	
	public function getPengumumanLengkap(){
		$data = $this->db->query('select * from pengumuman order by tanggal desc');
		return $data;
	}

	public function getTentang($where=""){
		$data = $this->db->query('select * from tentang '.$where);
		return $data;
	}

	public function getKontak(){
		$data = $this->db->query('select * from kontak');
		return $data;
	}

	public function getDownload($where=""){
		$data = $this->db->query('select * from download '.$where);
		return $data;
	}

	public function getPuskesmas($where=""){
		$data = $this->db->query('select * from puskesmas '.$where);
		return $data;
	}

	public function getBidang($where=""){
		$data = $this->db->query('select * from bidang '.$where);
		return $data;
	}

	public function getBidang2(){
		$data = $this->db->query('select * from bidang where kategori = "bidang"');
		return $data;
	}
    
    public function getMaba_lulus(){
        $data = $this->db->query('select * from maba');
        return $data;
    }
    
    public function count_ti(){
		$query = $this->db->query('SELECT COUNT("prodi") as ti FROM maba WHERE prodi = "Teknik Informatika"');
		return $query;
	}

	public function count_si(){
		$query = $this->db->query('SELECT COUNT("prodi") as si FROM maba WHERE prodi = "Sistem Informasi"');
		return $query;
	}

	public function updateChart($tabel_nama, $data, $id){
		$this->db->where('id',$id);
		$this->db->update($tabel_nama,$data);
	}

	public function getchart(){
		$query = $this->db->get('charts');
		return $query;
	}

}