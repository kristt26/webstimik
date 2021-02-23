<!DOCTYPE html>
<html lang="en"  ng-app="apps" ng-controller="indexController">

<!-- Mirrored from educhamp.themetrades.com/demo/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:08:15 GMT -->
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
	<link rel="icon" href="../error-404.html" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="<?=base_url()?>assets/admin/assets/images/favicon.png" />

	<!-- PAGE TITLE HERE ============================================= -->
	<title>EduChamp : Education HTML Template </title>

	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
	<script src="<?=base_url()?>assets/admin/assets/js/html5shiv.min.js"></script>
	<script src="<?=base_url()?>assets/admin/assets/js/respond.min.js"></script>
	<![endif]-->

	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" href="<?=base_url()?>public/plugins/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/assets/css/assets.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/assets/vendors/calendar/fullcalendar.css">

	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/assets/css/typography.css">

	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/assets/css/shortcodes/shortcodes.css">

	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/assets/css/dashboard.css">
	<link class="skin" rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/assets/css/color/color-1.css">
	<link rel="stylesheet" href="<?=base_url()?>public/plugins/daterangepicker/daterangepicker.css">
  	<link rel="stylesheet" href="<?=base_url()?>public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>public/plugins/select2/css/select2.min.css">
  	<link rel="stylesheet" href="<?=base_url()?>public/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
	<link rel="stylesheet" href="<?=base_url()?>public/plugins/sweetalert2/sweetalert2.min.css">
	<link rel="stylesheet" href="<?=base_url()?>public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  	<link rel="stylesheet" href="<?=base_url()?>public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" href="<?=base_url()?>public/plugins/angular-datatables/dist/css/angular-datatables.min.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  	<link rel="stylesheet" href="<?=base_url()?>public/plugins/chart.js/Chart.css">

</head>
<body class="ttr-opened-sidebar ttr-pinned-sidebar">
	<?php
