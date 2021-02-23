<div class="wrapper row4">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
    <div id="gallery" class="clear">
      <div class="gallerycontainer clear">
        
        <div style="float: left;">
          <ul>
          <?php foreach ($video as $row) { ?>
            <li>
            	<div style="padding: 10px; background-color: lightgrey; box-shadow: 0px 1px 1px; margin-right: 5px;" >
            	<div style="font-size: 18px; padding-top: 10px"><center><?php echo $row['judul']; ?></center></div>
            	<video width="420px" height="380px" controls>
            		<source src="<?php echo base_url().'assets/video/'.$row['video_name']; ?>" type="video/mp4"  />
            		<source src="<?php echo base_url().'assets/video/'.$row['video_name']; ?>" type="video/x-matroska" />
            		<source src="<?php echo base_url().'assets/video/'.$row['video_name']; ?>" type="video/quicktime" />
            		<source src="<?php echo base_url().'assets/video/'.$row['video_name']; ?>" type="video/flv" />
            	</video>
            	</div>
            </li>
          <?php } ?> 
          </ul>
        </div>
      </div>
      <!-- ########### -->
      
      <!-- ########### --> 
    </div>
    <!-- ####################################################################################################### -->
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
    <!-- ####################################################################################################### -->
    <div class="clear"></div>
  </div>
</div>