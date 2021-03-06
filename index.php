<?php

	session_start();

//	include_once("function/koneksi.php");
//	include_once("function/helper.php");

	$page = isset($_GET['page']) ? $_GET['page'] : false;
	$kategori_id = isset($_GET['kategori_id']) ? $_GET['kategori_id'] : false;
	function getStatus($page,$key){
		if($page == $key){
			return true;
		}
		return false;
	}

?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Insight Candramawa</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

	<!--Chart-->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet">
	<script type="text/javascript" src="Keperluan Chart/Chart.js"></script>

	<!--Datatable-->

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400" rel="stylesheet">
	
	<link rel="shortcut icon" href="images/logo.png">
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div id="colorlib-logo"  >
								<div class="row ">
									<img width="100" height="100"  src="images/logo3.png" alt="">
									<a href="index.html">Insight Candramawa</a>
								</div>
							</div>
						</div>
						<div class="col-md-8 text-right menu-1">
							<ul>
								<li><a href="index.php">Dashboard</a></li> 
								<li><a href="index.php?page=data">Data</a></li>
								<li><a href="index.php?page=feature">Feature</a></li>
								<li><a href="index.php?page=recommendation">Recommendation</a></li>
								<li><a href="index.php?page=about">About</a></li>
								<li><a href="index.php?page=contact">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<div id="content">
				
			<?php
				$filename = "$page.php";
				
				if(file_exists($filename)){
					include_once($filename);
				}else{
					include_once("main.php");
				}
			?>
		
		</div>


		<footer id="colorlib-footer">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 colorlib-widget">
						<h4>About Us</h4>
						<p>A web that implementing text annotation.</p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-3 colorlib-widget">
						<h4>Information</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="index.php"><i class="icon-check"></i> Dashboard</a></li> 
								<li><a href="index.php?page=data"><i class="icon-check"></i> Data</a></li>
								<li><a href="index.php?page=feature"><i class="icon-check"></i> Feature</a></li>
								<li><a href="index.php?page=recommendation"><i class="icon-check"></i> Recommendation</a></li>
								<li><a href="index.php?page=about"><i class="icon-check"></i> About</a></li>
								<li><a href="index.php?page=contact"><i class="icon-check"></i> Contact</a></li>
							</ul>
						</p>
					</div>


					<div class="col-md-3 colorlib-widget">
						<h4>Contact Info</h4>
						<ul class="colorlib-footer-links">
							<li>Politeknik Negeri Bandung</li>
							<li>Jl. Gegerkalong Hilir, Ciwaruga,</li>
							<li>Kec. Parongpong, Kabupaten Bandung Barat, Jawa Barat 40559</li>
							<li><a href="tel://1234547890"><i class="icon-phone"></i> + 1234 5478 90</a></li>
							<li><a href="mailto:candramawa@gmail.com"><i class="icon-envelope"></i> candramawa@gmail.com</a></li>
							<!--<li><a href="#"><i class="icon-location4"></i> yourwebsite.com</a></li>-->
						</ul>
					</div>
				</div>
			</div>
			<div class="copy">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<p>
								 <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --><br> 
								Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a>, <a href="http://pexels.com/" target="_blank">Pexels</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- YTPlayer -->
	<script src="js/jquery.mb.YTPlayer.min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

