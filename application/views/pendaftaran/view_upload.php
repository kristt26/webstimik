<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Mahasiswa</title>
	<link href="<?php echo base_url(); ?>assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="<?php echo base_url(); ?>assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/jquery-ui.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="aa"/>
<!--
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" />
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/bootstrap/css/bootstarp.min.js"></script>
-->    
	<style>
		.center {
			float: left
		    margin: auto;
		    width: 60%;
		    border: 1px solid #73AD21;
		    padding: 10px;
		}

		.floating-box1 {
		    float: left;
		    width: 20%;
		    height: auto;
		    margin: auto;		   
		    padding: 10px; 
		    
		}

		.floating-box2 {

		    float: left;
		    width: 60%;
		    height: auto;
		    margin: auto;
		     
		    padding: 10px;
		    box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
    		padding: 10px;
    		background: white; 
		   
		}

		.floating-box3{
			float: left;
			width: 20%;
			height: auto;
			margin: auto;
			padding: 10px;

		}

			


	</style>

</head>
<body>

<form method="POST" action="<?php echo base_url().'index.php/pendaftaran/form/simpanBukti'; ?>" enctype="multipart/form-data" onsubmit="return cekform();">
<div class="floating-box1"></div>
<div class="floating-box2">
	<div class="form-group">
		<label>No Pendaftaran</label>
		<input type="text" name="nodaf" class="form-control" value="<?php echo $id; ?>">
	</div>
	<div class="form-group">
		<label>Nama</label>
		<input type="text" name="nama" class="form-control" value="<?php echo $nama; ?>">		
	</div>
	<div class="form-group">
		<input type="file" name="gambar">
	</div>

	 <button type="submit" class="btn btn-primary">Submit</button>
     <a href="<?php echo base_url(); ?>pendaftaran/form" class="btn btn-success">Tutup</a>

	
</div>
</form>



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
	            modal.find('.modal-body input[name="kode"]').val(receipt)
	            modal.find('.modal-body input[name="nama"]').val(receipt2)
	           
	        });
	    });
    </script>
</body>
</html>