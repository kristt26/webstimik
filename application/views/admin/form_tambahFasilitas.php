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

						<form method="POST" action="<?php echo base_url().'index.php/admin/fasilitas/simpanData'; ?>" enctype="multipart/form-data" onsubmit="return cekform();">		
								<div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Nama Fasilitas</label>
                                            <input type="text" class="form-control" placeholder="nama fasilitas" name="nama" id="nama">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi Fasilitas</label>
                                            <textarea class="ckeditor" rows="10" name="isi" id="isi"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Gambar 1</label>
                                            <input type="file" name="gambar1">
                                        </div>
                                        <div class="form-group">
                                            <label>Gambar 2</label>
                                            <input type="file" name="gambar2">
                                        </div>
                                        <div class="form-group">
                                            <label>Gambar 3</label>
                                            <input type="file" name="gambar3">
                                        </div>
                                        <div class="form-group">
                                            <label>Gambar 4</label>
                                            <input type="file" name="gambar4">
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <a href="<?php echo base_url(); ?>index.php/admin/fasilitas" class="btn btn-success">Tutup</a>
                                    </form>
                                </div>
                        </form>
                        