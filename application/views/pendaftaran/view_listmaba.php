<?php $this->load->view('pendaftaran/view_header'); ?>
    <script>
        function validateForm() {
            var x = document.forms["myForm"]["gambar"].value;
            if (x == "") {
                alert("Belum memilih bukti pelunasan");
                return false;
            }
        }
    </script>


<body>
  <div class="top">
	<H3 ><center>DAFTAR CALON MAHASISWA BARU</center></H3><hr>
  </div>
               
				<div>
					<div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No Pendaftaran</th>
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
                                            
                                            <th>Aksi</th>
                                           
                                    </thead>
                                    <tbody>
                                    	<?php $no=1; foreach ($data->result() as $row): ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row->id; ?></td>
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
                                            <td class="center">
                                            <a data-toggle="modal" data-target="#myModal" data-code="<?php echo $row->id; ?>" data-name="<?php echo $row->nama; ?>"><button class="btn btn-primary">Upload</button></a>

                                            	<!-- Button to open the modal 
                                            	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" data-code="<?php echo $row->id; ?>" data-name="<?php echo $row->nama; ?>">
                                            		Upload
                                            	</button>                                                    -->
                                              <!-- <a href="<?php echo base_url().'index.php/pendaftaran/form/upload/'.$row->id; ?>"><button class="btn btn-primary">Upload</button></a> -->

	                                        </td>
                                        </tr>
                                         <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
				</div>
                <div class="container">
                    <strong style="color:blue">Note : Gunakan fasilitas SEARCH untuk mencari nama anda</strong>
                </div>

				<!-- The Modal -->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<!-- Modal Header -->
							<div class="modal-header">
								<h4 >Upload Bukti Pembayaran</h4>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							<!-- End Modal Header -->
							<!-- Modal Body -->
							<form method="post" name="myForm" action="<?php echo base_url().'index.php/pendaftaran/form/simpanBukti'; ?>" enctype="multipart/form-data" onsubmit="return validateForm()">
							<div class="modal-body">
								<div class="from-group">
									<label class="control-label">No Pendaftaran</label>
									<input type="input" name="nodaf" class="form-control" id="receipt">
								</div>
								<div class="from-group">
									<label class="control-label">Nama</label>
									<input type="input" name="nama" class="form-control" id="receipt2">
								</div>
								
							</div>
							<div class="container">
									<input type="file" name="gambar">
							</div>
							
							<!-- End Modal Body -->
							<div class="modal-footer">
								
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary">Save</button>
								
							</div>
                            </form>
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

  //       $('#myModal').on('show.bs.modal', function (event) {
  // 			var button = $(event.relatedTarget) // Button that triggered the modal
		// 	  var recipient = button.data('whatever') // Extract info from data-* attributes
		// 	  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		// 	  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		// 	  var modal = $(this)
		// 	  modal.find('.modal-title').text('New message to ' + recipient)
		// 	  modal.find('.modal-body input').val(recipient)
		// })

		 $(document).ready(function() {
        // Untuk sunting
	        $('#myModal').on('show.bs.modal', function (event) {
	            var diva = $(event.relatedTarget) // Tombol dimana modal di tampilkan
	            
	            var receipt = diva.data('code')
	            var receipt2 = diva.data('name')
	            var modal          = $(this)
	 
	            // Isi nilai pada field
	            modal.find('.modal-body input[name="nodaf"]').val(receipt)
	            modal.find('.modal-body input[name="nama"]').val(receipt2)
	           
	        });
	    });


    </script>
</body>
</html>