<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url().'assets/img/Logostimik.png'; ?>" width="40"></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo base_url().'pendaftaran/form'; ?>">Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Daftar
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo base_url().'pendaftaran/form/listmaba'; ?>">Calon Mahasiswa</a></li>
          <li><a href="<?php echo base_url().'pendaftaran/form/listlunas'; ?>">Pembayaran</a></li>
        </ul>
      </li>
      
    </ul>
  </div>
</nav>