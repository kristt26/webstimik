			<script type="text/javascript">
                function cekform() 
                {
                    if(!$("#username").val())
                    {
                        alert('username tidak boleh kosong');
                        $("#username").focus();
                        return false;
                    } 

                    if(!$("#password").val())
                    {
                        alert('password tidak boleh kosong');
                        $("#password").focus();
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

						<form method="POST" action="<?php echo base_url().'index.php/admin/administrator/simpanData'; ?>" enctype="multipart/form-data" onsubmit="return cekform();">		
								<div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control" placeholder="username" name="username" id="username">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="text" class="form-control" placeholder="password" name="password" id="password">
                                        </div>
                                        <div class="form-group">
                                            <label>Level</label>
                                            <select name="level">
                                            	<option value="admin">Admin</option>
                                            	<option value="publisher">Publisher</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Depan</label>
                                            <input type="text" class="form-control" placeholder="nama depan" name="nama_depan">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Belakang</label>
                                            <input type="text" class="form-control" placeholder="nama belakang" name="nama_belakang">
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-success">Reset</button>
                                    </form>
                                </div>
                        </form>
                        