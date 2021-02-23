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
	<link rel="icon" href="<?=base_url()?>assets/assets/images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="<?=base_url()?>assets/assets/assets/images/favicon.png" />

	<!-- PAGE TITLE HERE ============================================= -->
	<title>STIMIK Sepuluh Nopember Jayapura </title>

	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
	<script src="<?=base_url()?>assets/assets/js/html5shiv.min.js"></script>
	<script src="<?=base_url()?>assets/assets/js/respond.min.js"></script>
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
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/orgchart/3.1.1/css/jquery.orgchart.min.css" integrity="sha512-bCaZ8dJsDR+slK3QXmhjnPDREpFaClf3mihutFGH+RxkAcquLyd9iwewxWQuWuP5rumVRl7iGbSDuiTvjH1kLw==" crossorigin="anonymous" /> -->

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
								<li><a href="http://webmail.stimiksepnop.ac.id" target="_blank"><i
											class="fa fa-envelope-o"></i>kampus_ti@stimiksepnop.ac.id.com</a></li>
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
							<a href="index.html"><img src="<?=base_url()?>assets/assets/images/stimik.png" alt=""></a>
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
									<li><a href="javascript:;" class="btn-link facebook"><i
												class="fa fa-facebook"></i></a></li>
									<li><a href="javascript:;" class="btn-link twitter"><i
												class="fa fa-twitter"></i></a></li>
									<li><a href="javascript:;" class="btn-link instagram"><i
												class="fa fa-instagram"></i></a></li>
									<li><a href="javascript:;" class="btn-link youtube"><i
												class="fa fa-youtube"></i></a></li>
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
		<!-- header END ==== -->
		<!-- Content -->
		<div class="page-content bg-white">
			<!-- inner page banner -->
			<div class="page-banner ovbl-dark" style="background-image:url(<?=base_url() . $url?>);">
				<div class="container">
					<div class="page-banner-entry">
						<h1 class="text-white"><?=$judul?></h1>
					</div>
				</div>
			</div>
			<!-- Breadcrumb row -->
			<div class="breadcrumb-row">
				<div class="container">
					<ul class="list-inline">
						<li><a href="#">Home</a></li>
						<li><?=$breadcrumb?></li>
					</ul>
				</div>
			</div>
			<!-- Breadcrumb row END -->
			<div class="content-block">
				<div class="">
					<div class="container">
						<div class="row">
							<!-- Left part start -->
							<div class="col-lg-8 col-xl-8">
								<!-- blog start -->
								<?=$content;?>
							</div>
							<!-- Left part END -->
							<!-- Side bar start -->
							<div class="col-lg-4 col-xl-4">
								<aside class="side-bar sticky-top">
									<div class="widget">
										<h6 class="widget-title">Search</h6>
										<div class="search-bx style-1">
											<form role="search" method="post">
												<div class="input-group">
													<input name="text" class="form-control"
														placeholder="Enter your keywords..." type="text">
													<span class="input-group-btn">
														<button type="submit"
															class="fa fa-search text-primary"></button>
													</span>
												</div>
											</form>
										</div>
									</div>
									<div class="widget recent-posts-entry">
										<h6 class="widget-title">Recent Posts</h6>
										<div class="widget-post-bx">
											<?php foreach ($recent as $key => $value): ?>
											<div class="widget-post clearfix">
												<div class="ttr-post-media"> <img
														src="<?=base_url() . 'assets/images/Berita/' . $value['gambar']?>" width="200"
														height="143" alt=""> </div>
												<div class="ttr-post-info">
													<div class="ttr-post-header">
														<h6 class="post-title"><a href="<?=base_url('content/?set=berita&id=') . $value['id']?>"><?=$value['judul']?></a></h6>
													</div>
													<ul class="media-post">
														<li><a href="#"><i class="fa fa-calendar"></i><?php $tanggal = date_create($value['tanggal']);
echo $this->mylib->hariIndo(date_format($tanggal, "l")) . ', ' . date_format($tanggal, 'd-m-Y');?></a>
														</li>
														<!-- <li><a href="#"><i class="fa fa-comments-o"></i>15 Comment</a>
														</li> -->
													</ul>
												</div>
											</div>
											<?php endforeach;?>
										</div>
									</div>
									<div class="widget widget_gallery gallery-grid-4">
										<h6 class="widget-title">Our Gallery</h6>
										<ul  class="magnific-image">
											<?php foreach ($galery as $key => $value): ?>
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
								</aside>
							</div>
							<!-- Side bar END -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Content END-->
		<!-- Footer ==== -->
		<footer>
			<div class="footer-top">
					<div class="container">
						<div class="d-flex align-items-stretch">
							<div class="pt-logo mr-auto">
								<a href="index.html"><img src="<?=base_url()?>assets/img/stimik.png" width="200px" alt="" /></a>
							</div>
							<div class="pt-social-link">
								<ul class="list-inline m-a0">
									<li><a href="#" class="btn-link"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" class="btn-link"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#" class="btn-link"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
							<div class="pt-btn-join">
								<a href="<?=base_url('pendaftaran/form')?>" class="btn" target="_blank">Join Now</a>
							</div>
						</div>
					</div>
			</div>
		</footer>
		<!-- Footer END ==== -->
		<!-- scroll top button -->
		<button class="back-to-top fa fa-chevron-up"></button>
	</div>
	<!-- External JavaScripts -->
	<script src="<?=base_url()?>assets/assets/js/jquery.min.js"></script>
	<script src="<?=base_url()?>public/plugins/angular/angular.min.js"></script>
	<script src="<?=base_url()?>public/js/apps.js"></script>
	<script src="<?=base_url()?>public/js/services/helper.services.js"></script>
	<script src="<?=base_url()?>public/js/services/auth.services.js"></script>
	<script src="<?=base_url()?>public/js/services/services.js"></script>
	<script src="<?=base_url()?>public/js/controllers/admin.controllers.js"></script>
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
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/orgchart/3.1.1/js/jquery.orgchart.min.js" integrity="sha512-alnBKIRc2t6LkXj07dy2CLCByKoMYf2eQ5hLpDmjoqO44d3JF8LSM4PptrgvohTQT0LzKdRasI/wgLN0ONNgmA==" crossorigin="anonymous"></script> -->
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<!-- <script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/modules/sankey.js"></script>
	<script src="https://code.highcharts.com/modules/organization.js"></script>
	<script src="https://code.highcharts.com/modules/exporting.js"></script>
	<script src="https://code.highcharts.com/modules/accessibility.js"></script> -->
	<?php if($this->input->get('set')=='struktur'):?>
		<script src="<?=base_url()?>public/js/scripting.js"></script>
	<?php endif;?>
</body>

</html>
