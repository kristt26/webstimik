<div class="wrapper row4">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
    <div id="gallery" class="clear">
      
      <div class="gallerycontainer clear">
        <div style="float: left;">
          <ul>
          <?php foreach ($document as $row) { ?>
            <li><a href="<?php echo base_url().'assets/doc/'.$row['doc']; ?>"><img src="<?php echo base_url().'assets/doc/gambarpdf.jpg'; ?>"></a><br> <?php echo $row['nama_doc'] ;?><br> <?php date_default_timezone_set('Asia/Jayapura'); echo date('d M Y',strtotime($row['tanggal']))?></li>
            
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