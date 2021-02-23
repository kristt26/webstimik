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

						<form method="POST" action="<?php echo base_url().'index.php/admin/maba/simpanData'; ?>" enctype="multipart/form-data" onsubmit="return cekform();">		
								<div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" placeholder="nama" name="nama" id="nama">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Program Studi</label>
                                            <select id="prodi" name="prodi">
                                                <option value="Teknik Informatika">Teknik Informatika</option>
                                                <option value="Sistem Informasi">Sistem Informasi</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input type="text" class="form-control" placeholder="alamat" name="alamat" id="alamat">
                                        </div>
                                        <div class="form-group">
                                            <label>Asal Sekolah</label>
                                            <input type="text" class="form-control" placeholder="sekolah" name="sekolah" id="sekolah">
                                        </div>
                                        <div class="form-group">
                                            <label>Registered</label>
                                            <input type="radio" id="ya" name="register" value="ya">
                                            <label for="ya">Ya</label>
                                            <input type="radio" id="belum" name="register" value="belum">
                                            <label for="belum">Belum</label>
                                        </div>
                                        <div class="from-group">
                                            <label>gelombang</label>
                                            <select id="gelombang" name="gelombang">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <a href="<?php echo base_url(); ?>index.php/admin/maba" class="btn btn-success">Tutup</a>
                                    </form>
                                </div>
                        </form>
                        