@extends('layouts.masterPage')

@section('contant')

		<!-- Page Title-->
		<div class="rn-page-title">
			<div class="rn-pt-overlayer"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="rn-page-title-inner">
							<h1>Contact</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Page Title-->

		<!-- Page Content-->
		<section class="rn-section">
			<div class="container">
				<div class="row mb-90">
					<div class="col-lg-12">
						<!-- Google Map-->
						<div class="rn-google-map" id="rn-google-map"></div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">

						<!-- Contact Form-->
						<h2 class="rn-simple-title">Send Message</h2>
						@if ($message = Session::get('success'))
						<p class="alert alert-success">
							{{ $message }}
						</p>
						@endif

						<div class="rn-contact-form">
							<form action="contact" method="POST">
								{{ csrf_field() }}
								<div class="row mb-30">
									<div class="col-6">
										@if ($errors->has('name'))
										<div class="alert alert-danger">{{ $errors->first('name') }}</div>
										@endif
										<div class="rn-icon-input">
											<i class="far fa-user"></i>
											<input type="text" name="name" placeholder="Full name" value="{{ old('name') }}">
										</div>
									</div>

									<div class="col-6">
										@if ($errors->has('email'))
										<div class="alert alert-danger">{{ $errors->first('email') }}</div>
										@endif
										<div class="rn-icon-input">
											<i class="far fa-envelope"></i>
											<input type="email" name="email" placeholder="Your Email" value="{{ old('email') }}">
										</div>
									</div>
								</div>
								@if ($errors->has('message'))
									<div class="alert alert-danger">{{ $errors->first('message') }}</div>
								@endif
								<div class="rn-icon-input rn-icon-top mb-30">
									<i class="far fa-comment"></i>
									<textarea name="message" placeholder="Your Message" rows="5" value="{{ old('message') }}"></textarea>
								</div>
								<div class="text-right">
									<input class="btn btn-main btn-lg btn-shadow" type="submit" value="Send Message">
								</div>
							</form>
						</div>
						<!-- End Contact Form-->

					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-12">
								<h2 class="rn-simple-title">Contact Info</h2>
							</div>
							<div class="col-sm-6">

								<!-- Contact Info Item-->
								<div class="rn-contact-info">
									<div class="rn-info-icon">
										<i class="lnr lnr-map-marker"></i>
									</div>
									<div class="rn-info-content">
										<h2 class="rn-contact-title">Head Office</h2>
										<address>Amman – 33169, Amman
											<br>Amman – 33169, Amman
										</address>
									</div>
								</div>
								<!-- End Contact Info Item-->

							</div>
							<div class="col-sm-6">

								<!-- Contact Info Item-->
								<div class="rn-contact-info">
									<div class="rn-info-icon">
										<i class="lnr lnr-map-marker"></i>
									</div>
									<div class="rn-info-content">
										<h2 class="rn-contact-title">Branch 1</h2>
										<address>
											Irbid – 135194, Irbid
											<br>
											Irbid – 135194, Irbid
										</address>
									</div>
								</div>
								<!-- End Contact Info Item-->

							</div>

							<div class="col-sm-6">
								<!-- Contact Info Item-->
								<div class="rn-contact-info">
									<div class="rn-info-icon">
										<i class="lnr lnr-phone"></i>
									</div>
									<div class="rn-info-content">
										<h2 class="rn-contact-title">Phone</h2>
										<address>(+962) 778 872 370
											<br>(+962) 778 872 370
										</address>
									</div>
								</div>
								<!-- End Contact Info Item-->

							</div>
							<div class="col-sm-6">

								<!-- Contact Info Item-->
								<div class="rn-contact-info">
									<div class="rn-info-icon">
										<i class="lnr lnr-envelope"></i>
									</div>
									<div class="rn-info-content">
										<h2 class="rn-contact-title">E-mail</h2>
										<address>support@rentnow.coms
											<br>sale@rentnow.com
										</address>
									</div>
								</div>
								<!-- End Contact Info Item-->

							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Page Content-->

		@endsection