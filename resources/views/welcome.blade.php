<!doctype html>
<html lang="en">
  <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <title>SP4Life Main Page</title>

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{url('plugins/bootstrap/css/bootstrap.min.css')}}">
  <!-- Icofont Css -->
  <link rel="stylesheet" href="{{url('plugins/icofont/icofont.min.css')}}">
  <!-- Themify Css -->
  <link rel="stylesheet" href="{{url('plugins/themify/css/themify-icons.css')}}">
  <!-- animate.css -->
  <link rel="stylesheet" href="{{url('plugins/animate-css/animate.css')}}">
  <!-- Magnify Popup -->
  <link rel="stylesheet" href="{{url('plugins/magnific-popup/dist/magnific-popup.css')}}">
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="{{url('plugins/slick-carousel/slick/slick.css')}}">
  <link rel="stylesheet" href="{{url('plugins/slick-carousel/slick/slick-theme.css')}}">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{url('css/style.css')}}">

</head>
<body>


<!-- Section Menu Start -->
<!-- Header Start -->
<nav class="navbar navbar-expand-lg navigation fixed-top" id="navbar">
	<div class="container-fluid">
		<a class="navbar-brand" href="#">
			<h2 class="text-white text-capitalize"></i>SP4<span class="text-color">Life</span></h2>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsid"
			aria-controls="navbarsid" aria-expanded="false" aria-label="Toggle navigation">
			<span class="ti-view-list"></span>
		</button>
		<div class="collapse text-center navbar-collapse" id="navbarsid">
			<ul class="navbar-nav mx-auto">
				<li class="nav-item active">
					<a class="nav-link" href="{{('/')}}">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item"><a class="nav-link" href="{{('aboutus')}}">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="{{('sport')}}">Sports</a></li>
                <li class="nav-item"><a class="nav-link" href="{{('court')}}">Courts</a></li>
				<li class="nav-item"><a class="nav-link" href="{{('booking')}}">Booking</a></li>
				<li class="nav-item"><a class="nav-link" href="{{('contactus')}}">Contact</a></li>
			</ul>
            @if (!Auth::check())
			<div class="my-md-0 ml-lg-4 mt-4 mt-lg-0 ml-auto text-lg-right mb-3 mb-lg-0">
				<a class="navbar-brand" href="{{route('register')}}">
					<h3><span class="text-white text-capitalize">REGISTER</span></h3>
				</a>
				<a class="navbar-brand" href="{{route('login')}}">
					<h3><span class="text-color">Login</span></h3>
				</a>
			</div>
            @endif
            @if (Auth::check())
            <div class="btn-group-left">
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false"><h3><span class="text-white text-capitalize">{{ Auth::user()->name }}</span></h3></a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{('dashboard')}}">Dashboard</a></li>
            <li><a class="dropdown-item" href="{{route('profile.edit')}}">Profile</a></li>
            <li><a class="dropdown-item" href="{{('logout')}}">Logout</a></li>
        </ul>
            </li>
            </div>
            @endif
		</div>
	</div>
</nav>


<!-- Header Close -->

<div class="main-wrapper ">
<!-- Section Menu End -->

<!-- Section Slider Start -->
<!-- Slider Start -->
<section class="slider">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<span class="h6 d-inline-block mb-4 subhead text-uppercase">UTM Sports Facilities</span>
				<h1 class="text-uppercase text-white mb-5">Booking your <span class="text-color">sports venue</span><br>with us</h1>

				<a href="{{('booking')}}" target="_blank" class="btn btn-main " >Booking Now<i class="ti-angle-right ml-3"></i></a>
			</div>
		</div>
	</div>
</section>
<!-- Section Slider End -->


<!-- Section Services Start -->
<section class="section services ">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 text-center">
				<div class="section-title">
					<div class="divider mb-3"></div>
					<h2>Sport Facilities</h2>
					<p>We offer booking service for UTM sports facilities.</p>
				</div>
			</div>
		</div>

		<div class="row no-gutters">
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="text-center  px-4 py-5 hover-style-1">
					<i class="icofont-football text-lg text-color"></i>
					<h4 class="mt-3 mb-4 text-uppercase">Football</h4>
					<p>Football, also known as soccer, is widely considered as the most popular sport in the world.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="text-center  px-4 py-5 hover-style-1">
					<i class="icofont-tennis text-lg text-color"></i>
					<h4 class="mt-3 mb-4 text-uppercase">Tennis</h4>
					<p>Tennis is a popular racket sport played by individuals or teams of two.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="text-center  px-4 py-5 hover-style-1">
					<i class="icofont-badminton-birdie text-lg text-color"></i>
					<h4 class="mt-3 mb-4 text-uppercase">Badminton</h4>
					<p>Badminton is a racket sport played by individuals or pairs.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="text-center  px-4 py-5 hover-style-1">
					<i class="icofont-volleyball-alt text-lg text-color"></i>
					<h4 class="mt-3 mb-4 text-uppercase">Volleyball</h4>
					<p>Volleyball is a team sport where players hit a ball back and forth over a high net.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="text-center  px-4 py-5 hover-style-1">
					<i class="icofont-football-american text-lg text-color"></i>
					<h4 class="mt-3 mb-4 text-uppercase">Rugby</h4>
					<p>Rugby is a team sport, where players carry, pass, kick, and ground an oval-shaped ball. </p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="text-center  px-4 py-5 hover-style-1">
					<i class="icofont-basketball text-lg text-color"></i>
					<h4 class="mt-3 mb-4 text-uppercase">Basketball</h4>
					<p>Basketball is a fast-paced team sport where players use their hands to shoot a ball into a raised basket.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Section Services End -->

