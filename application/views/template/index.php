<!DOCTYPE html>
<html lang="en">

<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />

	<!-- DESCRIPTION -->
	<meta name="description" content="EduChamp : Education HTML Template" />

	<!-- OG -->
	<meta property="og:title" content="EduChamp : Education HTML Template" />
	<meta property="og:description" content="EduChamp : Education HTML Template" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">

	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="<?=base_url()?>assets/img/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="<?=base_url()?>assets/assets/assets/images/favicon.png" />

	<!-- PAGE TITLE HERE ============================================= -->
	<title>STIMIK Sepuluh Nopember Jayapura </title>

	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
	<script src="<?=base_url()?><?=base_url()?>assets/assets/js/html5shiv.min.js"></script>
	<script src="<?=base_url()?><?=base_url()?>assets/assets/js/respond.min.js"></script>
	<![endif]-->

	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/assets/css/assets.css">

	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/assets/css/typography.css">

	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/assets/css/shortcodes/shortcodes.css">

	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/assets/css/style.css">
	<link class="skin" rel="stylesheet" type="text/css" href="<?=base_url()?>assets/assets/css/color/color-1.css">

	<!-- REVOLUTION SLIDER CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/assets/vendors/revolution/css/layers.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/assets/vendors/revolution/css/settings.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/assets/vendors/revolution/css/navigation.css">
	<!-- REVOLUTION SLIDER END -->
</head>

