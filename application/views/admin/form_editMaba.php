			<script type="text/javascript" src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
			<script type="text/javascript">
                function cekform() 
                {
                    if(!$("#nama").val())
                    {
                        alert('Nama tidak boleh kosong');
                        $("#nama").focus();
                        return false;
                    } 

                     
                }
            </script>


            <?php
				$info = $this->session->flashdata('info');
				if(!empty($info))
				{
					echo "<b>".$info."</b><br /><br />";
				}
			?>

						<form method="POST" action="<?php echo base_url().'index.php/admin/maba/updateData'; ?>" enctype="multipart/form-data" onsubmit="return cekform();">		
								<div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Kode</label>
                                            <input type="text" readonly class="form-control" placeholder="kode" name="id" id="id" value="<?php echo $id; ?>">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" placeholder="nama" name="nama" id="nama" value="<?php echo $nama; ?>">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Program Studi</label>
                                            <select id="prodi" name="prodi">
                                                <option <?php if(isset($prodi) && $prodi =="Teknik Informatika") echo "selected"; ?> value="Teknik Informatika" >Teknik Informatika</option>
                                                <option <?php if(isset($prodi) && $prodi =="Sistem Informasi") echo "selected"; ?> value="Sistem Informasi">Sistem Informasi</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input type="text" class="form-control" placeholder="alamat" name="alamat" id="alamat" value="<?php echo $alamat; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Asal Sekolah</label>
                                            <input type="text" class="form-control" placeholder="sekolah" name="sekolah" id="sekolah" value="<?php echo $sekolah; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Registered</label>
                                            <input type="radio" id="ya" name="register" <?php if (isset($register) && $register=="ya") echo "checked";?> value="ya">
                                            <label for="ya">Ya</label>
                                            <input type="radio" id="belum" name="register" <?php if (isset($register) && $register=="belum") echo "checked";?> value="belum">
                                            <label for="belum">Belum</label>
                                        </div>
                                        <div class="from-group">
                                            <label>gelombang</label>
                                            <select id="gelombang" name="gelombang">
                                                <option <?php if(isset($gelombang) && $gelombang =="1") echo "selected"; ?> value="1">1</option>
                                                <option <?php if(isset($gelombang) && $gelombang =="2") echo "selected"; ?> value="2">2</option>
                                                <option <?php if(isset($gelombang) && $gelombang =="3") echo "selected"; ?> value="3">3</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <a href="<?php echo base_url(); ?>index.php/admin/maba" class="btn btn-success">Tutup</a>
                                    </form>
                                </div>
                        </form>
                        