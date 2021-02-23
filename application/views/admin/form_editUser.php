			

            <?php
				$info = $this->session->flashdata('info');
				if(!empty($info))
				{
					echo "<b>".$info."</b><br /><br />";
				}
			?>

						<form method="POST" action="<?php echo base_url().'index.php/admin/administrator/updateData'; ?>" enctype="multipart/form-data" onsubmit="return cekform();">		
								<div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Kode</label>
                                            <input type="text" class="form-control" placeholder="Kode" name="kode" id="kode" value="<?php echo $id; ?>" readonly>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control" placeholder="username" name="username" id="username" value="<?php echo $username; ?>">
                                            
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Nama Depan</label>
                                            <input type="text" class="form-control" placeholder="nama depan" name="nama_depan" value="<?php echo $nama_depan; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Belakang</label>
                                            <input type="text" class="form-control" placeholder="nama belakang" name="nama_belakang"  value="<?php echo $nama_belakang; ?>">
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-success">Reset</button>
                                    </form>
                                </div>
                        </form>

            <script type="text/javascript">
                function cekform() 
                {
                    

                    if($("#password1").val() != $("#password2").val())
                    {
                        alert('Pasword tidak sama. Ulangi');
                        $("#password2").focus();
                        return false;
                    }    
                }
            </script>

                        <form method="POST" action="<?php echo base_url().'index.php/admin/administrator/gantiPassword'; ?>" enctype="multipart/form-data" onsubmit="return cekform();">
                            <div class="col-lg-6">
                                <form role="form">
                                    <div class="form-group">
                                            <label>Kode</label>
                                            <input type="text" class="form-control" placeholder="Kode" name="kode" id="kode" value="<?php echo $id; ?>" readonly>
                                            
                                        </div>
                                    <div class="form-group">
                                        <label>Ganti Password</label>                                     
                                        <input class="form-control" type="password" name="password1" id="password1">                                    
                                    </div>
                                    <div class="form-group">
                                        <label>Ulangi Password</label>
                                        <input type="password" class="form-control" name="password2" id="password2">
                                    </div>

                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-success">Reset</button>
                                </form>                                
                            </div>
                        </form>