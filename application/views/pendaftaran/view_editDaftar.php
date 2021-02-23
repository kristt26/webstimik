<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Mahasiswa</title>
	<link href="<?php echo base_url(); ?>assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="<?php echo base_url(); ?>assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/jquery-ui.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="aa"/>
</head>
<body>

	<H2><center>CALON MAHASISWA</center></H2><hr>

<form method="POST" action="<?php echo base_url().'index.php/pendaftaran/pendaftar/updateData'; ?>" enctype="multipart/form-data" onsubmit="return cekform();">
<?php
$info = $this->session->flashdata('info');
if(!empty($info))
{
    echo "<b>".$info."</b><br /><br />";
}
?>
<div style="margin:auto ;height: 800px; ">
	<div class="col-lg-6">
		<form role="form">
			<div class="form-group">
				<label>Kode</label>
				<input type="text" name="kode" class="form-control" value="<?php echo $id; ?>" readonly>	
			</div>
			<div class="form-group">
				<label>Nama</label>
				<input type="text" name="nama" class="form-control" placeholder="nama calon mahasiswa" value="<?php echo $nama; ?>" >	
			</div>
			<div class="form-group">
				<label>Tempat dan Tanggal Lahir</label>
				<input type="text" name="ttl" class="form-control" placeholder="tempat dan tanggal lahir" value="<?php echo $ttl; ?>">	
			</div>
			<div class="form-group">
				<label>Jenis Kelamin</label>
				<input type="radio" name="jk" value="L" <?php if($jk =="L"){ echo "checked";} ?>>Pria
				<input type="radio" name="jk" value="P" <?php if($jk =="P"){ echo "checked";} ?>>Wanita
			</div>
			<div class="form-group">
				<label>Agama</label>
				<select name="agama">
					<option value=Islam <?php if($agama == "Islam"){ echo "selected";} ?>>Islam</option>
					<option value=Protestan <?php if($agama == "Protestan"){ echo "selected";} ?>>Protestan</option>
					<option value=Katolik <?php if($agama == "Katolik"){ echo "selected";} ?>>Katolik</option>
					<option value=Hindu <?php if($agama == "Hindu"){ echo "selected";} ?>>Hindu</option>
					<option value=Budha <?php if($agama == "Budha"){ echo "selected";} ?>>Budha</option>
				</select>	
			</div>
			<div class="form-group">
				<label>Alamat</label>
				<input type="text" name="alamat" class="form-control" placeholder="Jayapura" value="<?php echo $alamat; ?>">	
			</div>
			<div class="form-group">
				<label>Asal Sekolah</label>
				<input type="text" name="sekolah" class="form-control" placeholder="SMA xxxxx" value="<?php echo $sekolah; ?>">	
			</div>
			<div class="form-group">
				<label>Program Studi</label>
				<select name="prodi">
					<option value=Teknik_Informatika <?php if($prodi == "Teknik_Informatika"){ echo "selected";} ?>>Teknik Informatika</option>
					<option value=Manajemen_Informatika <?php if($prodi == "Manajemen_Informatika"){ echo "selected";} ?>>Manajemen Informatika</option>
					<option value=Teknik_Komputer <?php if($prodi == "Teknik_Komputer"){ echo "selected";} ?>>Teknik Komputer</option>
				</select>	
			</div>
			<div class="form-group">
				<label>Kelas</label>
				<select name="kelas">
					<option value=pagi <?php if($kelas == "pagi"){ echo "selected";} ?>>Pagi</option>
					<option value=sore <?php if($kelas == "sore"){ echo "selected";} ?>>Sore</option>
					<option value=karyawan <?php if($kelas == "karyawan"){ echo "selected";} ?>>Karyawan</option>
				</select>	
			</div>
			<div class="form-group">
				<label>Tahun</label>
				<select name="tahun">
					<option value=2017 <?php if($tahun == 2017){ echo "selected";} ?>>2017</option>
					<option value=2018 <?php if($tahun == 2018){ echo "selected";} ?>>2018</option>
					<option value=2019 <?php if($tahun == 2019){ echo "selected";} ?>>2019</option>
					<option value=2020 <?php if($tahun == 2020){ echo "selected";} ?>>2020</option>
					<option value=2021 <?php if($tahun == 2021){ echo "selected";} ?>>2021</option>
					<option value=2022 <?php if($tahun == 2022){ echo "selected";} ?>>2022</option>
				</select>	
			</div>
			<div class="form-group">
				<label>No Telepon/HP</label>
				<input type="text" name="telepon" class="form-control" placeholder="08134xxxxxxx" value="<?php echo $telepon; ?>">	
			</div>
			
			<div class="form-group">
				<label>Nama Ayah</label>
				<input type="text" name="ayah" class="form-control" placeholder="ayah" value="<?php echo $ayah; ?>">	
			</div>
			<div class="form-group">
				<label>Nama Ibu</label>
				<input type="text" name="ibu" class="form-control" placeholder="ibu" value="<?php echo $ibu; ?>">	
			</div>
			<div class="form-group">
				<label>Gelombang</label>
				<select name="gelombang">
					<option value=1 <?php if($gelombang == 1){ echo "selected";} ?>>I</option>
					<option value=2 <?php if($gelombang == 2){ echo "selected";} ?>>II</option>
					<option value=3 <?php if($gelombang == 3){ echo "selected";} ?>>III</option>
				</select>	
			</div>
			
			 <button type="submit" class="btn btn-primary">Submit</button>
                                        <a href="<?php echo base_url(); ?>pendaftaran/pendaftar" class="btn btn-success">Tutup</a>

		</form>

	</div>
	
		
	
</div>
</form>	


</body>
</html>