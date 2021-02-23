			<script type="text/javascript" src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
			<script type="text/javascript">
                function cekform() 
                {
                    if(!$("#judul").val())
                    {
                        alert('Nama File tidak boleh kosong');
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

						<form method="POST" action="<?php echo base_url().'index.php/admin/document/simpanData'; ?>" enctype="multipart/form-data" onsubmit="return cekform();">		
								<div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Nama File</label>
                                            <input type="text" class="form-control" placeholder="doc name" name="judul" id="judul">
                                            
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>File</label>
                                            <input type="file" name="gambar">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal</label>
                                            <input type="text" class="form-control" placeholder="tanggal" name="tanggal" id="datepicker">
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <a href="<?php echo base_url(); ?>index.php/admin/document" class="btn btn-success">Tutup</a>
                                    </form>
                                </div>
                        </form>
                        