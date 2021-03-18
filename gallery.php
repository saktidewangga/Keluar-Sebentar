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

    <style>
        .kotakgaleri{
            margin-top: 20px;
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
            width: 410px;
            height: 500px;
            float:left;
            margin:10px 5px 10px 5px;
        }
		.thumbnail img {
			width: 410px;
			height: 450px;
		}
    </style>
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
                                <li class="active"><a href="gallery.php">Gallery</a></li>
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
			   	<li style="background-image: url(images/gili.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<!-- <h2>by colorlib.com</h2> -->
				   					<h1>Gallery</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
        </aside>
        
    
						<!-- ISI GALERI -->
                        <div class="destination" id="destination">
                            <div class="kotakgaleri">
                                <div class="listfoto" v-for="galeri in galeri">
                                    <div class="thumbnail">
										<img v-bind:src="galeri.image">
										<br>
										<center><h4>{{galeri.nama}}</h4></center>
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

	<!-- Main -->
	<script src="js/main.js"></script>

	<script>

		var vm = new Vue({
			el: '#destination',
			data: {
				galeri:[
					{nama: 'Hotel Luxas', image:'images/hotel-1.jpg'},
					{nama: 'Hotel Nonacancy', image:'images/hotel-2.jpg'},
					{nama: 'Hotel Bigstart', image:'images/hotel-3.jpg'},
					{nama: 'Hotel Lavarel', image:'images/hotel-4.jpg'},
					{nama: 'Hotel Seegood', image:'images/hotel-5.jpg'},
					{nama: 'Hotel De Luna', image:'images/hotel-6.jpg'},
					{nama: 'Hotel Plimoris', image:'images/hotel-7.jpg'},
					{nama: 'Hotel Berlian', image:'images/hotel-8.jpg'},
					{nama: 'Hotel Geraham', image:'images/hotel-9.jpg'},
					{nama: 'Room Hotel Ayla', image:'images/room-1.jpg'},
					{nama: 'Room Hotel Starviu', image:'images/room-2.jpg'},
					{nama: 'Room Hotel Mimilo', image:'images/room-3.jpg'},
					{nama: 'Room Hotel Asberlin', image:'images/room-4.jpg'},
					{nama: 'Room Hotel Niedora', image:'images/room-5.jpg'},
					{nama: 'Room Hotel Ciopula', image:'images/room-6.jpg'},
				]
					// 	galeri[],
			// },
			// methods: {
            //     upDate: function() {
            //         axios.get('https://my-json-server.typicode.com/milleniasilvianthie/restapiserver2/db').then(response => this.galeri=response.data['foto']);
            //     }
            // },
			// mounted(){
            //     axios.get('https://my-json-server.typicode.com/milleniasilvianthie/restapiserver2/db').then(response => this.galeri=response.data['foto']);
                
            //     this.upDate();
            //     this.timer = setInterval(this.upDate, 1000)
            //  }
			}
		})

	</script>

	</body>
</html>

