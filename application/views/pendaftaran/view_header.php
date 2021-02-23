<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Mahasiswa</title>
	<link rel="shortcut icon" type="image/icon" href="<?php echo base_url().'assets/'; ?>img/ficon.png"/>
	<link href="<?php echo base_url(); ?>assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="<?php echo base_url(); ?>assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/jquery-ui.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="aa"/>
    <style>
		.center {
			float: left
		    
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

		.bgbody{
			background: url("<?php echo base_url(); ?>assets/img/Logostimik.png");

		}

		.top{
			margin-top: -20px;
			background: linear-gradient(-90deg,red,blue);
			color: #FFFFFF;
			padding-top: 5px;
			
		}

		.top2{
			width: auto;
			height: auto;
			background-color: #000000;
			padding-left: 100px;
		}
		
			
		


	</style>


</head>
<body>
<div class="top2">	
<?php $this->load->view('pendaftaran/dropdown'); ?>
</div>