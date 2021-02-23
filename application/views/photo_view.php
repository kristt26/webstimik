<div class="wrapper row4">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
    <div id="gallery" class="clear">
      
      <div class="gallerycontainer clear">
        <div style="float: left;">
          <ul>
          <?php foreach ($photo as $row) { ?>
            <li><a href="<?php echo base_url().'assets/images/Galeri/'.$row['gambar']; ?>" rel="prettyPhoto[gallery2]" title="<?php echo $row['judul']; ?>"><img src="<?php echo base_url().'assets/images/Galeri/'.$row['gambar']; ?>" alt="<?php echo $row['isi']; ?>" width="300" height="200" /></a></li>
          <?php } ?>  
          </ul>
        </div>
      </div>
      <!-- ########### --> 
    </div>
    <!-- ####################################################################################################### 
    <div class="pagination">
      <ul>
        <li class="prev"><a href="#">&laquo; Previous</a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li class="splitter">&hellip;</li>
        <li><a href="#">6</a></li>
        <li class="current">7</li>
        <li><a href="#">8</a></li>
        <li><a href="#">9</a></li>
        <li class="splitter">&hellip;</li>
        <li><a href="#">14</a></li>
        <li><a href="#">15</a></li>
        <li class="next"><a href="#">Next &raquo;</a></li>
      </ul>
    </div>
    ####################################################################################################### -->
    <div class="clear"></div>
  </div>
</div>