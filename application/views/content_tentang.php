<div class="wrapper row4">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
    <?php foreach ($tentang as $row) { ?>
    	<h3><?php echo $row['judul']; ?></h3>
    	<div class="imgl"><img src="<?php echo base_url().'assets/images/Berita/'.$row['gambar']; ?>" width="320" height="200"></div>
    	<p class="latestnews"><?php echo $row['isi']; ?></p>

    <?php } ?>
    <!-- ####################################################################################################### -->
    <div class="clear"></div>
  </div>
</div>