<body id="bg">
	<div class="page-wraper">
		<div id="loading-icon-bx"></div>
		<!-- Header Top ==== -->
		<header class="header rs-nav header-transparent">
			<div class="top-bar">
				<div class="container">
					<div class="row d-flex justify-content-between">
						<div class="topbar-left">
							<ul>
								<!-- <li><a href="faq-1.html"><i class="fa fa-question-circle"></i>Ask a Question</a></li> -->
								<li><a href="http://webmail.stimiksepnop.ac.id/" target="_blank"><i
											class="fa fa-envelope-o"></i>kampus_ti@stimiksepnop.ac.id</a></li>
							</ul>
						</div>
						<div class="topbar-right">
							<ul>
								<!-- <li>
								<select class="header-lang-bx">
									<option data-icon="flag flag-uk">English UK</option>
									<option data-icon="flag flag-us">English US</option>
								</select>
							</li> -->
								<li><a href="<?=base_url('login')?>">Login</a></li>
								<!-- <li><a href="register.html">Register</a></li> -->
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="sticky-header navbar-expand-lg">
				<div class="menu-bar clearfix">
					<div class="container clearfix">
						<!-- Header Logo ==== -->
						<div class="menu-logo">
							<a href="index.html"><img src="<?=base_url()?>assets/img/stimik.png" alt=""></a>
						</div>
						<!-- Mobile Nav Button ==== -->
						<button class="navbar-toggler collapsed menuicon justify-content-end" type="button"
							data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown"
							aria-expanded="false" aria-label="Toggle navigation">
							<span></span>
							<span></span>
							<span></span>
						</button>
						<!-- Author Nav ==== -->
						<div class="secondary-menu">
							<div class="secondary-inner">
								<ul>
									<li><a href="https://www.facebook.com/stimiksepnop.official" target="_blank"
											class="btn-link facebook"><i class="fa fa-facebook"></i></a></li>
									<li><a href="https://twitter.com/StimikJ" target="_blank"
											class="btn-link twitter"><i class="fa fa-twitter"></i></a></li>
									<li><a href="https://www.instagram.com/stimik.sepnop/" target="_blank"
											class="btn-link instagram"><i class="fa fa-instagram"></i></a></li>
									<li><a href="https://www.youtube.com/c/STIMIKSEPULUHNOPEMBERJAYAPURA"
											target="_blank" class="btn-link youtube"><i class="fa fa-youtube"></i></a>
									</li>
									<!-- <li><a href="javascript:;" class="btn-link"><i class="fa fa-google-plus"></i></a></li> -->
									<!-- <li><a href="javascript:;" class="btn-link"><i class="fa fa-linkedin"></i></a></li> -->
									<!-- Search Button ==== -->
									<li class="search-btn"><button id="quik-search-btn" type="button"
											class="btn-link"><i class="fa fa-search"></i></button></li>
								</ul>
							</div>
						</div>
						<!-- Search Box ==== -->
						<div class="nav-search-bar">
							<form action="#">
								<input name="search" value="" type="text" class="form-control"
									placeholder="Type to search">
								<span><i class="ti-search"></i></span>
							</form>
							<span id="search-remove"><i class="ti-close"></i></span>
						</div>
						<!-- Navigation Menu ==== -->
						<div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown">
							<div class="menu-logo">
								<a href="index.html"><img src="<?=base_url()?>assets/assets/images/logo.png" alt=""></a>
							</div>
							<ul class="nav navbar-nav">
								<li class="active"><a href="<?=base_url()?>">Home</a></li>
								<li><a href="javascript:;">Tentang STIMIK <i class="fa fa-chevron-down"></i></a>
									<ul class="sub-menu">
										<li><a href="<?=base_url('content?set=sejarah')?>">Sejarah</a></li>
										<li><a href="<?=base_url('content?set=visimisi')?>">Visi Misi dan Tujuan</a></li>
										<li><a href="<?=base_url('content?set=struktur')?>">Struktur Organsiasi</a></li>
									</ul>
								</li>
								<li><a href="javascript:;">Akademik <i class="fa fa-chevron-down"></i></a>
									<ul class="sub-menu">
										<li><a href="javascript:;">Program Studi<i class="fa fa-angle-right"></i></a>
											<ul class="sub-menu">
												<li><a href="https://ti.stimiksepnop.ac.id" target="_blank">Teknik Informatika</a></li>
												<li><a href="#">Sistem Informasi</a></li>
											</ul>
										</li>
										<li><a href="#">Kalender Akademik</a></li>
										<li><a href="#">Dosen</a></li>
									</ul>
								</li>
								<li><a href="<?=base_url('pendaftaran/form')?>" target="_blank">Pendaftaran</a></li>
								<li><a href="javascript:;">Directory</a></li>
								<li><a href="javascript:;">Hubungi Kami</a></li>
							</ul>
							<div class="nav-social-link">
								<a href="javascript:;"><i class="fa fa-facebook"></i></a>
								<a href="javascript:;"><i class="fa fa-google-plus"></i></a>
								<a href="javascript:;"><i class="fa fa-linkedin"></i></a>
							</div>
						</div>
						<!-- Navigation Menu END ==== -->
					</div>
				</div>
			</div>
		</header>
		<!-- Header Top END ==== -->
		<!-- Content -->
		<div class="page-content bg-white">
			<!-- Main Slider -->
			<div class="rev-slider">
				<div id="rev_slider_486_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container"
					data-alias="news-gallery36" data-source="gallery"
					style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
					<!-- START REVOLUTION SLIDER 5.3.0.2 fullwidth mode -->
					<div id="rev_slider_486_1" class="rev_slider fullwidthabanner" style="display:none;"
						data-version="5.3.0.2">
						<ul>
							<?php foreach ($slider as $key => $value): ?>
							<li data-index="<?='rs-' . ($key + 1) . '00'?>" data-transition="parallaxvertical"
								data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"
								data-easein="default" data-easeout="default" data-masterspeed="default"
								data-thumb="error-404.html" data-rotate="0" data-fstransition="fade"
								data-fsmasterspeed="500" data-fsslotamount="7" data-saveperformance="off"
								data-title="A STUDY ON HAPPINESS" data-param1="" data-param2="" data-param3=""
								data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
								data-param9="" data-param10=""
								data-description="Science says that Women are generally happier">
								<!-- MAIN IMAGE -->
								<img src="<?=base_url('assets/images/Slider/') . $value['gambar']?>" alt=""
									data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
									data-bgparallax="10" class="rev-slidebg" data-no-retina />

								<!-- LAYER NR. 1 -->
								<div class="tp-caption tp-shape tp-shapewrapper " id="<?='slide-' . ($key + 1) . '00-layer-1'?>"
									data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
									data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
									data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape"
									data-basealign="slide" data-responsive_offset="off" data-responsive="off"
									data-frames='[{"from":"opacity:0;","speed":1,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1,"to":"opacity:0;","ease":"Power4.easeOut"}]'
									data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
									data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
									data-paddingleft="[0,0,0,0]"
									style="z-index: 5;background-color:rgba(2, 0, 11, 0.60);border-color:rgba(0, 0, 0, 0);border-width:0px;">
								</div>
								<!-- LAYER NR. 2 -->
								<div class="tp-caption Newspaper-Title   tp-resizeme" id="<?='slide-' . ($key + 1) . '00-layer-2'?>"
									data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
									data-y="['top','top','top','top']" data-voffset="['250','250','250','240']"
									data-fontsize="['50','50','50','30']" data-lineheight="['55','55','55','35']"
									data-width="full" data-height="none" data-whitespace="normal" data-type="text"
									data-responsive_offset="on"
									data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
									data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
									data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]"
									data-paddingleft="[0,0,0,0]"
									style="z-index: 6; font-family:rubik; font-weight:700; text-align:center; white-space: normal;text-transform:uppercase;">
									Welcome To <br> STIMIK Sepuluh Nopember Jayapura
								</div>

								<!-- LAYER NR. 3 -->
								<div class="tp-caption Newspaper-Subtitle   tp-resizeme" id="<?='slide-' . ($key + 1) . '00-layer-3'?>"
									data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
									data-y="['top','top','top','top']" data-voffset="['210','210','210','210']"
									data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
									data-responsive_offset="on"
									data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
									data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
									data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
									data-paddingleft="[0,0,0,0]"
									style="z-index: 7; white-space: nowrap; color:#fff; font-family:rubik; font-size:18px; font-weight:400;">
									Good Education For Better
								</div>
							</li>
							<?php endforeach;?>
							<!-- SLIDE  -->
						</ul>
					</div><!-- END REVOLUTION SLIDER -->
				</div>
			</div>
			<!-- Main Slider -->
			<div class="content-block">
				<!-- Recent News -->
				<div class="section-area section-sp2">
					<div class="container">
						<div class="row">
							<div class="col-md-12 heading-bx left">
								<h2 class="title-head">Recent <span>News</span></h2>
								<div class="row">
									<div class="col-md-4">
										<div class="recent-news">
											<div class="action-box">
												<img src="<?=base_url()?>assets/assets/images/ketua.jpg" alt="">
											</div>
											<div class="info-bx">
												<h5 class="post-title"><a href="<?=base_url('content?set=sambutan')?>">Sambutan Ketua</a>
												</h5>
												<p style="text-align: justify; text-justify: inter-word;">
													Assalamualaikum Warahmatullahi Wabarakatuh, Salam sejahtera buat kita semua...</p>
												<div class="post-extra">
													<a href="<?=base_url('content?set=sambutan')?>" class="btn-link">Continue Reading</a>
													<!-- <a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>20 Comment</a> -->
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-8">
										<div class="recent-news">
											<div class="action-box">
												<img src="<?=base_url()?>assets/img/pmb1.jpeg" alt="" style="height: 90%">
											</div>
											<div class="info-bx">
												<h5 class="post-title"><a href="<?=base_url('pendaftaran/form')?>">Pendaftaran Mahasiswa
														Baru</a></h5>
												<p
													style="max-width: 1000px; text-align: justify; text-justify: inter-word;">
													Pendaftaran Mahasiswa Baru STIMIK Sepuluh Nopember Jayapura tahun
													ajaran 2021/2022 telah dibuka, anda dapat mengunjungi loket
													pendaftaran yang ada di Kampus kami atau dapat mengakses pendaftaran
													<a href="<?=base_url('pendaftaran/form')?>" class="btn-link" style="color: rgb(2, 137, 248)" target="_blank">PMB</a>,
													untuk keterangan lebih lanjut. Anda juga dapat menghubungi melalui
													line telepon <strong>082289829777</strong> untuk mendapatkan informasi tentang
													pendaftaran.</p>
											</div>
										</div>
									</div>
								</div>
								<!-- <p>It is a long established fact that a reader will be distracted by the readable content of a page</p> -->
							</div>
						</div>
						<br>
						<br>
						<div class="recent-news-carousel owl-carousel owl-btn-1 col-12 p-lr0">
							<?php foreach ($berita as $key => $value): ?>
							<div class="item">
								<div class="recent-news">
									<div class="action-box">
										<img src="<?=base_url('assets/images/Berita/') . $value['gambar']?>" alt="">
									</div>
									<div class="info-bx">
										<ul class="media-post">
											<li><a href=""><i class="fa fa-calendar"></i>
													<?php $data = date_create($value['tanggal']);
