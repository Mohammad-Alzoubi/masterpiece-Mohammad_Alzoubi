@extends('layouts.masterPage')

@section('contant')

		<!-- Page Title-->
		<div class="rn-page-title">
			<div class="rn-pt-overlayer"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="rn-page-title-inner">
							<h1>About Us</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Page Title-->

		<!-- Our Vission-->
		<section class="rn-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">

						<!-- Section Title-->
						<div class="rn-section-title   ">
							<h2 class="rn-title">Our Vission</h2>
							<span class="rn-title-bg">Our Vission</span>
						</div>

					</div>
				</div>
				<div class="row mb-30">
					<div class="col-lg-3 col-sm-6">

						<!-- Feature with dot-->
						<div class="rn-dot-feature">
							<div class="rn-the-dot"></div>
							<div class="rn-dot-feature-info">
								<h3>Best Price Guarantee</h3>
								<p>Our Best Price Guarantee means that you can be sure of booking at the best rate.</p>
							</div>
						</div>
						<!-- End Feature with dot-->

					</div>
					<div class="col-lg-3 col-sm-6">

						<!-- Feature with dot-->
						<div class="rn-dot-feature">
							<div class="rn-the-dot"></div>
							<div class="rn-dot-feature-info">
								<h3>Best Quality Cars</h3>
								<p>Duis placerat tempus odio vel pretium. Vestibulum mattis viverra justo vel consequat.</p>
							</div>
						</div>
						<!-- End Feature with dot-->

					</div>
					<div class="col-lg-3 col-sm-6">

						<!-- Feature with dot-->
						<div class="rn-dot-feature">
							<div class="rn-the-dot"></div>
							<div class="rn-dot-feature-info">
								<h3>Reservation Anytime</h3>
								<p>You can change the car rental date. You can go somewhere else.</p>
							</div>
						</div>
						<!-- End Feature with dot-->

					</div>
					<div class="col-lg-3 col-sm-6">

						<!-- Feature with dot-->
						<div class="rn-dot-feature">
							<div class="rn-the-dot"></div>
							<div class="rn-dot-feature-info">
								<h3>24/7 Customer Support</h3>
								<p>It includes assistance in planning, installation, training, troubleshooting, maintenance, upgrading, and disposal of a product</p>
							</div>
						</div>
						<!-- End Feature with dot-->

					</div>
				</div>
			</div>
		</section>
		<!-- End Our Vission-->

		<!-- About Us with Image-->
		<section class="rn-section rn-about-image-text">
			<div class="rn-section-overlayer"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-5 mb-30">
						<img class="img-fluid" src="assets/images/about-img.jpg" alt="" srcset="assets/images/about-img.jpg 1x, assets/images/about-img@2x.jpg 2x">
					</div>
					<div class="col-md-7 mb-30">
						<h2 class="rn-image-section-title">
							<span>Make Beauty Things</span> With Passion
						</h2>
						<p>Proin euismod mollis mi in finibus. Duis vitae elementum ligula. Cras suscipit feugiat arcu, eu venenatis odio. Vivamus non venenatis urna. Curabitur quis elit ut lorem condimentum dignissim. Nunc ornare massa vel fringilla efficitur. Cras elementum ligula et metus tempor, sit amet convallis neque venenatis. Morbi nisi eros, finibus sit amet ipsum ac, venenatis dignissim leo.</p>
					</div>
				</div>
			</div>
		</section>
		<!-- End About Us with Image-->

		<!-- Our Team-->
		{{-- <section class="rn-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">

						<!-- Section Title-->
						<div class="rn-section-title   ">
							<h2 class="rn-title">Our Team</h2>
							<p>Inbecilloque elegans errorem concedo etsi electram.</p>
							<span class="rn-title-bg">Our Team</span>
						</div>

					</div>
				</div>
				<div class="row">
					<div class="col-md-4">

						<!-- Team Member-->
						<div class="rn-team-member">
							<div class="rn-team-member-img">
								<div class="rn-overlayer"></div>
								<img class="img-fluid" src="assets/images/team-member-1.jpg" alt="Team member" srcset="assets/images/team-member-1.jpg 1x, assets/images/team-member-1@2x.jpg 2x"/>
							</div>
							<div class="rn-team-member-info">
								<div class="rn-team-member-name">Crystal Spencer</div>
								<div class="rn-team-member-designation">Co-Founder &amp; CEO</div>
								<ul class="rn-team-member-social">
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
						</div>
						<!-- End Team Member-->

					</div>
					<div class="col-md-4">

						<!-- Team Member-->
						<div class="rn-team-member">
							<div class="rn-team-member-img">
								<div class="rn-overlayer"></div>
								<img class="img-fluid" src="assets/images/team-member-2.jpg" alt="Team member" srcset="assets/images/team-member-2.jpg 1x, assets/images/team-member-2@2x.jpg 2x"/>
							</div>
							<div class="rn-team-member-info">
								<div class="rn-team-member-name">Anthony Wallace</div>
								<div class="rn-team-member-designation">Co-Founder &amp; CTO</div>
								<ul class="rn-team-member-social">
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
						</div>
						<!-- End Team Member-->

					</div>
					<div class="col-md-4">

						<!-- Team Member-->
						<div class="rn-team-member">
							<div class="rn-team-member-img">
								<div class="rn-overlayer"></div>
								<img class="img-fluid" src="assets/images/team-member-3.jpg" alt="Team member" srcset="assets/images/team-member-3.jpg 1x, assets/images/team-member-3@2x.jpg 2x"/>
							</div>
							<div class="rn-team-member-info">
								<div class="rn-team-member-name">James Obrien</div>
								<div class="rn-team-member-designation">Lead Developer</div>
								<ul class="rn-team-member-social">
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
						</div>
						<!-- End Team Member-->

					</div>
				</div>
			</div>
		</section> --}}
		<!-- End Our Team-->

		<!-- Fun Fact-->
		<div class="rn-section rn-about-counter">
			<div class="rn-section-overlayer"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-6">

						<!-- CountUp Item-->
						<div class="rn-counter-item">
							<div class="rn-counter-number-container">
								<span class="rn-counter-number">350</span>
								<span class="rn-counter-postfix">+</span>
							</div>
							<div class="rn-counter-text">Cars For Rent</div>
						</div>

					</div>
					<div class="col-lg-3 col-6">

						<!-- CountUp Item-->
						<div class="rn-counter-item">
							<div class="rn-counter-number-container">
								<span class="rn-counter-number">6500</span>
								<span class="rn-counter-postfix">+</span>
							</div>
							<div class="rn-counter-text">Happy Clients</div>
						</div>

					</div>
					<div class="col-lg-3 col-6">

						<!-- CountUp Item-->
						<div class="rn-counter-item">
							<div class="rn-counter-number-container">
								<span class="rn-counter-number">5000</span>
								<span class="rn-counter-postfix">+</span>
							</div>
							<div class="rn-counter-text">Positive Reviws</div>
						</div>

					</div>
					<div class="col-lg-3 col-6">

						<!-- CountUp Item-->
						<div class="rn-counter-item">
							<div class="rn-counter-number-container">
								<span class="rn-counter-number">600+</span>
								<span class="rn-counter-postfix">+</span>
							</div>
							<div class="rn-counter-text">Drivers</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<!-- End Fun Fact-->

		<!-- Our Partners-->
		<section class="rn-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">

						<!-- Section Title-->
						<div class="rn-section-title   ">
							<h2 class="rn-title">Our Partners</h2>
							<span class="rn-title-bg">Our Partners</span>
						</div>

					</div>
				</div>
				<div class="row rn-partner-logos">
					<div class="col-md-3 col-6">
						<div class="rn-partner-logo">
							<img class="img-fluid" src="assets/images/partner-1.png" alt="partner" srcset="assets/images/partner-1.png 1x, assets/images/partner-1@2x.png 2x">
						</div>
					</div>
					<div class="col-md-3 col-6">
						<div class="rn-partner-logo">
							<img class="img-fluid" src="assets/images/partner-2.png" alt="partner" srcset="assets/images/partner-2.png 1x, assets/images/partner-2@2x.png 2x">
						</div>
					</div>
					<div class="col-md-3 col-6">
						<div class="rn-partner-logo">
							<img class="img-fluid" src="assets/images/partner-3.png" alt="partner" srcset="assets/images/partner-3.png 1x, assets/images/partner-3@2x.png 2x">
						</div>
					</div>
					<div class="col-md-3 col-6">
						<div class="rn-partner-logo">
							<img class="img-fluid" src="assets/images/partner-4.png" alt="partner" srcset="assets/images/partner-4.png 1x, assets/images/partner-4@2x.png 2x">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Our Partners-->

@endsection