<div class="recent-news blog-lg">
	<div class="action-box blog-lg">
		<img src="<?=base_url() . 'assets/images/Berita/' . $data['gambar']?>" alt="">
	</div>
	<div class="info-bx">
		<ul class="media-post">
			<li><a href="#"><i class="fa fa-calendar"></i>
					<?php $tanggal = date_create($data['tanggal']);
echo $this->mylib->hariIndo(date_format($tanggal, "l")) . ', ' . date_format($tanggal, 'd-m-Y');?>
				</a></li>
			<!-- <li><a href="#"><i class="fa fa-comments-o"></i>10 Comment</a></li> -->
		</ul>
		<h5 class="post-title"><a href="#">
				<?=$data['judul']?>
			</a></h5>
		<?=$data['isi']?>

	</div>
</div>