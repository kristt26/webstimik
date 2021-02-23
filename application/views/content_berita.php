<div class="wrapper row4">
  <div id="container" class="clear">
    <!-- ####################################################################################################### -->


    <?php
if (isset($berita)) {
    foreach ($berita as $row) {
        ?>
    	<h3><?php echo $row['judul']; ?></h3>
    	<div class="imgl"><img src="<?php echo base_url() . 'assets/images/Berita/' . $row['gambar']; ?>" width="320" height="200"></div>
    	<p class="latestnews"><?php echo $row['isi']; ?></p>

    <?php
}
} else if (isset($tentang)) {
    foreach ($tentang as $row) {
        ?>
        <h3><?php echo $row['judul']; ?></h3>
        <div class="imgl"><img src="<?php echo base_url() . 'assets/images/Tentang/' . $row['gambar']; ?>" width="320" height="200"></div>
        <p class="latestnews"><?php echo $row['isi']; ?></p>
     <?php
}
} else if (isset($kampus)) {
    foreach ($kampus as $row) {
        ?>
         <h3><?php echo $row['nama']; ?></h3>

        <p class="latestnews"><?php echo $row['isi']; ?></p>
     <?php
}
} else if (isset($fasilitas)) {
    foreach ($fasilitas as $row) {
        ?>
         <h3><?php echo $row['nama']; ?></h3>

        <p class="latestnews"><?php echo $row['isi']; ?></p>
     <?php
}
} else if (isset($akademik)) {
    foreach ($akademik as $row) {

        ?>
            <?php if ($row['file'] == null) {?>
                <p class="latestnews"><?php echo $row['isi']; ?></p>

            <?php } else {?>
                <p class="latestnews"><?php echo $row['isi']; ?></p>
                <div class="imgl"><img src="<?php echo base_url() . 'assets/images/Akademik/' . $row['file']; ?>" width="480" height="680"></div>
            <?php }?>
     <?php
}
} else if (isset($pengumuman)) {
    echo "<h3>Pengumuman</h3>";
    foreach ($pengumuman as $row) {
        ?>
            <p>
                tanggal <i><?php date_default_timezone_set('Asia/Jayapura');
        echo date('d M Y', strtotime($row['tanggal']))?></i>
                <?php echo $row['isi']; ?>
            </p><hr>
    <?php
}
} else if (isset($listberita)) {
    echo "<h3>Daftar Berita</h3>";
    foreach ($listberita as $row) {
        ?>
            <p>
                tanggal <i><?php date_default_timezone_set('Asia/Jayapura');
        echo date('d M Y', strtotime($row['tanggal']))?></i><br>
                <h2><?php echo $row['judul']; ?></h2>
                <?php
$string = $row['isi'];
        echo $string = word_limiter($string, 30);
        echo "<br>";
        ?>
                  <p class="readmore"><a href="<?php echo base_url() . 'index.php/home/berita/' . $row['id']; ?>">Continue Reading &raquo;</a></p>
            </p><hr>

    <?php
}
}

?>


    <!-- ####################################################################################################### -->
    <div class="clear"></div>
  </div>
</div>