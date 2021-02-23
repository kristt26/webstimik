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

						<form method="POST" action="<?php echo base_url().'index.php/publisher/kegiatan/simpanData'; ?>" enctype="multipart/form-data" onsubmit="return cekform();">		
								<div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" placeholder="nama" name="nama" id="nama">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Isi kegiatan</label>
                                            <textarea class="ckeditor" rows="10" name="isi" id="isi"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Gambar</label>
                                            <input type="file" name="gambar">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal</label>
                                            <input type="text" class="form-control" placeholder="tanggal" name="tanggal" id="datepicker">
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <a href="<?php echo base_url(); ?>index.php/publisher/kegiatan" class="btn btn-success">Tutup</a>
                                    </form>
                                </div>
                        </form>
                        