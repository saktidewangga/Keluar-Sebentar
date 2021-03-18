<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Keluar Sebentar</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

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

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<script src="vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">

    <nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="index.php">Keluar Sebentar</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li><a href="admin.php">List Of Booking</a></li>
								<li><a href="response.php">Response Contact</a></li>
								<li><a href="logout.php">Logout</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/room-4.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Booking Now!!</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div id="colorlib-about">
			<div class="container">
				<div class="row">
					<div class="about-flex">
						<div class="col-one-forth aside-stretch animate-box">
							<div class="row">
								<div class="col-md-12 about">
									<h2></h2>
								</div>
							</div>
						</div>
						<div class="col-three-forth animate-box">
							<h2>Form To Booking Trip</h2>
							<div class="row">
								<div class="col-md-12">
									<form action="konfirmasi_booking.php" method="POST" enctype="multipart/form-data" >

										<div class="row form-group">
											<div class="col-md-12">
												<label for="name">Name</label>
												<input type="text"name="nama" id="nama" required="required" class="form-control" placeholder="Your name">
											</div>
										</div>
			
										<div class="row form-group">
											<div class="col-md-12">
												<label for="number">Number ID(KTP/SIM/Passport)</label>
												<input type="text"name="identitas" id="identitas" required="required" class="form-control" placeholder="Your ID number">
											</div>
										</div>
			
										<div class="row form-group">
											<div class="col-md-12">
												<label for="address">Address</label>
												<input type="text"name="alamat" id="alamat" required="required" class="form-control" placeholder="Your address">
											</div>
										</div>
			
										<div class="row form-group">
											<div class="col-md-12">
												<label for="telp">Telp/HP</label>
												<input type="text" name="telp" id="telp" required="required" class="form-control" placeholder="Your number phone">
											</div>
										</div>
			
										<div class="row form-group">
											<div class="col-md-12">
												<label for="email">Email</label>
												<input type="text"name="email" id="email" required="required" class="form-control" placeholder="Your email address">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-md-12">
												<label for="email">Date(DD/MM/YYYY)</label>
												<input type="text"name="tanggal" id="tanggal" required="required" class="form-control" placeholder="Your email address">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-md-12">
												<label for="trip">Trip</label> <br>
												<select name="trip" id="trip">
													<option value="Malang (1 Person Rp. 1.900.000)">Malang (1 Person Rp. 1.900.000)</option>
													<option value="Malang (2 Person Rp. 2.000.000)">Malang (2 Person Rp. 2.000.000)</option>
													<option value="Malang (3 Person Rp. 2.000.000)">Malang (3 Person Rp. 2.000.000)</option>
													<option value="Malang (4 Person Rp. 2.100.000)">Malang (4 Person Rp. 2.100.000)</option>
													<option value="Malang (5 Person Rp. 2.100.000)">Malang (5 Person Rp. 2.100.000)</option>
													<option value="Malang (6 Person Rp. 2.100.000)">Malang (6 Person Rp. 2.100.000)</option>
													<option value="Malang (7 Person Rp. 3.500.000)">Malang (7 Person Rp. 3.500.000)</option>
													<option value="Malang (8 Person Rp. 3.600.000)">Malang (8 Person Rp. 3.600.000)</option>
													<option value="Malang (9 Person Rp. 3.800.000)">Malang (9 Person Rp. 3.800.000)</option>
													<option value="Malang (10 Person Rp. 3.900.000)">Malang (10 Person Rp. 3.900.000)</option>
													<option value="Malang (11 Person Rp. 4.000.000)">Malang (11 Person Rp. 4.000.000)</option>
													<option value="Malang (12 Person Rp. 4.000.000)">Malang (12 Person Rp. 4.000.000))</option>
												</select>
											</div>
										</div>
			
									
										<div class="form-group text-center">
											<input type="submit" value="BOOKING" name="kirim" id="kirim" class="btn btn-primary">
										</div>
			
									</form>		
								
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-6 colorlib-widget text-center">
						<h4>Keluar Sebentar</h4>
						<p>Social Media</p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-instagram"></i></a></li>
								<li><a href="#"><i class="icon-whatsapp"></i></a></li>
							</ul>
						</p>
					</div>

					<div class="col-md-6 text-center">
						<h4>Contact Information</h4>
						<ul class="colorlib-footer-links">
							<li>Jl. Veteran, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145</li>
							<li><a href="tel://1234567920">+ 1235 2355 98</a></li>
							<li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
							<li><a href="#">yoursite.com</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<p>
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
						</p>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>

	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

