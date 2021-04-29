@extends('layouts.masterPage')

@section('contant')

		<!-- Slider-->
		<div class="rn-carousel carousel slide" id="carouselExampleControls" data-ride="carousel">
			<div class="carousel-inner">

				<!-- Slider Item 1-->
				<div class="carousel-item beactive">
					<div class="carousel-caption">
						<h2 class="rn-fade-bottom mb-25">Car Rent Service In Your City</h2>
						{{-- <p class="rn-fade-bottom rn-caption-item-2 mb-35">Maecenas viverra porta eros, id tincidunt lorem rhoncus eget. Aliquam erat volutpat. Sed ultricies elementum egestas.</p> --}}
						<a class="btn btn-main btn-lg rn-fade-bottom rn-caption-item-3" href="{{asset('cars')}}">Book Now</a>
					</div>
					<div class="rn-slider-overlayer"></div>
					<img class="d-block w-100" src="assets/images/slide1.jpg" alt="slide">
				</div>

				<!-- Slider Item 2-->
				<div class="carousel-item">
					<div class="carousel-caption">
						<h2 class="rn-fade-bottom mb-25">Quality Cars with Unlimited Miles</h2>
						{{-- <p class="rn-fade-bottom rn-caption-item-2 mb-35">Maecenas viverra porta eros, id tincidunt lorem rhoncus eget. Aliquam erat volutpat. Sed ultricies elementum egestas.</p> --}}
						<a class="btn btn-main btn-lg rn-fade-bottom rn-caption-item-3" href="{{asset('cars')}}">Book Now</a>
					</div>
					<div class="rn-slider-overlayer"></div>
					<img class="d-block w-100" src="assets/images/slide2.jpg" alt="slide">
				</div>

				<!-- Slider Item 3-->
				<div class="carousel-item">
					<div class="carousel-caption">
						<h2 class="rn-fade-bottom mb-25">24/7 Customer Support Guarantee</h2>
						<p class="rn-fade-bottom rn-caption-item-2 mb-35">It includes assistance in planning, installation, training, troubleshooting, maintenance, upgrading, and disposal of a product</p>
						<a class="btn btn-main btn-lg rn-fade-bottom rn-caption-item-3" href="{{asset('cars')}}">Book Now</a>
					</div>
					<div class="rn-slider-overlayer"></div>
					<img class="d-block w-100" src="assets/images/slide3.jpg" alt="slide">
				</div>

			</div>
			<!-- Slider Controls -->
			<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="lnr lnr-chevron-left" aria-hidden="true"></span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="lnr lnr-chevron-right" aria-hidden="true"></span>
			</a>
		</div>
		<!-- End slider-->

		<!-- Car Search Form-->
		<section class="rn-search-form-big rn-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">

						<!-- Section Title-->
						<div class="rn-section-title  rn-title-bg-color-white-10 rn-title-color-white">
							<h2 class="rn-title">Search &amp; Hire Cars</h2>
							<span class="rn-title-bg">Search &amp; Hire Cars</span>
						</div>

					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">

						<!-- Main Big Search Form-->
            {{-- {{route('customer.edit',$customer->id)}} --}}
						<div class="rn-big-search-form rn-big-search-form-dark">
							{{-- <form action="booking" method="POST" enctype="multipart/form-data"> --}}
							<form action="{{route('store')}}" method="post" enctype="multipart/form-data">
                {{-- {{ csrf_field() }} --}}
								@csrf
                @if ($errors->has('pickup_location'))
                  <p style="color: #F00;">{{ $errors->first('pickup_location')}}</p>
                @endif
                @if ($errors->has('drop_location'))
                  <p style="color: #F00;">{{ $errors->first('drop_location')}}</p>
                @endif
                @if ($errors->has('pickup_date'))
                  <p style="color: #F00;">{{ $errors->first('pickup_date')}}</p>
                @endif
                @if ($errors->has('pickup_time'))
                  <p style="color: #F00;">{{ $errors->first('pickup_time')}}</p>
                @endif
								<div class="row">
									<div class="col-lg-3 col-sm-6">
										<div class="rn-icon-input">
											<i class="fas fa-map-marker-alt "></i>
											<select class="pl-30 text-white" name="pickup_location"required="required">
												<option class="text-secondary" disabled selected>Pickup Location</option>
												<option class="text-secondary" value="Alabama">Alabama</option>
												<option class="text-secondary" value="Alaska">Alaska</option>
												<option class="text-secondary" value="Arizona">Arizona</option>
												<option class="text-secondary" value="Arkansas">Arkansas</option>
												<option class="text-secondary" value="California">California</option>
												<option class="text-secondary" value="Colorado">Colorado</option>
												<option class="text-secondary" value="Connecticut">Connecticut</option>
												<option class="text-secondary" value="Delaware">Delaware</option>
											</select>
										</div>
									</div>

									{{-- <select name="STA" onchange="changePickupStation(this); enableGRPChioce( this[ this.selectedIndex].value); enableCrossBorder( this[ this.selectedIndex].value);" id="STA" class="defaultText longselect">
										<option value="" selected="" class="dropdownFirstRow">- Select a rental location -
										</option>
										<option value="xx" class="dropdownHeadline">---- Airport locations ----</option>
										<option value="AMM" class="dropdownEntry">Amman; Queen Alia Intl Airport</option>
										<option value="AQJ" class="dropdownEntry">Aqaba; Aqaba Airport</option>
										<option value="-1" class="dropdownEmpty">.</option>
										<option value="xx" class="dropdownHeadline">---- City locations ----</option>
										<option value="M93" class="dropdownEntry">Amman; 246 Mecca Street</option>
										<option value="DV8" class="dropdownEntry">Aqaba; La Costa Hotel Building</option>
										<option value="DY0" class="dropdownEntry">Aqaba; Wadi Araba Crossing Border</option>
									</select> --}}

									<div class="col-lg-3 col-sm-6">
										<div class="rn-icon-input">
											<i class="fas fa-map-marker-alt"></i>
											<select class="pl-30 text-white" name="drop_location"required="required">
												<option class="text-secondary" disabled selected>Drop Location</option>
												<option class="text-secondary" value="Alabama">Alabama</option>
												<option class="text-secondary" value="Alaska">Alaska</option>
												<option class="text-secondary" value="Arizona">Arizona</option>
												<option class="text-secondary" value="Arkansas">Arkansas</option>
												<option class="text-secondary" value="California">California</option>
												<option class="text-secondary" value="Colorado">Colorado</option>
												<option class="text-secondary" value="Connecticut">Connecticut</option>
												<option class="text-secondary" value="Delaware">Delaware</option>
											</select>
										</div>
									</div>
									<div class="col-lg-3 rn-date-time-input">
										<div class="row">
											<div class="col-lg-7 col-md-8 col-8">
												<div class="rn-icon-input">
													<i class="far fa-calendar-alt"></i>
													<input type="text" name="pickup_date" placeholder="Pickup Date" id="pickup-date" required="required"/>
												</div>
											</div>
											<div class="col-lg-5 col-md-4 col-4">
												<div class="rn-icon-input">
													<i class="far fa-clock"></i>
													<input type="text" name="pickup_time" placeholder="Time" id="pickup-time" required="required"/>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-3 rn-date-time-input">
										<div class="row">
											<div class="col-lg-7 col-md-8 col-8">
												<div class="rn-icon-input">
													<i class="far fa-calendar-alt"></i>
													<input type="text" name="drop_date" placeholder="Drop Date" id="drop-date" required="required"/>
												</div>
											</div>
											<div class="col-lg-5 col-md-4 col-4">
												<div class="rn-icon-input">
													<i class="far fa-clock"></i>
													<input type="text" name="drop_time" placeholder="Time" id="drop-time" required="required"/>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="text-center">
									<button class="btn btn-orange btn-lg mt-30 btn-shadow" type="submit">
										<i class="fas fa-search"></i> Find Now
									</button>
								</div>
							</form>
						</div>

					</div>
				</div>
			</div>
			<!-- Section Shape-->
			<div class="rn-shape rn-shape-bottom"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
	<path class="rn-shape-fill" d="M500.2,94.7L0,0v100h1000V0L500.2,94.7z"/>
