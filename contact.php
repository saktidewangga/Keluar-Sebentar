<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tour Template</title>
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
								<li><a href="index.php">Home</a></li>
								<li class="has-dropdown">
									<a href="tours.php">Tours</a>
									<ul class="dropdown">
										<li><a href="bali.php">Bali</a></li>
										<li><a href="malang.php">Malang</a></li>
										<li><a href="jogja.php">Yogyakarta</a></li>
										<li><a href="nttntb.php">NTT & NTB</a></li>
									</ul>
								</li>
								<li><a href="about.php">Galley</a></li>
								<li><a href="about.php">About</a></li>
								<li class="active"><a href="contact.php">Contact</a></li>
								<li><a href="login.php">Admin Management</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/Borobudur-2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<!-- <h2>by colorlib.com</h2> -->
				   					<h1>Contact us</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 animate-box">
						<h3>Contact</h3>
						<form action="konfirmasi_contact.php" method="POST" enctype="multipart/form-data">
							<div class="row form-group">
								<div class="col-md-6 padding-bottom">
									<label for="firstname">First Name</label>
									<input type="text" name="firstname" id="firstname" required="required" class="form-control" placeholder="Your firstname">
								</div>
								<div class="col-md-6">
									<label for="lastname">Last Name</label>
									<input type="text" name="lastname" id="lastname" required="required" class="form-control" placeholder="Your lastname">
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
									<label for="subject">Subject</label>
									<input type="text" name="subject" id="subject" required="required" class="form-control" placeholder="Your subject of this message">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="message">Message</label>
									<textarea name="message" id="message" cols="30" rows="10" required="required" class="form-control" placeholder="Say something about us"></textarea>
								</div>
							</div>
							<div class="form-group text-center">
								<input type="submit" value="Send Message" name="kirim" id="kirim" class="btn btn-primary">
							</div>

						</form>
						<br><br>
						
				<!--TANGGAPAN-->
  				<section class="py-5" id="clients">
				  <?php include("config.php"); ?>
					<form action="contact.php?=konfirmasi_contact" method="POST" enctype="multipart/form-data">
							<div class="col-md-12">
								  <div class="title">
									  <center><h2>Response From Visitors</h2></center>
								  </div>
								  
								  <div class="container" style="color: black">
								  <table border="1" class="table">
								  <tr>
									  <th class="text-center"><b>NO</b></th>
									  <th class="text-center"><b>NAME</b></th>
									  <th class="text-center"><b>EMAIL</b></th>
									  <th class="text-center"><b>SUBJECT</b></th>
									  <th class="text-center"><b>MESSAGE</b></th>
								  </tr>
								  <?php 
								  $sql_c = "select `id`, `firstname` , `email`, `subject`, `message` from `tbl_contact` order by `id`";
								  $query = mysqli_query($db,$sql_c);
								  $no=1;
								  while($data_c = mysqli_fetch_array($query)){
									  $no = $data_c[0];
									  $firstname = $data_c[1];;
									  $email = $data_c[2];
									  $subject = $data_c[3];
									  $message = $data_c[4];							
								  ?>
								  <tr>
									  <td><center><?php echo $no;?></center></td>
									  <td><center><?php echo $firstname;?></center></td>
									  <td><center><?php echo $email;?></center></td>
									  <td><center><?php echo $subject;?></center></td>
									  <td><center><?php echo $message;?></center></td>
								  </tr>
								  <?php $no++; } ?>
								  </table>
								  </div>
							  </div>
					</form>
  				</section>
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

