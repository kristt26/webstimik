			<script type="text/javascript" src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
			<script type="text/javascript">
                function cekform() 
                {
                    if(!$("#judul").val())
                    {
                        alert('Judul tidak boleh kosong');
                        $("#judul").focus();
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

						<form method="POST" action="<?php echo base_url().'index.php/admin/slider/simpanData'; ?>" enctype="multipart/form-data" onsubmit="return cekform();">		
								<div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input type="text" class="form-control" placeholder="judul" name="judul" id="judul">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi slider</label>
                                            <textarea class="ckeditor" rows="10" name="isi" id="isi"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Gambar</label>
                                            <input type="file" name="gambar">
                                        </div>
                                        <div class="form-group">
                                            <label>Tampil</label><br>
                                            <input type="radio" name="tampil" value="Ya">Ya&nbsp;
                                            <input type="radio" name="tampil" value="Tidak" checked>Tidak
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <a href="<?php echo base_url(); ?>index.php/admin/slider" class="btn btn-success">Tutup</a>
                                    </form>
                                </div>
                        </form>
                        