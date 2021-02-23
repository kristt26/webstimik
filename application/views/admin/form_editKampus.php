			<script type="text/javascript" src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
			<script type="text/javascript">
                function cekform() 
                {
                    if(!$("#nama").val())
                    {
                        alert('nama tidak boleh kosong');
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

						<form method="POST" action="<?php echo base_url().'index.php/admin/kampus/updateData'; ?>" enctype="multipart/form-data" onsubmit="return cekform();">		
								<div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Kode</label>
                                            <input type="text" class="form-control" placeholder="kode" name="id" id="id" value="<?php echo $id; ?>">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" placeholder="nama" name="nama" id="nama" value="<?php echo $nama; ?>">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi kampus</label>
                                            <textarea class="ckeditor" rows="5" name="isi" id="isi"><?php echo $isi; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Gambar</label>
                                            <input type="file" name="gambar" value="<?php echo $gambar; ?>">
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <a href="<?php echo base_url(); ?>index.php/admin/kampus" class="btn btn-success">Tutup</a>
                                    </form>
                                </div>
                        </form>
                        