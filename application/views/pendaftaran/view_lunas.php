<?php $this->load->view('pendaftaran/view_header'); ?>
<body>
  <div class="top">
	<H3 ><center>DAFTAR CALON MAHASISWA YANG MELUNASI UANG PENDAFTARAN</center></H3><hr>
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
                                            <th>Bukti Bayar</th>
                                            
                                           
                                    </thead>
                                    <tbody>
                                    	<?php $no=1; foreach ($data->result() as $row): ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row->no_pendaftar; ?></td>
                                            <td><?php echo $row->nama; ?></td>        
                                            <td><a href="<?php echo base_url().'assets/images/Pembayaran/'.$row->gambar;?>"><img src="<?php echo base_url().'assets/images/Pembayaran/'.$row->gambar;?>" width="80" height="40"></a></td>                      
                                            
                                        </tr>
                                         <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            
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

    </script>
</body>
</html>