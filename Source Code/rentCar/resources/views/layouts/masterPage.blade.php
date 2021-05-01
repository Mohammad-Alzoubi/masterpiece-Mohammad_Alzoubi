<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from demo.kitthemes.com/html/rentnow/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Mar 2021 22:22:35 GMT -->
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>RentNow - Responsive Car Rental Template</title>

		<!-- Preloader CSS-->
		<style>#preloader:after,#preloader:before{content:"";display:block;left:-1px;top:-1px}#preloader-overlayer,#preloader:after,#preloader:before{position:absolute;height:100%;width:100%}#preloader-overlayer{position:fixed;top:0;left:0;background-color:#112E3B;z-index:999}#preloader{height:40px;width:40px;position:fixed;top:50%;left:50%;margin-top:-20px;margin-left:-20px;z-index:9999}#preloader:before{-webkit-animation:rotation 1s linear infinite;animation:rotation 1s linear infinite;border:2px solid #42DB0C;border-top:2px solid transparent;border-radius:100%}#preloader:after{border:1px solid rgba(255,255,255,.1);border-radius:100%}@media only screen and (min-width:768px){#preloader{height:60px;width:60px;margin-top:-30px;margin-left:-30px}#preloader:before{left:-2px;top:-2px;border-width:2px}}@media only screen and (min-width:1200px){#preloader{height:80px;width:80px;margin-top:-40px;margin-left:-40px}}@-webkit-keyframes rotation{from{-webkit-transform:rotate(0);transform:rotate(0)}to{-webkit-transform:rotate(359deg);transform:rotate(359deg)}}@keyframes rotation{from{-webkit-transform:rotate(0);transform:rotate(0)}to{-webkit-transform:rotate(359deg);transform:rotate(359deg)}}</style>

		<!--
		All CSS Codes Loaded
		Ex: bootstrap, fontawesome, style, etc.
		-->
		<link rel="stylesheet" href="{{asset('assets/libs/bootstrap/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/libs/fontawesome/css/fontawesome-all.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/libs/linearicons/linearicons.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/rentnow-icons.css')}}">
		<link rel="stylesheet" href="{{asset('assets/libs/flatpickr/flatpickr.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

		<!-- Google Map JS-->
		<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCOdKtT5fapH3_OfhV3HFeZjqFs4OfNIew"></script>
	</head>
	<body class="rn-preloader">
		<div id="preloader"></div>
		<div id="preloader-overlayer"></div>

		<!-- Header-->
		<header class="rn-header">

			<!-- Topbar-->
			<div class="rn-topbar">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-12 col-sm-5 col-lg-3">

							<!-- Tobar Social-->
							<ul class="rn-social">
								<li>
									<a href="#">
										<i class="fab fa-facebook-f"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fab fa-twitter"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fab fa-google-plus-g"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fab fa-instagram"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fab fa-linkedin-in"></i>
									</a>
								</li>
							</ul>

						</div>
						<div class="col-12 col-sm-7 col-lg-9">

							<!-- Topbar Contact with Icon-->
							<div class="rn-icon-contents">
								<div class="rn-phone rn-icon-content">
									<div class="rn-icon">
										<i class="lnr lnr-phone"></i>
									</div>
									<div class="rn-info">
										<ul>
											<li>(+962) 778 872 370</li>
											<li>(+962) 778 872 370</li>
										</ul>
									</div>
								</div>
								<div class="rn-email rn-icon-content">
									<div class="rn-icon">
										<i class="lnr lnr-envelope"></i>
									</div>
									<div class="rn-info">
										<ul>
											<li>support@rentnow.com</li>
											<li>sale@rentnow.com</li>
										</ul>
									</div>
								</div>
								<div class="rn-address rn-icon-content">
									<div class="rn-icon">
										<i class="lnr lnr-map-marker"></i>
									</div>
									<div class="rn-info">
										<ul>
											{{-- <li>1425 Pointe Lane, Miami</li> --}}
											<li>Amman – 33169, Amman</li>
											<li>Amman – 33169, Amman</li>
										</ul>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
			<!-- End Topbar-->


			<!-- Menubar-->
			<div class="rn-menubar">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-4">
							<!-- Logo-->
							<a class="brand-name" href="{{asset('/')}}">
								<img class="img-fluid" src="{{asset('assets/images/logo.svg')}}" alt="Logo">
							</a>
						</div>
						<div class="col-8">
							<nav class="rn-navbar-container">

								<!-- Navbar Toggle Button for Only Tablet and Phone-->
								<button class="rn-navbar-toggler" id="rn-navbar-toggler">
									<span class="rn-navbar-toggler-bar"></span>
									<span class="rn-navbar-toggler-bar"></span>
									<span class="rn-navbar-toggler-bar"></span>
								</button>

								<!-- Main Nav Menu-->
								<ul class="rn-navbar">
									<li class="active">
										<a href="{{asset('index')}}">Home</a>
									</li>
									<li>
										<a href="{{asset('cars')}}">Cars 
											<i class="lnr lnr-chevron-down"></i>
										</a>
										<ul>
											<li>
												<a href="{{asset('cars')}}">Car List</a>
											</li>
											<li>
												<a href="{{asset('car-search')}}">Car Search</a>
											</li>
										</ul>
									</li>

									<li>
										<a href="#">Pages 
											<i class="lnr lnr-chevron-down"></i>
										</a>
										<ul>
											<li>
												<a href="{{asset('about')}}">About Us</a>
											</li>
											<li>
												<a href="{{asset('terms')}}">Terms</a>
											</li>
											
										</ul>
									</li>
									<li>
										<a href="{{asset('service')}}">Service</a>
									</li>
									<li>
										<a href="{{asset('contact')}}">Contact</a>
									</li>
									<li>
										@if(isset(session("loginUser")['id']))
											<li><a href="{{asset('my-account')}}">Profile</a></li>
										@endif
									</li>
									<li>
										@if(!isset(session("loginUser")['id']))
											<li><a href="{{asset('login')}}">Login</a></li>
											@else
											<li><a href="{{asset('logout')}}">Logout</a></li>
										@endif
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
			<!-- End Menubar-->

		</header>
		<!-- End Header-->
{{-- ************************************************************************************* --}}

