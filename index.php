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

	<!-- SCRIPT VUE -->
	<script src="vue.js"></script>
    <script type="text/javascript" src="https://unpkg.com/axios/dist/axios.min.js"></script>

	</head>

	<style>
		.display1{
			width: 100%;
			height: 100%;
			display: none;
			position: fixed;
			background-color: rgba(0,0,0, 0.5);
		}
		.popup{
			width: 80%;
			height: 50px;
			overflow: auto;
			margin: auto;
			background-color: white;
		}
		.displaypopup{
			width: 100%;
			height: 100%;
			display: block;
			position: fixed;
			overflow: none;
			padding: 100px;
			left: 0;
			top: 0;
			background-color: rgba(0,0,0, 0.5);
		}
		.kotakgaleri{
            width: 100%;
            height: 100%;
            float:left;
            position: relative;
        }
        .thumbnail {
            width: 100%;
            height: 100%;
			margin:10px 5px 10px 5px;
        }
        .listfoto{
            width: 415px;
            height: 300px;
            float:left;
            margin:5px 5px 5px 5px;
        }
		.thumbnail img {
			width: 415px;
			height: 300px;
		}
		</style>

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
								<li class="active"><a href="index.php">Home</a></li>
								<li class="has-dropdown">
									<a href="tours.php">Tours</a>
									<ul class="dropdown">
										<li><a href="bali.php">Bali</a></li>
										<li><a href="malang.php">Malang</a></li>
										<li><a href="jogja.php">Yogyakarta</a></li>
										<li><a href="nttntb.php">NTT & NTB</a></li>
									</ul>
								</li>
								<li><a href="gallery.php">Gallery</a></li>
								<li><a href="about.php">About</a></li>
								<li><a href="contact.php">Contact</a></li>
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
			   	<li style="background-image: url(images/tour.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<!-- <h2>2 Days Tour</h2> -->
				   					<h1>AYO DOLAN!</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/Candi-Borobudur.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<!-- <h2>10 Days Cruises</h2> -->
				   					<h1>MENJELAJAH NUSANTARA</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/Bali.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluids">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>Explore our most tavel agency</h2>
				   					<h1>Our Travel Agency</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/img_bg_4.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>Experience the</h2>
				   					<h1>Best Trip Ever</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>	   	
			  	</ul>
		  	</div>
		</aside>

		<div id="colorlib-services">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center colorlib-heading animate-box">
						<h2>Our Services</h2>
						<p>So let just tell you, when you come to deep dream, when you use our service.</p>
					</div>

					<div class="col-md-4 animate-box text-center">
						<div class="services">
							<div class="display1" id="display1">
								<div class="popup">
									<p>Memberikan kesan perjalanan terbaik di liburan anda  <button id="btn" style="float: right;" onclick="operasitutup()">X</button></p>
								</div>
							</div>
							<span class="icon">
								<i class="flaticon-around" onclick="operasiklik()"></i>
							</span>
							<h3>Tour Everyday</h3>
						</div>
					</div>
					<div class="col-md-4 animate-box text-center">
						<div class="services">
							<div class="display1" id="display1">
								<div class="popup">
									<p>Memberikan kesan perjalanan terbaik di liburan anda  id="btn" style="float: right;" onclick="operasitutup()">X</button></p>
								</div>
							</div>
							<span class="icon">
								<i class="flaticon-sign" onclick="operasiklik()"></i>
							</span>
							<h3>Most Complete</h3>
						</div>
					</div>
					<div class="col-md-4 animate-box text-center">
						<div class="services">
							<div class="display1" id="display1">
								<div class="popup">
									<p>Memberikan kesan perjalanan terbaik di liburan anda <button id="btn" style="float: right;" onclick="operasitutup()">X</button> </p>
								</div>
							</div>
							<span class="icon">
								<i class="flaticon-postcard" onclick="operasiklik()"></i>
							</span>
							<h3>Affordable Prices</h3>
						</div>
					</div>
					<div class="col-md-4 animate-box text-center">
						<div class="services">
							<div class="display1" id="display1">
								<div class="popup">
									<p>Memberikan kesan perjalanan terbaik di liburan anda <button id="btn" style="float: right;" onclick="operasitutup()">X</button> </p>
								</div>
							</div>
							<span class="icon">
								<i class="flaticon-island" onclick="operasiklik()"></i>
							</span>
							<h3>Amazing Travel</h3>
						</div>
					</div>
					<div class="col-md-4 animate-box text-center">
						<div class="services">
							<div class="display1" id="display1">
								<div class="popup">
									<p>Memberikan kesan perjalanan terbaik di liburan anda  <button id="btn" style="float: right;" onclick="operasitutup()">X</button> </p>
								</div>
							</div>
							<span class="icon">
								<i class="flaticon-plane" onclick="operasiklik()"></i>
							</span>
							<h3>Fast Response</h3>
						</div>
					</div>
					<div class="col-md-4 animate-box text-center">
						<div class="services">
							<div class="display1" id="display1">
								<div class="popup">
									<p>Memberikan kesan perjalanan terbaik di liburan anda  <button id="btn" style="float: right;" onclick="operasitutup()">X</button> </p>
								</div>
							</div>
							<span class="icon">
								<i class="flaticon-resort" onclick="operasiklik()"></i>
							</span>
							<h3>Trusted</h3>
						</div>
					</div>
					
				</div>
			</div>
		</div>

		<div id="colorlib-hotel">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>Popular Destination</h2>
						<p>Pilih Destinasi dan Booking Sekarang juga!</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 animate-box">
						<div class="owl-carousel">
							<div class="item">
								<div class="popular-entry">
									<a href="malang.php" class="hotel-img" style="background-image: url(images/Bromo.jpg);">
										<p class="price"><span>Start From</span><small> Rp. 350.000,-</small></p>
									</a>
									<div class="desc">
										<h3><a href="#">Gunung Bromo</a></h3>
										<span class="place">Malang, East Java</span>
										<p>Gunung Bromo adalah gunung paling terkenal di Jawa Timur yang memiliki ketinggian 2.392 Mdpl.</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="popular-entry">
									<a href="tours.php" class="hotel-img" style="background-image: url(images/Bali.jpg);">
										<p class="price"><span>Start From</span><small> Rp. 850.000,-</small></p>
									</a>
									<div class="desc">
										<h3><a href="#">Nusa Penida</a></h3>
										<span class="place">Klungkung, Bali</span>
										<p>Nusa Penida adalah sebuah pulau yang terletak di sebelah tenggara Bali yang dipisahkan oleh Selat Badung.</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="popular-entry">
									<a href="tours.php" class="hotel-img" style="background-image: url(images/Prambanan.jpg);">
										<p class="price"><span>Start From</span><small> Rp. 300.000,-</small></p>
									</a>
									<div class="desc">
										<h3><a href="#">Candi Prambanan</a></h3>
										<span class="place">Klaten, Central Java</span>
										<p>Candi Prambanan merupakan candi Hindu terbesar di Indonesia bahkan se Asia Tenggara. Candi ini dikenal juga dengan nama Candi Roro Jongrang yang didirikan sekitar tahun 850 Masehi oleh Wangsa Sanjaya.</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="popular-entry">
									<a href="tours.php" class="hotel-img" style="background-image: url(images/Ijen.jpg);">
										<p class="price"><span>Start From</span><small> Rp. 500.000,-</small></p>
									</a>
									<div class="desc">
										<h3><a href="#">Gunung Ijen</a></h3>
										<span class="place">East Java, Indonesia </span>
										<p>Ijen adalah sebuah daerah kompleks vulkanik, yang terdiri dari kawah dan dataran tinggi Ijen, yang memiliki ketinggian 2.600 M dan 8.660 M.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-tour colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>Gallery</h2>
						<p>Dokumentasi Travel</p>
					</div>
				</div>
			</div>
		</div>
		<!-- GALERI VUE.JS -->
						<div class="destination" id="destination">
                            <div class="kotakgaleri">
                                <div class="listfoto" v-for="galeri in galeri">
                                    <div class="thumbnail">
										<img v-bind:src="galeri.image">
                                    </div>
                                </div>
                            </div>
                        </div>

				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>Keluar Sebentar Trip</h2>
						<p>Happy Holiday</p>
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
	
	<script>
		function operasiklik(){
            document.getElementById("display1").className="displaypopup";
			
        }

        function operasitutup(){
            document.getElementById("display1").className="display1";
        }
	</script>

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
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>

	<script>

		var vm = new Vue({
			el: '#destination',
			data: {
				galeri:[
					{image:'images/Candi-Borobudur.jpg'},
					{image:'images/Prambanan.jpg'},
					{image:'images/Bromo.jpg'},
					{image:'images/Bali.jpg'},
					{image:'images/cover-img-1.jpg'},
					{image:'images/cover-img-2.jpg'},
					{image:'images/cover-img-3.jpg'},
					{image:'images/cover-img-4.jpg'},
					{image:'images/img_bg_4.jpg'},
					{image:'images/img_bg_5.jpg'},
					{image:'images/tour-1.jpg'},
					{image:'images/tour-2.jpg'},
					{image:'images/tour-3.jpg'},
					{image:'images/tour-4.jpg'},
					{image:'images/tour-5.jpg'},
					{image:'images/tour-6.jpg'},
					{image:'images/tour-7.jpg'},
					{image:'images/tour-8.jpg'},
				]
			}
		})

		</script>

</html>