if (!$this->session->userdata('islogin')) {
    redirect('/login');
}
?>
	<!-- header start -->
	<header class="ttr-header">
		<div class="ttr-header-wrapper">
			<!--sidebar menu toggler start -->
			<div class="ttr-toggle-sidebar ttr-material-button">
				<i class="ti-close ttr-open-icon"></i>
				<i class="ti-menu ttr-close-icon"></i>
			</div>
			<!--sidebar menu toggler end -->
			<!--logo start -->
			<div class="ttr-logo-box">
				<div>
					<a href="<?=base_url()?>" class="ttr-logo">
						<img class="ttr-logo-mobile" alt="" src="<?=base_url()?>assets/admin/assets/images/logo-mobile.png" width="30" height="30">
						<img class="ttr-logo-desktop" alt="" src="<?=base_url()?>assets/img/stimik.png" width="160" height="27">
					</a>
				</div>
			</div>
			<!--logo end -->
			<div class="ttr-header-menu">
				<!-- header left menu start -->
				<ul class="ttr-header-navigation">
					<li>
						<a href="../index.html" class="ttr-material-button ttr-submenu-toggle">HOME</a>
					</li>
					<li>
						<a href="#" class="ttr-material-button ttr-submenu-toggle">QUICK MENU <i class="fa fa-angle-down"></i></a>
						<div class="ttr-header-submenu">
							<ul>
								<li><a href="../courses.html">Our Courses</a></li>
								<li><a href="../event.html">New Event</a></li>
								<li><a href="../membership.html">Membership</a></li>
							</ul>
						</div>
					</li>
				</ul>
				<!-- header left menu end -->
			</div>
			<div class="ttr-header-right ttr-with-seperator">
				<!-- header right menu start -->
				<ul class="ttr-header-navigation">
					<li>
						<a href="#" class="ttr-material-button ttr-search-toggle"><i class="fa fa-search"></i></a>
					</li>
					<li>
						<a href="#" class="ttr-material-button ttr-submenu-toggle"><i class="fa fa-bell"></i></a>
						<div class="ttr-header-submenu noti-menu">
							<div class="ttr-notify-header">
								<span class="ttr-notify-text-top">9 New</span>
								<span class="ttr-notify-text">User Notifications</span>
							</div>
							<div class="noti-box-list">
								<ul>
									<li>
										<span class="notification-icon dashbg-gray">
											<i class="fa fa-check"></i>
										</span>
										<span class="notification-text">
											<span>Sneha Jogi</span> sent you a message.
										</span>
										<span class="notification-time">
											<a href="#" class="fa fa-close"></a>
											<span> 02:14</span>
										</span>
									</li>
									<li>
										<span class="notification-icon dashbg-yellow">
											<i class="fa fa-shopping-cart"></i>
										</span>
										<span class="notification-text">
											<a href="#">Your order is placed</a> sent you a message.
										</span>
										<span class="notification-time">
											<a href="#" class="fa fa-close"></a>
											<span> 7 Min</span>
										</span>
									</li>
									<li>
										<span class="notification-icon dashbg-red">
											<i class="fa fa-bullhorn"></i>
										</span>
										<span class="notification-text">
											<span>Your item is shipped</span> sent you a message.
										</span>
										<span class="notification-time">
											<a href="#" class="fa fa-close"></a>
											<span> 2 May</span>
										</span>
									</li>
									<li>
										<span class="notification-icon dashbg-green">
											<i class="fa fa-comments-o"></i>
										</span>
										<span class="notification-text">
											<a href="#">Sneha Jogi</a> sent you a message.
										</span>
										<span class="notification-time">
											<a href="#" class="fa fa-close"></a>
											<span> 14 July</span>
										</span>
									</li>
									<li>
										<span class="notification-icon dashbg-primary">
											<i class="fa fa-file-word-o"></i>
										</span>
										<span class="notification-text">
											<span>Sneha Jogi</span> sent you a message.
										</span>
										<span class="notification-time">
											<a href="#" class="fa fa-close"></a>
											<span> 15 Min</span>
										</span>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li>
						<a href="#" class="ttr-material-button ttr-submenu-toggle"><span class="ttr-user-avatar"><img alt="" src="<?=base_url()?>assets/admin/assets/images/testimonials/pic3.jpg" width="32" height="32"></span></a>
						<div class="ttr-header-submenu">
							<ul>
								<li><a href="user-profile.html">My profile</a></li>
								<li><a href="list-view-calendar.html">Activity</a></li>
								<li><a href="mailbox.html">Messages</a></li>
								<li><a href="../login.html">Logout</a></li>
							</ul>
						</div>
					</li>
					<li class="ttr-hide-on-mobile">
						<a href="#" class="ttr-material-button"><i class="ti-layout-grid3-alt"></i></a>
						<div class="ttr-header-submenu ttr-extra-menu">
							<a href="#">
								<i class="fa fa-music"></i>
								<span>Musics</span>
							</a>
							<a href="#">
								<i class="fa fa-youtube-play"></i>
								<span>Videos</span>
							</a>
							<a href="#">
								<i class="fa fa-envelope"></i>
								<span>Emails</span>
							</a>
							<a href="#">
								<i class="fa fa-book"></i>
								<span>Reports</span>
							</a>
							<a href="#">
								<i class="fa fa-smile-o"></i>
								<span>Persons</span>
							</a>
							<a href="#">
								<i class="fa fa-picture-o"></i>
								<span>Pictures</span>
							</a>
						</div>
					</li>
				</ul>
				<!-- header right menu end -->
			</div>
			<!--header search panel start -->
			<div class="ttr-search-bar">
				<form class="ttr-search-form">
					<div class="ttr-search-input-wrapper">
						<input type="text" name="qq" placeholder="search something..." class="ttr-search-input">
						<button type="submit" name="search" class="ttr-search-submit"><i class="ti-arrow-right"></i></button>
					</div>
					<span class="ttr-search-close ttr-search-toggle">
						<i class="ti-close"></i>
					</span>
				</form>
			</div>
			<!--header search panel end -->
		</div>
	</header>
	<!-- header end -->
	<!-- Left sidebar menu start -->
	<div class="ttr-sidebar">
		<div class="ttr-sidebar-wrapper content-scroll">
			<!-- side menu logo start -->
			<div class="ttr-sidebar-logo" style="background: maroon">
				<a href="<?=base_url()?>"><img alt="" src="<?=base_url()?>assets/img/stimik.png" width="122" height="27"></a>
				<!-- <div class="ttr-sidebar-pin-button" title="Pin/Unpin Menu">
					<i class="material-icons ttr-fixed-icon">gps_fixed</i>
					<i class="material-icons ttr-not-fixed-icon">gps_not_fixed</i>
				</div> -->
				<div class="ttr-sidebar-toggle-button">
					<i class="ti-arrow-left"></i>
				</div>
			</div>
			<!-- side menu logo end -->
			<!-- sidebar menu start -->
			<?php
$this->load->view('template/sidebar');

?>
			<!-- sidebar menu end -->
		</div>
	</div>
	<!-- Left sidebar menu end -->

	<!--Main container start -->
	<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title"><?=$title?></h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i><?=$breadcrumb?></a></li>
					<?php if (isset($subtitle)): ?>
					<li><?=$subtitle?></li>
					<?php endif;?>
				</ul>
			</div>
			<!-- Card -->
			<!-- <div class="row"> -->
				<?=$content?>
			<!-- </div> -->
			<!-- Card END -->
		</div>
	</main>
	<div class="ttr-overlay"></div>