</svg>
			</div>
		</section>
		<!-- End Car Search Form-->

		<!-- Why People Like Us Section-->
		<section class="rn-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">

						<!-- Section Title-->
						<div class="rn-section-title   ">
							<h2 class="rn-title">Why People Like Us?</h2>
						</div>

					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-6">

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
					<div class="col-lg-3 col-md-6">

						<!-- Feature with dot-->
						<div class="rn-dot-feature">
							<div class="rn-the-dot"></div>
							<div class="rn-dot-feature-info">
								<h3>No Cancellation Fees</h3>
								<p>a car insurance cover for our car that does not charge cancellation / amendment fee</p>
							</div>
						</div>
						<!-- End Feature with dot-->

					</div>
					<div class="col-lg-3 col-md-6">

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
					<div class="col-lg-3 col-md-6">

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
				{{-- <div class="row">
					<div class="col-lg-3 col-md-6">

						<!-- Feature with dot-->
						<div class="rn-dot-feature">
							<div class="rn-the-dot"></div>
							<div class="rn-dot-feature-info">
								<h3>Personal Driver</h3>
								<p>Duis placerat tempus odio vel pretium. Vestibulum mattis viverra justo vel consequat.</p>
							</div>
						</div>
						<!-- End Feature with dot-->

					</div>
					<div class="col-lg-3 col-md-6">

						<!-- Feature with dot-->
						<div class="rn-dot-feature">
							<div class="rn-the-dot"></div>
							<div class="rn-dot-feature-info">
								<h3>Unlimited Miles</h3>
								<p>Duis placerat tempus odio vel pretium. Vestibulum mattis viverra justo vel consequat.</p>
							</div>
						</div>
						<!-- End Feature with dot-->

					</div>
					<div class="col-lg-3 col-md-6">

						<!-- Feature with dot-->
						<div class="rn-dot-feature">
							<div class="rn-the-dot"></div>
							<div class="rn-dot-feature-info">
								<h3>City to City</h3>
								<p>Duis placerat tempus odio vel pretium. Vestibulum mattis viverra justo vel consequat.</p>
							</div>
						</div>
						<!-- End Feature with dot-->

					</div>
					<div class="col-lg-3 col-md-6">

						<!-- Feature with dot-->
						<div class="rn-dot-feature">
							<div class="rn-the-dot"></div>
							<div class="rn-dot-feature-info">
								<h3>24/7 Customer Support</h3>
								<p>Duis placerat tempus odio vel pretium. Vestibulum mattis viverra justo vel consequat.</p>
							</div>
						</div>
						<!-- End Feature with dot-->

					</div>
				</div> --}}
			</div>
		</section>
		<!-- End Why People Like Us Section-->

		<!-- Popular Cars Section-->
		<section class="rn-section rn-section-light-gray">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">

						<!-- Section Title-->
						<div class="rn-section-title  rn-title-bg-color-white ">
							<h2 class="rn-title">Popular Cars</h2>
							{{-- <p>Inbecilloque elegans errorem concedo etsi electram.</p> --}}
							<span class="rn-title-bg">Most Popular Cars</span>
						</div>

					</div>
				</div>

				<div class="row">
          <!-- Car Item-->
					@foreach ($vehicles as $vehicle)
						<div class="col-lg-4 col-md-6">
							<div class="rn-car-item">

								<div class="rn-car-item-review">
									<div class="fas fa-star"></div> 5.0
								</div>
								
								@if (!$vehicle->status)
								<div class="rn-car-item-review" style="background: red;">
									NotAvailable
								</div>
								@endif

								<div class="rn-car-item-thumb">
									<a href="singleCar/{{$vehicle['id']}}">
										{{-- assets/images/car-1.jpg --}}
										<img class="img-fluid" src="{{asset("images/".$vehicle->VehicleImage)}}" alt="Black Sedan" srcset="{{asset("images/".$vehicle->VehicleImage)}}, assets/images/car-1@2x.jpg 2x"/>
									</a>
								</div>
								<div class="rn-car-item-info">
									<h3>
										<a href="singleCar/{{$vehicle['id']}}">{{$vehicle->VehiclesTitle}}</a>
									</h3>
									<p>{{$vehicle->VehiclesOverview}}</p>
									<div class="rn-car-list-n-price">
										<ul>
											<li>{{$vehicle->ModelYear}}</li>
											<li>{{$vehicle->TransmissionGuide}}</li>
											<li>{{$vehicle->FuelType}}</li>
										</ul>
										<div class="rn-car-price-wrap">
											<a class="rn-car-price" href="singleCar/{{$vehicle['id']}}">
												<span class="rn-car-price-from">From</span>
												<span class="rn-car-price-format">
													<span class="rn-car-price-amount">{{$vehicle->price}}</span>
													<span class="rn-car-price-per">/day</span>
												</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Car Item-->
					@endforeach

				</div>
			</div>
		</section>
		<!-- End Popular Cars Section-->

		<!-- Testimonials & Fun Fact-->
		<section class="rn-section rn-fun-fact">
			<div class="rn-section-overlayer"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-6">

						<!-- Section Title-->
						<div class="rn-section-title rn-title-pos-left rn-title-bg-color-white-10 rn-title-color-white">
							<h2 class="rn-title">Testimonials</h2>
							<span class="rn-title-bg">Testimonials</span>
						</div>

						<!-- Testimonials-->
						<div class="rn-testimonials rn-testimonials2">
							<div class="rn-testimonials-carousel carousel slide" id="rn-testimonials" data-ride="carousel">
								<div class="carousel-inner">

									<!-- Testimonial Item 1-->
									<div class="carousel-item active">
										<blockquote class="rn-testimonial2-item">
											<p>RentNow has been providing extremely good service for the past years and this is especially helpful for us who are based overseas.</p>
											<footer>
												<div class="rn-testimonial-author"><strong>Ahmad Ahmad</strong>
												</div>
											</footer>
										</blockquote>
									</div>

									<!-- Testimonial Item 2-->
									<div class="carousel-item">
										<blockquote class="rn-testimonial2-item">
											<p>Before booking I was sceptical about the transport, but it worked
												faultlessly and we never had to wait.</p>
											<footer>
												<div class="rn-testimonial-author"><strong>Mohammad</strong>
												</div>
											</footer>
										</blockquote>
									</div>

								</div>
								<!-- Testimonials Slider Controls-->
								<ol class="carousel-indicators">
									<li class="active" data-target="#rn-testimonials" data-slide-to="0"></li>
									<li data-target="#rn-testimonials" data-slide-to="1"></li>
									<li data-target="#rn-testimonials" data-slide-to="2"></li>
									<li data-target="#rn-testimonials" data-slide-to="3"></li>
								</ol>
							</div>
						</div>
						<!-- End Testimonials-->

					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-6">

								<!-- CountUp Item-->
								<div class="rn-counter-item">
									<div class="rn-counter-number-container">
										<span class="rn-counter-number">350</span>
										<span class="rn-counter-postfix">+</span>
									</div>
									<div class="rn-counter-text">Cars For Rent</div>
								</div>

							</div>
							<div class="col-6">

								<!-- CountUp Item-->
								<div class="rn-counter-item">
									<div class="rn-counter-number-container">
										<span class="rn-counter-number">6500</span>
										<span class="rn-counter-postfix">+</span>
									</div>
									<div class="rn-counter-text">Happy Clients</div>
								</div>

							</div>
							<div class="col-6">

								<!-- CountUp Item-->
								<div class="rn-counter-item">
									<div class="rn-counter-number-container">
										<span class="rn-counter-number">5000</span>
										<span class="rn-counter-postfix">+</span>
									</div>
									<div class="rn-counter-text">Positive Reviws</div>
								</div>

							</div>
							<div class="col-6">

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
			</div>
		</section>
		<!-- End Testimonials & Fun Fact-->

		
		<!-- Car Categories-->
		<section class="rn-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">

						<!-- Section Title-->
						<div class="rn-section-title   ">
							<h2 class="rn-title">Car by Types</h2>
							<span class="rn-title-bg">Car by Types</span>
						</div>

					</div>
				</div>
				<div class="row">
					<div class="col-lg-2 col-6 col-md-4">
						<!-- Car Category-->
						<div class="rn-car-type">
							<a href="#">
								<span class="rn-car-type-icon">
									<i class="rni-car-type-sedan"></i>
								</span>
								<span class="rn-car-type-title">Sedan</span>
							</a>
						</div>
					</div>
					<div class="col-lg-2 col-6 col-md-4">
						<!-- Car Category-->
						<div class="rn-car-type">
							<a href="#">
								<span class="rn-car-type-icon">
									<i class="rni-car-type-roadster"></i>
								</span>
								<span class="rn-car-type-title">Roadster</span>
							</a>
						</div>
					</div>
					<div class="col-lg-2 col-6 col-md-4">
						<!-- Car Category-->
						<div class="rn-car-type">
							<a href="#">
								<span class="rn-car-type-icon">
									<i class="rni-car-type-coupe"></i>
								</span>
								<span class="rn-car-type-title">Coupe</span>
							</a>
						</div>
					</div>
					<div class="col-lg-2 col-6 col-md-4">
						<!-- Car Category-->
						<div class="rn-car-type">
							<a href="#">
								<span class="rn-car-type-icon">
									<i class="rni-car-type-minivan"></i>
								</span>
								<span class="rn-car-type-title">Minivan</span>
							</a>
						</div>
					</div>
					<div class="col-lg-2 col-6 col-md-4">
						<!-- Car Category-->
						<div class="rn-car-type">
							<a href="#">
								<span class="rn-car-type-icon">
									<i class="rni-car-type-statio-wagon"></i>
								</span>
								<span class="rn-car-type-title">Station Wagon</span>
							</a>
						</div>
					</div>
					<div class="col-lg-2 col-6 col-md-4">
						<!-- Car Category-->
						<div class="rn-car-type">
							<a href="#">
								<span class="rn-car-type-icon">
									<i class="rni-car-type-limousine"></i>
								</span>
								<span class="rn-car-type-title">Limousine</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Car Categories-->

@endsection
