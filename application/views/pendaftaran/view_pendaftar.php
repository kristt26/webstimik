<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
    <style>
		.center {
			float: left
		    margin: auto;
		    width: 60%;
		    border: 1px solid #73AD21;
		    padding: 10px;
		}

		.floating-box1 {
		    float: left;
		    width: 20%;
		    height: 75px;
		    margin: auto;
		    border: 1px solid #73AD21; 
		    padding: 10px; 
		}

		.floating-box2 {
		    float: left;
		    width: 60%;
		    height: auto;
		    margin: auto;
		    border: 1px solid #73AD21; 
		    padding: 10px; 
		}


	</style>


</head>
<body>

	<H3 ><center>FORM PENDAFTARAN MAHASISWA BARU</center></H3><hr>

<form method="POST" action="<?php echo base_url().'index.php/pendaftaran/pendaftar/simpan'; ?>" enctype="multipart/form-data" onsubmit="return cekform();">
<?php
$info = $this->session->flashdata('info');
if(!empty($info))
{
    echo "<b>".$info."</b><br /><br />";
}
?>
<div style="margin:auto ;height: 900px; ">
	<div class="floating-box1" >
		Cara Pembayaran Pendaftaran
	</div> 

	
	<div class="floating-box2">
		<form role="form">
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
				<input type="radio" name="jk" value="L">Pria
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
					<option value=Manajemen_Informatika>Manajemen Informatika</option>
					<option value=Teknik_Komputer>Teknik Komputer</option>
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
				<select name="ta">
					<option value=2017>2017</option>
					<option value=2018>2018</option>
					<option value=2019>2019</option>
					<option value=2020>2020</option>
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
					<option value=1>I</option>
					<option value=2>II</option>
					<option value=3>III</option>
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
                                        <a href="<?php echo base_url(); ?>pendaftaran/pendaftar" class="btn btn-success">Tutup</a>

		</form>

	</div>
  	
		
	
</div>
</form>	

<div style="margin-top: 20px; ">
	
</div>	
<div>
	<div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>TTL</th>                                           
                                            <th>Jenis kelamin</th>
                                            <th>Agama</th>
                                            <th>Alamat</th>
                                            <th>Asal Sekolah</th>
                                            <th>Prodi</th>
                                            <th>Kelas</th>
                                            <th>Tahun</th>
                                            <th>Telepon</th>
                                            <th>Ayah</th>
                                            <th>Ibu</th>
                                            <th>Gelombang</th>
                                            <th>Formulir</th>
                                            <th>Aksi</th>
                                           
                                    </thead>
                                    <tbody>
                                    	<?php $no=1; foreach ($data->result() as $row): ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row->nama; ?></td>
                                            <td><?php echo $row->ttl; ?></td>
                                            <td class="center"><?php echo $row->jenis_kelamin; ?></td>
                                            <td><?php echo $row->agama; ?></td>
                                            <td class="center"><?php echo $row->alamat; ?></td>
                                            <td><?php echo $row->asal_sekolah; ?></td>
                                            <td><?php echo $row->prodi; ?></td>
                                            <td><?php echo $row->kelas; ?></td>
                                            <td><?php echo $row->tahun_akademik; ?></td>
                                            <td><?php echo $row->telepon; ?></td>
                                            <td><?php echo $row->ayah; ?></td>
                                            <td class="center"><?php echo $row->ibu; ?></td>
                                            <td class="center"><?php echo $row->gelombang; ?></td>
                                            <td class="center"><?php echo $row->formulir; ?></td>
                                            <td class="center">
                                            <a href="<?php echo base_url().'/index.php/pendaftaran/pendaftar/editData/'.$row->id; ?>">Edit</a>&nbsp;|&nbsp;
                                            <a href="">Delete</a>
                                            </td>
                                        </tr>
                                         <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
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

<!-- The Modal -->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<!-- Modal Header -->
							<div class="modal-header">
								<h4 class="modal-title">Upload Bukti Pembayaran</h4>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							<!-- End Modal Header -->
							<!-- Modal Body -->
							<div class="modal-body">
								
							</div>
							<!-- End Modal Body -->
							<!-- Modal footer -->
							<div class="modal-footer">
								
							</div>
							<!-- End Modal footer -->
						</div>
					</div>
				</div>