<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: Education Time
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>STIMIK Sepuluh Nopember Jayapura</title>
<link rel="shortcut icon" type="image/icon" href="<?php echo base_url().'assets/'; ?>img/ficon.png"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">-->
<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">-->
<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>-->
<link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="<?php echo base_url().'assets/'; ?>layout/scripts/jquery.min.js"></script>
<!-- liteAccordion is Homepage Only -->
<link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>layout/scripts/liteaccordion-v2.2/css/liteaccordion.css" type="text/css" />
<!-- prettyPhoto -->
<link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>/layout/scripts/prettyphoto/prettyPhoto.css" type="text/css" />
<script type="text/javascript" src="<?php echo base_url().'assets/'; ?>/layout/scripts/prettyphoto/jquery.prettyPhoto.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    $("a[rel^='prettyPhoto']").prettyPhoto({
        theme: 'dark_rounded',
        overlay_gallery: false,
        social_tools: false
    });
});
</script>
<!-- / prettyPhoto -->
 
</script>
</head>
<body id="top">
<div class="wrapper row1">
  <div id="header" class="clear">
    <div style="float: left; width: 100px; height: 60px">
      <img src="<?php echo base_url().'assets/img/Logostimik.png'; ?>" width="80">
    </div>  
    <div class="fl_left">
      <h1><a href="index.html">STIMIK Sepuluh Nopember</a></h1>
      <p>Campus of Computer Technology</p>
    </div>
    <!--
    <form action="#" method="post" id="login">
      <fieldset>
        <legend>Student Login</legend>
        <input type="password" />
        <input type="text" />
        <div id="forgot">Need <a href="#">Help ?</a> or <a href="#">Forgot Your Details ?</a></div>
        <input type="image" src="<?php echo base_url().'assets/'; ?>layout/images/sign_in.gif" id="signin" alt="Sign In" />
      </fieldset>
    </form>
    -->
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row2 sticky-top">
  <div id="topnav">
    <ul>
      <li><a href="<?php echo base_url().'home'; ?>">Beranda</a></li>
      <li ><a href="#">Profil</a>
        <ul>
        <?php foreach ($profil as $row) { ?>
          <li><a href="<?php echo base_url().'home/tentang/'.$row['id']; ?>"><?php echo $row['judul']; ?></a></li>
        <?php } ?>
        </ul>
      </li>
      <li><a href="">Kampus</a>
        <ul>
          <li><a href="<?php echo base_url().'home/kampus/Biaya'; ?>">Biaya Kuliah</a></li>
          <li><a href="<?php echo base_url().'home/fasilitas'; ?>">Sarana dan Prasarana</a></li>
          <li><a href="<?php echo base_url().'home/kampus/Beasiswa'; ?>">Beasiswa</a></li>
          <li><a href="#">Mitra Kampus</a></li>
          <li><a href="#">Denah Kampus</a></li>
        </ul>
      </li>
      <li><a href="#">Akademik</a>
        <ul>
          <li><a href="<?php echo base_url().'home/akademik/kalender'; ?>">Kalender Akademik</a></li>
          <li><a href="<?php echo base_url().'home/akademik/Dosen'; ?>">Dosen</a></li>
          <li><a href="#">Peraturan</a></li>
        </ul>
      </li>
      <li><a href="#">Program Studi</a>
        <ul>
          <li><a href="<?php echo base_url().'home/akademik/Informatika'; ?>">Teknik Informatika S1</a></li>
          <li><a href="<?php echo base_url().'home/akademik/sistem_informasi'; ?>">Sistem Informasi S1</a></li>
         
        </ul>
      </li>
      <li><a href="#">Mahasiswa</a>
        <ul>
          <li><a href="#">Jadwal Kuliah</a></li>    
          <li><a href="#">Jadwal Sidang</a></li>
          
        </ul>
      </li>
      <li><a href="#">Informasi</a>
        <ul>
          <li><a href="<?php echo base_url().'home/ListBerita'; ?>">Berita</a></li>
          <li><a href="<?php echo base_url().'home/pengumuman'; ?>">Pengumuman</a></li>
          <li><a href="#">Alumni</a></li>
          <li><a href="<?php echo base_url().'home/document'; ?>">Download Area</a></li>
        </ul>
      </li>
      <li><a href="#">Galeri</a>
        <ul>
          <li><a href="<?php echo base_url().'home/photo'; ?>">Photo</a></li>
          <li><a href="<?php echo base_url().'home/video'; ?>">Video</a></li>
        </ul>
      </li>
      <li>
          <a href="http://elearning.stimiksepnop.ac.id" target="_blank">E-Learning</a>
      </li>
      <li  class="last">
          <a href="http://webmail.stimiksepnop.ac.id">Webmail</a>
      </li>
    </ul>
    <div  class="clear"></div>
  </div>
</div>

<div>

 <?php echo $content; ?>

</div>
<!-- start footer -->
<?php echo $footer; ?>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- Core Scripts - Include with every page -->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/pace/pace.js"></script>
    <script src="<?php echo base_url(); ?>assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
<!-- liteAccordion is Homepage Only --> 
<script type="text/javascript" src="<?php echo base_url().'assets/'; ?>layout/scripts/liteaccordion-v2.2/js/liteaccordion.jquery.min.js"></script> 
<script type="text/javascript">
$("#featured_slide").liteAccordion({
    theme: "os-tpl",
    containerWidth: 960, // fixed (px)
    containerHeight: 360, // fixed (px) - overall height of the slider
    headerWidth: 48, // fixed (px) - slide spine title
    firstSlide: 1, // displays slide (n) on page load
	activateOn: "click", // click or mouseover
    autoPlay: false, // automatically cycle through slides
    pauseOnHover: true, // pause slides on hover
    rounded: false, // square or rounded corners
    enumerateSlides: true, // put numbers on slides
    slideSpeed: 800, // slide animation speed
    cycleSpeed: 6000, // time between slide cycles
});
</script>
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
    <script>
        $(function() {
            $( "#datepicker" ).datepicker({
                dateFormat:'yy-mm-dd',
                changeMonth:true,
                changeyear:true
            });
        });
    </script>
    
</body>
</html>