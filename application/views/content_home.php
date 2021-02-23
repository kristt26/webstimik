<div class="wrapper row3">
  <div id="featured_slide"> 
    <!-- ####################################################################################################### -->
    <ol>
    <?php foreach ($slider as $data) { ?>
      <li>
        <h2><span><?php echo $data['judul']; ?></span></h2>
        <div><img src="<?php echo base_url().'assets/images/Slider/'.$data['gambar']; ?>" alt="" /></div>
      </li>
    <?php } ?>
    </ol>
    <!-- ####################################################################################################### --> 
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row4">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
     <div id="homepage" class="clear">
         <?php $this->load->view('pengumuman') ?>
         <?php $this->load->view('view_maba_lulus'); ?>
         <?php $this->load->view('charts/view_mabacharts'); ?>
         <?php $this->load->view('sambutan_ketua') ?>
         <?php $this->load->view('content_maba'); ?>
    </div>
    
    <div id="homepage" class="clear">
      <div class="fl_left">
        <h2 class="title">Quick Links</h2>
        <div id="hpage_quicklinks">
          <ul class="clear">
            <li><a href="http://simak1011.stimiksepnop.ac.id" target="_blank">Sistem Informasi Akademik</a></li>
            <li><a href="http://elearning.stimiksepnop.ac.id" target="_blank">Elearning</a></li>
            <li><a href="https://banpt.or.id/" >BAN PT</a></li>
            <li><a href="https://forlap.ristekdikti.go.id/
">Pangkalan Data Dikti</a></li>
            <li><a href="http://simlitabmas.ristekdikti.go.id/">Simlitabmas</a></li>
            <li><a href="http://belmawa.ristekdikti.go.id/ijazah/">Verifikasi Ijazah Online</a></li> 
            <li><a href="http://search.proquest.com">e-journal Proquest</a></li>
          </ul>
        </div>
        <h2 class="title">Latest Gallery Images</h2>
        <div id="hpage_gallery">
          <ul class="clear">
          <?php foreach ($galeri as $row) { ?>
            
            <li class="last"><a href="#"  title="<?php echo $row['judul']; ?>"><img src="<?php echo base_url().'assets/images/Galeri/'.$row['gambar']; ?>" width="175" height="130" alt="" /></a></li>
            
            
          <?php } ?>
          </ul>
        </div>
        <h2 class="title">Keep Up With What's Happening</h2>
        <div id="hpage_socialize">
          <ul>
            <li><span>Facebook :</span> <a href="https://www.facebook.com/groups/stimiksepnop/">www.facebook.com/groups/stimiksepnop/</a></li>
            <li><span>Facebook :</span> <a href="https://www.facebook.com/groups/716783235016261/">www.facebook.com/groups/Laboratorium/</a></li>
          </ul>
          <p><strong>Partner Perguruan Tinggi</strong></p>
          <table style="border:0px">
              <tr>
                  <td style="border:0px"><img src="<?php echo base_url().'assets/img/binus.png'; ?>" width="144" height="120" style="border:1px solid black"></td>
                  <td style="border:0px"><img src="<?php echo base_url().'assets/img/oracle.png'; ?>" width="144" height="120" style="border:1px solid black"></td>
              </tr>
              <tr>
                  <td style="border:0px"><img src="<?php echo base_url().'assets/img/SMK1Jayapura.jpg'; ?>" width="144" height="120" style="border:1px solid black"></td>
                  <td style="border:0px"><img src="<?php echo base_url().'assets/img/geoBMKG.jpg'; ?>" width="144" height="120" style="border:1px solid black"></td>
              </tr>
          </table>
          <!--
          <div><img src="<?php echo base_url().'assets/img/binus.png'; ?>" width="144" height="87" style="border:1px solid black"></div>
          <div><img src="<?php echo base_url().'assets/img/oracle.png'; ?>" width="144" height="87" style="border:1px solid black"></div>
          <div><img src="<?php echo base_url().'assets/img/SMK1Jayapura.jpg'; ?>" width="144" height="87" style="border:1px solid black"></div>
          
          -->
        </div>
      </div>
      <!-- ############### -->
      <div class="fl_right">
        <h2 class="title">Latest News</h2>
        <div id="hpage_latestnews">
          <ul>
            <?php foreach ($berita as $row) { ?>
            <li>  
              <div><?php echo "<h3>".$row['judul']."</h3>"; ?></div>
              <div class="imgl"><img src="<?php echo base_url().'assets/images/Berita/'.$row['gambar']; ?>" alt="" width="160" height="80" style="margin-right: 5px; border-style: none;" /></div>
              <p class="latestnews">
                <?php
                    $string = $row['isi'];
                    echo $string = word_limiter($string,20);
                    echo "<br>";
                    
                  ?>
              </p>
              <p class="readmore"><a href="<?php echo base_url().'index.php/home/berita/'.$row['id']; ?>">Continue Reading &raquo;</a></p>
            </li>
            <?php } ?>
          </ul>
        </div>
        <div id="hpage_specials" class="clear">
          <ul>
            <li>
            <h2 class="title">Video</h2>
            <?php foreach ($video as $row) { ?>
              <div class="box">
                <div class="imgholder">
                    <video width="160px" height="120px" controls>
                    <source src="<?php echo base_url().'assets/video/'.$row['video_name']; ?>" type="video/mp4"  />
                    <source src="<?php echo base_url().'assets/video/'.$row['video_name']; ?>" type="video/x-matroska" />
                    <source src="<?php echo base_url().'assets/video/'.$row['video_name']; ?>" type="video/quicktime" />
                    <source src="<?php echo base_url().'assets/video/'.$row['video_name']; ?>" type="video/flv" />
              </video>
                </div>
                <p><?php echo $row['judul']; ?></p>
                
              </div>
              <?php } ?>
            </li>
            <li>  
              <h2 class="title">Kegiatan</h2>
              <?php foreach ($kegiatan as $row) { ?>
              <div class="box">
                <p><strong><?php date_default_timezone_set('Asia/Jayapura'); echo date('d M Y',strtotime($row['tanggal'])); ?>:</strong> <a href="#"><?php echo $row['nama']; ?></a></p>
                <div class="imgholder"><img src="<?php echo base_url().'assets/images/kegiatan/'.$row['gambar']; ?>" width="160" height="80" alt="" /></div>
                <p><?php echo $row['isi']; ?></p>
              </div>
              <?php } ?>
              
            </li>
            <li class="last">            
              <h2 class="title">Pengumuman</h2>
              <?php foreach ($pengumuman as $row) { ?>
              <div class="box">
                <a href="#"><?php echo $row['judul']; ?></a><br>
                published &nbsp;<?php date_default_timezone_set('Asia/Jayapura'); echo date('d M Y',strtotime($row['tanggal'])); ?>
                <p><?php echo $row['isi'] ?></p>
              </div>
              <?php } ?>
              
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- ####################################################################################################### --> 
  </div>
</div>