<!-- External JavaScripts -->
<script src="<?=base_url()?>assets/admin/assets/js/jquery.min.js"></script>
<!-- <script src="<?=base_url()?>public/plugins/jquery/jquery.min.js"></script> -->
<!-- angular -->
<script src="<?=base_url()?>public/plugins/angular/angular.min.js"></script>
<script src="<?=base_url()?>public/js/apps.js"></script>
<script src="<?=base_url()?>public/js/services/helper.services.js"></script>
<script src="<?=base_url()?>public/js/services/auth.services.js"></script>
<script src="<?=base_url()?>public/js/services/services.js"></script>
<script src="<?=base_url()?>public/js/controllers/admin.controllers.js"></script>
<!-- end angular -->
<!-- Select2 -->
<script src="<?=base_url()?>public/plugins/select2/js/select2.full.min.js"></script>
<!-- End Select2 -->
<script src="<?=base_url()?>public/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="<?=base_url()?>public/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- bootstrap color picker -->
<script src="<?=base_url()?>assets/admin/assets/vendors/bootstrap/js/popper.min.js"></script>
<script src="<?=base_url()?>assets/admin/assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/admin/assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="<?=base_url()?>assets/admin/assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
<script src="<?=base_url()?>assets/admin/assets/vendors/magnific-popup/magnific-popup.js"></script>
<script src="<?=base_url()?>assets/admin/assets/vendors/counter/waypoints-min.js"></script>
<script src="<?=base_url()?>assets/admin/assets/vendors/counter/counterup.min.js"></script>
<script src="<?=base_url()?>assets/admin/assets/vendors/imagesloaded/imagesloaded.js"></script>
<script src="<?=base_url()?>assets/admin/assets/vendors/masonry/masonry.js"></script>
<script src="<?=base_url()?>assets/admin/assets/vendors/masonry/filter.js"></script>
<script src="<?=base_url()?>assets/admin/assets/vendors/owl-carousel/owl.carousel.js"></script>
<script src='<?=base_url()?>assets/admin/assets/vendors/scroll/scrollbar.min.js'></script>
<script src="<?=base_url()?>assets/admin/assets/js/functions.js"></script>
<script src="<?=base_url()?>assets/admin/assets/vendors/chart/chart.min.js"></script>
<script src="<?=base_url()?>assets/admin/assets/js/admin.js"></script>
<script src='<?=base_url()?>assets/admin/assets/vendors/calendar/moment.min.js'></script>
<script src='<?=base_url()?>assets/admin/assets/vendors/calendar/fullcalendar.js'></script>
<script src='<?=base_url()?>assets/admin/assets/vendors/switcher/switcher.js'></script>

<script src="<?=base_url()?>public/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<script src="<?=base_url()?>public/plugins/sweetalert2/sweetalert2.all.min.js"></script>
<script src="<?=base_url()?>public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>public/plugins/angular-datatables/dist/angular-datatables.min.js"></script>
<script src="<?=base_url()?>public/plugins/loading/dist/loadingoverlay.min.js"></script>
<script src="<?=base_url()?>public/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?=base_url()?>public/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?=base_url()?>public/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?=base_url()?>public/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?=base_url()?>public/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="<?=base_url()?>public/lib/angular-locale_id-id.js"></script>
<script src="<?=base_url()?>public/lib/input-mask/angular-input-masks-standalone.min.js"></script>
<script src="<?=base_url()?>public/lib/angular-base64-upload.js"></script>
<script src="<?=base_url()?>public/js/jquery.PrintArea.js"></script>
<script src="<?=base_url()?>public/plugins/chart.js/Chart.js"></script>
<script>
	$(function () {
      //Initialize Select2 Elements
      $('[data-toggle="tooltip"]').tooltip()
      $('.select2').select2();



      //Initialize Select2 Elements
      $('.select2bs4').select2({
        theme: 'bootstrap4'
      })

      //Datemask dd/mm/yyyy
      $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
      //Datemask2 mm/dd/yyyy
      $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
      //Money Euro
      $('[data-mask]').inputmask()

      $("input[data-bootstrap-switch]").each(function () {
        $(this).bootstrapSwitch('state', $(this).prop('checked'));
      });

    })


  $(document).ready(function() {

    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay,listWeek'
      },
      defaultDate: '2019-03-12',
      navLinks: true, // can click day/week names to navigate views

      weekNumbers: true,
      weekNumbersWithinDays: true,
      weekNumberCalculation: 'ISO',

      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
        {
          title: 'All Day Event',
          start: '2019-03-01'
        },
        {
          title: 'Long Event',
          start: '2019-03-07',
          end: '2019-03-10'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2019-03-09T16:00:00'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2019-03-16T16:00:00'
        },
        {
          title: 'Conference',
          start: '2019-03-11',
          end: '2019-03-13'
        },
        {
          title: 'Meeting',
          start: '2019-03-12T10:30:00',
          end: '2019-03-12T12:30:00'
        },
        {
          title: 'Lunch',
          start: '2019-03-12T12:00:00'
        },
        {
          title: 'Meeting',
          start: '2019-03-12T14:30:00'
        },
        {
          title: 'Happy Hour',
          start: '2019-03-12T17:30:00'
        },
        {
          title: 'Dinner',
          start: '2019-03-12T20:00:00'
        },
        {
          title: 'Birthday Party',
          start: '2019-03-13T07:00:00'
        },
        {
          title: 'Click for Google',
          url: 'http://google.com/',
          start: '2019-03-28'
        }
      ]
    });

  });

</script>
</body>

<!-- Mirrored from educhamp.themetrades.com/demo/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:09:05 GMT -->
</html>