<main>
    @yield('contant')
</main>


{{-- ************************************************************************************ --}}
		<!-- Site Footer-->
		<footer class="rn-footer">

			<!-- Footer Widgets-->
			<div class="rn-footer-widgets">
				<div class="container">
					<div class="row">
						<div class="col-md-4">

							<!-- Widget Item-->
							<section class="rn-widget">
								<h2 class="rn-widget-title">About Us</h2>
								<div class="rn-widget-content">
									<a class="brand-name" href="/">
										<img src="{{asset('assets/images/logo.svg')}}" alt="Logo">
									</a>
									<p>
										would like to thank you for visiting our website which we designed to provide you
										with information about RentNow A Car and what we do. it's about giving the customer the best booking for the best price.
									</p>
									<ul class="rn-widget-social">
										<li>
											<a href="#">
												<i class="fab fa-facebook-f"></i>
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fab fa-twitter"></i>
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fab fa-instagram"></i>
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fab fa-linkedin-in"></i>
											</a>
										</li>
									</ul>
								</div>
							</section>
							<!-- End Widget Item-->

						</div>
						<div class="col-md-5">

							<!-- Widget Item-->
							<section class="rn-widget">
								<h2 class="rn-widget-title">Quick Links</h2>
								<div class="rn-widget-content">
									<div class="row rn-quick-links">
										<div class="col-6">
											<ul>
												<li>
													<a href="{{asset('about')}}">About Us</a>
												</li>
												<li>
													<a href="{{asset('contact')}}">Contact Us</a>
												</li>
												<li>
													<a href="{{asset('contact')}}">Support</a>
												</li>
												<li>
													<a href="{{asset('car-search')}}">Car Search</a>
												</li>
											</ul>
										</div>
										<div class="col-6">
											<ul>
												<li>
													<a href="{{asset('contact')}}">Site Map</a>
												</li>
												<li>
													<a href="{{asset('cars')}}">Cars</a>
												</li>
												<li>
													<a href="{{asset('terms')}}">Terms & Conditions</a>
												</li>
												<li>
													<a href="{{asset('login')}}">login</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</section>
							<!-- End Widget Item-->

						</div>
						<div class="col-md-3">

							<!-- Widget Item-->
							<section class="rn-widget">
								<h2 class="rn-widget-title">Contact Us</h2>
								<div class="rn-widget-content">
									<div class="rn-icon-contents">
										<div class="rn-phone rn-icon-content">
											<div class="rn-icon">
												<i class="lnr lnr-phone"></i>
											</div>
											<div class="rn-info">
												<ul>
													<li>(+962)-778-872-370</li>
													<li>(+962)-778-872-370</li>
												</ul>
											</div>
										</div>
										<div class="rn-email rn-icon-content">
											<div class="rn-icon">
												<i class="lnr lnr-envelope"></i>
											</div>
											<div class="rn-info">
												<ul>
													<li>support@rentnow.coms</li>
													<li>sale@rentnow.com</li>
												</ul>
											</div>
										</div>
										<div class="rn-address rn-icon-content">
											<div class="rn-icon">
												<i class="lnr lnr-map-marker"></i>
											</div>
											<div class="rn-info">
												<ul>
													{{-- <li>1425 Pointe Lane, Miami</li> --}}
													<li>(+962) 778 872 370</li>
													<li>(+962) 778 872 370</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</section>
							<!-- End Widget Item-->

						</div>
					</div>
				</div>
			</div>
			<!-- End Footer Widgets-->

			<!-- Footer Copyright-->
			<div class="rn-footer-copyright">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-md-6">
							<p>Copyright &copy; RentNow 2021. All rights reserved.</p>
						</div>
						<div class="col-md-6 text-right">
							<span class="rn-pyament-methods">
								<span>We Accept</span>
								<img src="{{asset('assets/images/payments.png')}}" alt="payments" srcset="{{asset('assets/images/payments.png')}} 1x, {{asset('assets/images/payments@2x.png')}} 2x">
							</span>
						</div>
					</div>
				</div>
			</div>
			<!-- End Footer Copyright-->

		</footer>
		<!-- End Site Footer-->

		<!--
		All JavaScripts Codes Loaded
		Ex: jquery, bootstrap, etc.
		-->
		<script src="{{asset('assets/js/jquery.min.js')}}"></script>
		<script src="{{asset('assets/js/popper.min.js')}}"></script>
		<script src="{{asset('assets/libs/bootstrap/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('assets/libs/flatpickr/flatpickr.min.js')}}"></script>
		<script src="{{asset('assets/js/starrr.min.js')}}"></script>
		<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{asset('assets/js/scripts.js')}}"></script>
	</body>

<!-- Mirrored from demo.kitthemes.com/html/rentnow/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Mar 2021 22:22:50 GMT -->
</html>