echo $this->mylib->hariIndo(date_format($data, "l")) . ', ' . date_format($data, 'd-m-Y');?>
												</a></li>
											<li><a href="#"><i class="fa fa-user"></i>
													<?=$value['level']?>
												</a></li>
										</ul>
										<h5 class="post-title" style="font-size: 15px;"><a href="<?=base_url('content/?set=berita&id=') . $value['id']?>">
												<?=$value['judul']?>
											</a></h5>
										<p>
											<?=substr($value['isi'], 0, 150)?>
										</p>
										<div class="post-extra">
											<a href="<?=base_url('content/?set=berita&id=') . $value['id']?>" class="btn-link">Continue Reading</a>
											<!-- <a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>20 Comment</a> -->
										</div>
									</div>
								</div>
							</div>
							<?php endforeach;?>
						</div>
					</div>
				</div>
				<!-- Recent News End -->
				<!-- Testimonials -->
				<div class="section-area section-sp2 bg-fix ovbl-dark"
					style="background-image:url(<?=base_url()?>assets/assets/images/background/bg1.jpg);">
					<div class="container">
						<div class="row">
							<div class="col-md-12 text-center heading-bx">
								<h2 class="title-head m-b0" style="color:white">Upcoming <span>Events</span></h2>
								<p class="m-b0" style="color:white">Upcoming Education Events To Feed Brain. </p>
							</div>
						</div>
						<div class="row">

						</div>
						<div class="text-center">
							<a href="#" class="btn">View All Event</a>
						</div>
					</div>
				</div>

				<div class="section-area section-sp2">
					<div class="container">
						<div class="row">
							<div class="col-md-12 heading-bx left">
								<h2 class="title-head">Our Galleryy</h2>
								<div class="widget widget_gallery gallery-grid-4">
									<ul  class="magnific-image">
											<?php foreach ($galeri as $key => $value): ?>
												<li><a href="<?=base_url() . 'assets/images/Galeri/' . $value['gambar']?>" class="magnific-anchor"><img
												src="<?=base_url() . 'assets/images/Galeri/' . $value['gambar']?>" alt=""></a></li>
												<?php endforeach;?>
											<!-- <li><a href="<?=base_url()?>assets/assets/images/gallery/pic2.jpg" class="magnific-anchor"><img
											src="<?=base_url()?>assets/assets/images/gallery/pic2.jpg" alt=""></a></li>
											<li><a href="<?=base_url()?>assets/assets/images/gallery/pic3.jpg" class="magnific-anchor"><img
											src="<?=base_url()?>assets/assets/images/gallery/pic3.jpg" alt=""></a></li>
											<li><a href="<?=base_url()?>assets/assets/images/gallery/pic4.jpg" class="magnific-anchor"><img
											src="<?=base_url()?>assets/assets/images/gallery/pic4.jpg" alt=""></a></li>
											<li><a href="<?=base_url()?>assets/assets/images/gallery/pic5.jpg" class="magnific-anchor"><img
											src="<?=base_url()?>assets/assets/images/gallery/pic5.jpg" alt=""></a></li>
											<li><a href="<?=base_url()?>assets/assets/images/gallery/pic6.jpg" class="magnific-anchor"><img
											src="<?=base_url()?>assets/assets/images/gallery/pic6.jpg" alt=""></a></li>
											<li><a href="<?=base_url()?>assets/assets/images/gallery/pic7.jpg" class="magnific-anchor"><img
											src="<?=base_url()?>assets/assets/images/gallery/pic7.jpg" alt=""></a></li>
											<li><a href="<?=base_url()?>assets/assets/images/gallery/pic8.jpg" class="magnific-anchor"><img
											src="<?=base_url()?>assets/assets/images/gallery/pic8.jpg" alt=""></a></li>
											<li><a href="<?=base_url()?>assets/assets/images/gallery/pic8.jpg" class="magnific-anchor"><img
											src="<?=base_url()?>assets/assets/images/gallery/pic8.jpg" alt=""></a></li> -->
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Testimonials END -->
					<div class="section-area section-sp2" style="padding-bottom: 0px;">
						<div class="">
							<div class="row">
								<div class="col-md-12 text-center heading-bx">
								<a href="<?=base_url()?>assets/img/Coris.jpg" class="magnific-anchor"><img
											src="<?=base_url()?>assets/img/Coris.jpg" alt="" width="10%"></a>
								<a href="<?=base_url()?>assets/img/gunadarma.jpg" class="magnific-anchor"><img
											src="<?=base_url()?>assets/img/gunadarma.jpg" alt="" width="10%"></a>
								<a href="<?=base_url()?>assets/img/binuss.jpg" class="magnific-anchor"><img
											src="<?=base_url()?>assets/img/binuss.jpg" alt="" width="10%"></a>
								<a href="<?=base_url()?>assets/img/amikom.jpg" class="magnific-anchor"><img
											src="<?=base_url()?>assets/img/amikom.jpg" alt="" width="10%"></a>
								<a href="<?=base_url()?>assets/img/BMKG.jpg" class="magnific-anchor"><img
											src="<?=base_url()?>assets/img/BMKG.jpg" alt="" width="10%"></a>
								<a href="<?=base_url()?>assets/img/Pura.jpg" class="magnific-anchor"><img
											src="<?=base_url()?>assets/img/Pura.jpg" alt="" width="10%"></a>
								<a href="<?=base_url()?>assets/img/Unisda.jpg" class="magnific-anchor"><img
											src="<?=base_url()?>assets/img/Unisda.jpg" alt="" width="10%"></a>
								</div>
							</div>
						</div>
					</div>

				</div>
				<!-- contact area END -->
			</div>
			<!-- Content END-->
			<!-- Footer ==== -->
		<footer>
			<div class="footer-top">
				<!-- <div class="pt-exebar"> -->
				<div class="container">
					<div class="d-flex align-items-stretch">
						<div class="pt-logo mr-auto">
							<a href="index.html"><img src="<?=base_url()?>assets/img/stimik.png" width="200px"
									alt="" /></a>
						</div>
						<div class="pt-social-link">
							<ul class="list-inline m-a0">
								<li><a href="https://www.facebook.com/stimiksepnop.official" target="_blank"
										class="btn-link"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://twitter.com/StimikJ" target="_blank" class="btn-link"><i
											class="fa fa-twitter"></i></a></li>
								<li><a href="https://www.instagram.com/stimik.sepnop/" target="_blank"
										class="btn-link"><i class="fa fa-instagram"></i></a></li>
								<li><a href="https://www.youtube.com/c/STIMIKSEPULUHNOPEMBERJAYAPURA" target="_blank"
										class="btn-link"><i class="fa fa-youtube"></i></a></li>
							</ul>
						</div>
						<div class="pt-btn-join">
							<a href="<?=base_url('pendaftaran/form')?>" target="_blank" class="btn ">Join Now</a>
						</div>
					</div>
				</div>
				<!-- </div> -->
			</div>
		</footer>
		<!-- Footer END ==== -->
		<button class="back-to-top fa fa-chevron-up"></button>
	</div>

	<!-- External JavaScripts -->
	<script src="<?=base_url()?>assets/assets/js/jquery.min.js"></script>
	<script src="<?=base_url()?>assets/assets/vendors/bootstrap/js/popper.min.js"></script>
	<script src="<?=base_url()?>assets/assets/vendors/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?=base_url()?>assets/assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
	<script src="<?=base_url()?>assets/assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
	<script src="<?=base_url()?>assets/assets/vendors/magnific-popup/magnific-popup.js"></script>
	<script src="<?=base_url()?>assets/assets/vendors/counter/waypoints-min.js"></script>
	<script src="<?=base_url()?>assets/assets/vendors/counter/counterup.min.js"></script>
	<script src="<?=base_url()?>assets/assets/vendors/imagesloaded/imagesloaded.js"></script>
	<script src="<?=base_url()?>assets/assets/vendors/masonry/masonry.js"></script>
	<script src="<?=base_url()?>assets/assets/vendors/masonry/filter.js"></script>
	<script src="<?=base_url()?>assets/assets/vendors/owl-carousel/owl.carousel.js"></script>
	<script src="<?=base_url()?>assets/assets/js/functions.js"></script>
	<script src="<?=base_url()?>assets/assets/js/contact.js"></script>
	<script src='<?=base_url()?>assets/assets/vendors/switcher/switcher.js'></script>
	<!-- Revolution JavaScripts Files -->
	<script src="<?=base_url()?>assets/assets/vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
	<script src="<?=base_url()?>assets/assets/vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
	<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
	<script
		src="<?=base_url()?>assets/assets/vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
	<script
		src="<?=base_url()?>assets/assets/vendors/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
	<script
		src="<?=base_url()?>assets/assets/vendors/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script
		src="<?=base_url()?>assets/assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script
		src="<?=base_url()?>assets/assets/vendors/revolution/js/extensions/revolution.extension.migration.min.js"></script>
	<script
		src="<?=base_url()?>assets/assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
	<script
		src="<?=base_url()?>assets/assets/vendors/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
	<script
		src="<?=base_url()?>assets/assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script
		src="<?=base_url()?>assets/assets/vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
	<script src="//code.tidio.co/5ciunhttzddpibu95sqhq6od9jrkw8gg.js" async></script>
	<script>
		jQuery(document).ready(function () {
			var ttrevapi;
			var tpj = jQuery;
			if (tpj("#rev_slider_486_1").revolution == undefined) {
				revslider_showDoubleJqueryError("#rev_slider_486_1");
			} else {
				ttrevapi = tpj("#rev_slider_486_1").show().revolution({
					sliderType: "standard",
					jsFileLocation: "<?=base_url()?>assets/assets/vendors/revolution/js/",
					sliderLayout: "fullwidth",
					dottedOverlay: "none",
					delay: 9000,
					navigation: {
						keyboardNavigation: "on",
						keyboard_direction: "horizontal",
						mouseScrollNavigation: "off",
						mouseScrollReverse: "default",
						onHoverStop: "on",
						touch: {
							touchenabled: "on",
							swipe_threshold: 75,
							swipe_min_touches: 1,
							swipe_direction: "horizontal",
							drag_block_vertical: false
						}
						,
						arrows: {
							style: "uranus",
							enable: true,
							hide_onmobile: false,
							hide_onleave: false,
							tmp: '',
							left: {
								h_align: "left",
								v_align: "center",
								h_offset: 10,
								v_offset: 0
							},
							right: {
								h_align: "right",
								v_align: "center",
								h_offset: 10,
								v_offset: 0
							}
						},

					},
					viewPort: {
						enable: true,
						outof: "pause",
						visible_area: "80%",
						presize: false
					},
					responsiveLevels: [1240, 1024, 778, 480],
					visibilityLevels: [1240, 1024, 778, 480],
					gridwidth: [1240, 1024, 778, 480],
					gridheight: [768, 600, 600, 600],
					lazyType: "none",
					parallax: {
						type: "scroll",
						origo: "enterpoint",
						speed: 400,
						levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 46, 47, 48, 49, 50, 55],
						type: "scroll",
					},
					shadow: 0,
					spinner: "off",
					stopLoop: "off",
					stopAfterLoops: -1,
					stopAtSlide: -1,
					shuffle: "off",
					autoHeight: "off",
					hideThumbsOnMobile: "off",
					hideSliderAtLimit: 0,
					hideCaptionAtLimit: 0,
					hideAllCaptionAtLilmit: 0,
					debugMode: false,
					fallbacks: {
						simplifyAll: "off",
						nextSlideOnWindowFocus: "off",
						disableFocusListener: false,
					}
				});
			}
		});
	</script>
</body>

</html>