<?php $this->load->view('pendaftaran/view_header'); ?>
<div class="top">
	<h3><center><b>FORM PENDAFTARAN CALON MAHASISWA BARU</b></center></h3><hr>
</div>

<form method="POST" action="<?php echo base_url().'index.php/pendaftaran/form/simpan'; ?>" enctype="multipart/form-data" onsubmit="return cekform();">
<?php
$info = $this->session->flashdata('info');
if(!empty($info))
{
    echo "<b>".$info."</b><br /><br />";
}
?>
<div style="margin:auto ;height: 900px; ">
	<div class="floating-box1" >
		
		<p><hr>
			<strong>Cara Melakukan Pendaftaran</strong><br>
			<ol>
				<li>Isi Form Pendaftaran disamping dengan lengkap kemudian submit
				<li>lakukan pembayaran pada bank BNI. Tuliskan pada isian berita untuk prodi Teknik Informatika <strong><i>pdftn (nama anda)/no.pendaftaran/S1/T.Informatika </i></strong> dan untuk prodi sistem Informasi <strong><i>pdftn (nama anda)/no.pendaftaran/S1/S.Informasi</i></i></strong>
				
				<li>Klik link laman <strong>daftar calon mahasiswa baru</strong> pada bagian kanan atau klik submenu Calon Mahasiswa pada menu Daftar
				<li>Pada daftar calon mahasiswa, cari nama anda kemudian klik tombol upload yang terdapat pada kolom paling kanan untuk mengungah/upload bukti pelunasan
				<li>bukti bahwa upload pelunasan telah berhasil dapat dilihat pada link Daftar Pelunasan Pendaftaran dimana terdapat gambar bukti pelunasan pada kolom Bukti Bayar (gambar dapat dilihat dalam ukuran besar dengan klik gambar)
			</ol>
		</p>
	</div> 

	
	<div class="floating-box2">
	<div>
		<form role="form">
			<div class="form-group">
				<label>No Pendaftaran</label>
				<input type="text" name="nodaf" class="form-control" value="G1-DO2021-<?php echo $data->num_rows()+1 ;?>" readonly>
			</div>
			<div class="form-group">
				<label>Nama</label>
				<input type="text" name="nama" class="form-control" placeholder="nama calon mahasiswa" ">	
			</div>
			<div class="form-group">
				<label>Tempat dan Tanggal Lahir</label>
				<input type="text" name="ttl" class="form-control" placeholder="tempat dan tanggal lahir">	
			</div>
			<div class="form-group">
				<label>Jenis Kelamin</label>
				<input type="radio" name="jk" value="L" checked>Pria
				<input type="radio" name="jk" value="P">Wanita
			</div>
			<div class="form-group">
				<label>Agama</label>
				<select name="agama">
					<option value=Islam>Islam</option>
					<option value=Protestan>Protestan</option>
					<option value=Katolik>Katolik</option>
					<option value=Hindu>Hindu</option>
					<option value=Budha>Budha</option>
				</select>
			</div>
			<div class="form-group">
				<label>Alamat</label>
				<input type="text" name="alamat" class="form-control" placeholder="Jayapura">	
			</div>
			<div class="form-group">
				<label>Asal Sekolah</label>
				<input type="text" name="sekolah" class="form-control" placeholder="SMA xxxxx">	
			</div>
			<div class="form-group">
				<label>Program Studi</label>
				<select name="prodi">
					<option value=Teknik_Informatika>Teknik Informatika</option>
					<option value=Sistem_Informasi>Sistem Informasi</option>
					<!-- <option value=Teknik_Komputer>Teknik Komputer</option> -->
				</select>	
			</div>
			<div class="form-group">
				<label>Kelas</label>
				<select name="kelas">
					<option value=pagi>Pagi</option>
					<option value=sore>Sore</option>
					<option value=karyawan>Karyawan</option>
				</select>	
			</div>
			<div class="form-group">
				<label>Tahun</label>
				<select name="tahun">
					<option value=2021>2021</option>
					<option value=2022>2022</option>
				</select>	
			</div>
			<div class="form-group">
				<label>No Telepon/HP</label>
				<input type="text" name="telepon" class="form-control" placeholder="08134xxxxxxx">	
			</div>
			
			<div class="form-group">
				<label>Nama Ayah</label>
				<input type="text" name="ayah" class="form-control" placeholder="ayah">	
			</div>
			<div class="form-group">
				<label>Nama Ibu</label>
				<input type="text" name="ibu" class="form-control" placeholder="ibu">	
			</div>
			<div class="form-group">
				<label>Gelombang</label>
				<select name="gelombang">
				    <option value=1 selected>I</option>
					<option value=2 >II</option>
					<option value=3 >III</option>
					
				</select>	
			</div>
			<!--
			<div class="form-group">
				<label>Formulir</label>
				<input type="radio" name="formulir" value="pengambilan">Ambil Formulir
				<input type="radio" name="formulir" value="daftar">Daftar	
			</div>
			-->
			 <button type="submit" class="btn btn-primary">Submit</button>
                                        <a href="<?php echo base_url(); ?>pendaftaran/form" class="btn btn-success">Tutup</a>

		</form>

	</div>  	
		
	
</div>
<div class="floating-box3">
  		<a href="<?php echo base_url(); ?>pendaftaran/form/listmaba">Daftar calon mahasiswa Baru</a>
  		<p>
  		<a href="<?php echo base_url(); ?>pendaftaran/form/listlunas">Daftar pelunasan pendaftaran</a>
  		</p><hr>
  		<p></p>
  		<div>
  		  Persyaratan bagi pendaftar online<br\>
  		  Gelombang I, II, III pada saat seleksi diwajibkan membawa :
  		  <ol>
  		  <li>Pas Photo ukuran 4 x 6 = 3 lembar
  		  <li>Pas Photo ukuran 3 x 4 = 3 lembar
  		  <li>Fotocopy KTP
  		  <li>Fotocopy Ijazah dan Nilai SMA,SMK dan yang sederajat yang dilegalisir
  		  <li>Surat keterangan telah lulus bagi yang belum terbit ijazahnya
  		  </ol>
  		</div>
  		
  	</div>
</form>	

<div style="margin-top: 20px; ">
	
</div>	



<script src="<?php echo base_url(); ?>assets/plugins/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/pace/pace.js"></script>
    <script src="<?php echo base_url(); ?>assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <!-- Calender -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/jquery-ui.js"></script>
    <!-- end Calender -->   

    <script src="<?php echo base_url(); ?>assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>
</body>
</html>