<!-- Section Gallery Start -->
<section class="gallery">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 text-center">
				<div class="section-title">
					<div class="divider mb-3"></div>
					<h2>Our gallery</h2>
					<p>The scenery of our amazing sports facilities in UTM.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid p-0">
		<div class="row no-gutters portfolio-gallery">
			<div class="col-lg-3 col-md-6 col-sm-6">
				<a href="images/gallery/gallery-01.jpg" class="popup-gallery">
					<img src="images/gallery/gallery-01.jpg" alt="" class="img-fluid">
				</a>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<a href="images/gallery/gallery-02.jpg" class="popup-gallery">
					<img src="images/gallery/gallery-02.jpg" alt="" class="img-fluid">
				</a>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<a href="images/gallery/gallery-03.jpg" class="popup-gallery">
					<img src="images/gallery/gallery-03.jpg" alt="" class="img-fluid">
				</a>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<a href="images/gallery/gallery-04.jpg" class="popup-gallery">
					<img src="images/gallery/gallery-04.jpg" alt="" class="img-fluid">
				</a>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<a href="images/gallery/gallery-05.jpg" class="popup-gallery">
					<img src="images/gallery/gallery-05.jpg" alt="" class="img-fluid">
				</a>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<a href="images/gallery/gallery-06.jpg" class="popup-gallery">
					<img src="images/gallery/gallery-06.jpg" alt="" class="img-fluid">
				</a>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<a href="images/gallery/gallery-07.jpg" class="popup-gallery">
					<img src="images/gallery/gallery-07.jpg" alt="" class="img-fluid">
				</a>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<a href="images/gallery/gallery-08.jpg" class="popup-gallery">
					<img src="images/gallery/gallery-08.jpg" alt="" class="img-fluid">
				</a>
			</div>
		</div>
	</div>
</section>
<!-- Section Gallery END -->

<!-- Section Footer Start -->
<!-- footer Start -->
<footer class="footer bg-black-50">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 mb-5 mb-lg-0">
				<h2 class="text-white mb-4">SP4LIFE</h2>
				<p>SP4Life is a state-of-the-art sport court booking system designed to make it easy for players to reserve courts in UTM. Whether you're looking to play basketball, tennis, or any other sport, SP4Life has you covered. With its user-friendly interface and intuitive navigation, you can easily find available courts in just a few clicks. Experience the convenience and ease of SP4Life, and book your court today!</p>
			</div>

			<div class="col-lg-5 col-md-5 mb-5 mb-lg-0">
				<div class="footer-widget">
					<h4 class="mb-4 text-white letter-spacing text-uppercase">Quick Links</h4>
					<ul class="list-unstyled footer-menu lh-40 mb-0">
						<li><a href="{{('aboutus')}}"><i class="ti-angle-double-right mr-2"></i>About Us</a></li>
						<li><a href="{{('sport')}}"><i class="ti-angle-double-right mr-2"></i>Sport</a></li>
						<li><a href="{{('booking')}}"><i class="ti-angle-double-right mr-2"></i>Booking</a></li>
						<li><a href="{{('contactus')}}"><i class="ti-angle-double-right mr-2"></i>Contact us</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="row align-items-center mt-5 px-3 bg-black mx-1">
			<div class="col-lg-4">
				<p class="text-white mt-3">SP4Life © 2022</p>
			</div>
			<div class="col-lg-6 ml-auto text-right">
				<ul class="list-inline mb-0 footer-socials">
					<li class="list-inline-item"><a href="https://github.com/ShahRenin/Tech4Life"><i class="ti-github"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<!-- Section Footer End -->

<!-- Section Footer Scripts -->
   </div>

   <!--
    Essential Scripts
    =====================================-->


   <!-- Main jQuery -->
   <script src="{{url('plugins/jquery/jquery.js')}}"></script>
   <!-- Bootstrap 4.3.1 -->
   <script src="{{url('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
   <!-- Slick Slider -->
   <script src="{{url('plugins/slick-carousel/slick/slick.min.js')}}"></script>
   <!--  Magnific Popup-->
   <script src="{{url('plugins/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
   <!-- Form Validator -->
   <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
   <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
   <!-- Google Map -->
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
   <script src="{{url('plugins/google-map/gmap.js')}}"></script>

   <script src="{{url('js/script.js')}}"></script>

   </body>

   </html>

