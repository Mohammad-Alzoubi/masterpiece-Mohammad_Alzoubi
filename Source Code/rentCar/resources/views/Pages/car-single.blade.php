@extends('layouts.masterPage')
{{-- id VehiclesTitle VehiclesOverview VehicleDescription ModelYear VehicleImage price discount FuelType
TransmissionGuide Doors Passengers Luggages Brand_id AudioInput Wheel_drive GPS_Navigation Parking_Sensors
Bluetooth USB_input Safe WI_FI Heated_Seats FM_Radio Air_Conditioner Ascending 1 Sunroof  --}}

@section('contant')
		<!-- Single Car Header-->
		<div class="rn-single-car-header">
			<div class="rn-overlayer"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="rn-car-single-info">
							<h1>{{$vehicle->VehiclesTitle}}</h1>
							<p>{{$vehicle->VehiclesOverview}}</p>
						</div>
						<div class="rn-car-single-meta">
							<span>
								<i class="rni-car-seat"></i> {{$vehicle->Passengers}} Passengers
							</span>
							<span>
								<i class="rni-suitcase"></i> {{$vehicle->Luggages}} Luggages
							</span>
							<span>
								<i class="rni-petrol-station"></i> {{$vehicle->FuelType}}
							</span>
							<span>
								<i class="rni-car-gear"></i> {{$vehicle->TransmissionGuide}}
							</span>
							<span>
								<i class="rni-car-door"></i> {{$vehicle->Doors}} Doors
							</span>
						</div>
						<div class="rn-car-single-price">
							<span class="rn-car-price-from">From</span>
							<span class="rn-car-price-format">
								<span class="rn-car-price-amount">JOD{{$vehicle->price}}</span>
								<span class="rn-car-price-per">/day</span>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Single Car Header-->

		<!-- Single Car Content-->
		<section class="rn-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<p>{{$vehicle->VehicleDescription}}</p>
						{{-- <p>Integer pellentesque fermentum mi in accumsan. Phasellus congue risus urna, eget maximus ante ullamcorper et. Aenean malesuada, magna a ultrices hendrerit, ante lectus semper odio, quis imperdiet odio tellus at ex. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc eu tellus quam. Cras sit amet sapien at est lacinia consectetur in efficitur ante. Nulla pellentesque metus et rutrum placerat. Aliquam erat volutpat.</p> --}}
					</div>
					<div class="col-lg-4">

						<!-- Check Availability-->
						<div class="rn-small-search-form">
							<div class="rn-small-search-form-title">
								<h2>Check Availability</h2>
							</div>
							{{-- {{route('store')}} --}}
							{{-- <form action="{{route('store')}}" method="POST"> --}}
							{{-- @if (count($bookingDetails))
									
							@endif --}}
							<form action="/Checkout" method="POST">
								@csrf
									@if ($errors->has('pickup_location'))
										<div class="text-danger">{{ $errors->first('pickup_location') }}</div>
									@endif
								<div class="rn-icon-input">
									<i class="fas fa-map-marker-alt"></i>
									{{-- <input type="text" placeholder="Pickup Location"> --}}
									<select class="pl-30" name="pickup_location">
										<option class="text-secondary" disabled selected>Pickup Location</option>
										{{-- <option class="text-secondary" value={{$bookingDetails->pickup_location}}>{{$bookingDetails->pickup_location}}</option> --}}
										<option class="text-secondary" value="Office Amman">Office Amman</option>
										<option class="text-secondary" value="Airport office">Airport office</option>
										<option class="text-secondary" value="Madaba City & Hotel Delivery">Madaba City & Hotel Delivery</option>
										<option class="text-secondary" value="Allenby Bridge">Allenby Bridge</option>
										<option class="text-secondary" value="Dead Sea">Dead Sea</option>
										<option class="text-secondary" value="Petra City">Petra City</option>
										<option class="text-secondary" value="Aqaba office">Aqaba office</option>
										<option class="text-secondary" value="Jordan Valley Crossing">Jordan Valley Crossing</option>
										<option class="text-secondary" value="Amman Queen alia airport">Amman Queen alia airport</option>
										<option class="text-secondary" value="Amman Downtown">Amman Downtown</option>
										<option class="text-secondary" value="King Hussein International Airport">King Hussein International Airport</option>
									</select>
								</div>

								@if ($errors->has('drop_location'))
									<div class="text-danger">{{ $errors->first('drop_location') }}</div>
								@endif
								<div class="rn-icon-input">
									<i class="fas fa-map-marker-alt"></i>
									{{-- <input type="text" placeholder="Drop Location"> --}}
									<select class="pl-30" name="drop_location">
										<option class="text-secondary" disabled selected>Drop Location</option>
										{{-- <option class="text-secondary" value={{$bookingDetails->drop_location}}>{{$bookingDetails->drop_location}}</option> --}}
										<option class="text-secondary" value="Office Amman">Office Amman</option>
										<option class="text-secondary" value="Airport office">Airport office</option>
										<option class="text-secondary" value="Madaba City & Hotel Delivery">Madaba City & Hotel Delivery</option>
										<option class="text-secondary" value="Allenby Bridge">Allenby Bridge</option>
										<option class="text-secondary" value="Dead Sea">Dead Sea</option>
										<option class="text-secondary" value="Petra City">Petra City</option>
										<option class="text-secondary" value="Aqaba office">Aqaba office</option>
										<option class="text-secondary" value="Jordan Valley Crossing">Jordan Valley Crossing</option>
										<option class="text-secondary" value="Amman Queen alia airport">Amman Queen alia airport</option>
										<option class="text-secondary" value="Amman Downtown">Amman Downtown</option>
										<option class="text-secondary" value="King Hussein International Airport">King Hussein International Airport</option>
									</select>
								</div>

								<div class="rn-date-time-input">
									<div class="row">
										@if ($errors->has('pickup_date'))
										<div class="text-danger">{{ $errors->first('pickup_date') }}</div>
										@endif
										<div class="col-7">
											<div class="rn-icon-input">
												<i class="far fa-calendar-alt"></i>
												<input type="text" name="pickup_date" placeholder="Pickup Date" id="pickup-date">
											</div>
										</div>
										<div class="col-5">
											<div class="rn-icon-input">
												<i class="far fa-clock"></i>
												<input type="text" name="pickup_time" placeholder="Time" id="pickup-time">
											</div>
										</div>
									</div>
								</div>

								<div class="rn-date-time-input">
									<div class="row">
										@if ($errors->has('drop_date'))
										<div class="text-danger">{{ $errors->first('drop_date') }}</div>
										@endif
										<div class="col-7">
											<div class="rn-icon-input">
												<i class="far fa-calendar-alt"></i>
												<input type="text" name="drop_date" placeholder="Drop Date" id="drop-date">
											</div>
										</div>
										<div class="col-5">
											<div class="rn-icon-input">
												<i class="far fa-clock"></i>
												<input type="text" name="drop_time" placeholder="Time" id="drop-time">
											</div>
										</div>
									</div>
								</div>
								{{-- select id Vehicle --}}
								<input type="hidden" name="vehicleID" value="{{$vehicle->id}}">
								@if(isset(session("loginUser")['id']))
											{{-- <li><a href="{{asset('login')}}">Login</a></li> --}}
											<button class="btn btn-main btn-lg btn-shadow btn-block" type="submit">
												Booking Now
											</button>
											@else
											<button class="btn btn-main btn-lg btn-shadow btn-block">
												<a href="{{asset('login')}}" style="color: #FFF"> Booking Now</a>
												{{-- <i class="fas fa-search"></i> --}}
											</button>
								@endif
							</form>
						</div>
						<!-- End Check Availability-->

						<!-- Car Sharing Buttons-->
						<div class="rn-car-share">
							<span>Share this car:</span>
							<ul>
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
										<i class="fab fa-linkedin-in"></i>
									</a>
								</li>
							</ul>
						</div>
						<!-- End Car Sharing Buttons-->

					</div>
				</div>

				<!-- Car Facilities-->
				<div class="row rn-facilities">
					<div class="col-lg-12">
						<h2 class="rn-simple-title">Facilities</h2>
					</div>
					<div class="col-md-3 col-6">
						<ul>
							<li>
								@if ($vehicle->AudioInput)
								<i class="fas fa-check"></i>
								@else
								<i class="fas fa-times"></i>
								@endif
								Audio input
							</li>
							<li>
								@if ($vehicle->Bluetooth)
								<i class="fas fa-check"></i>
								@else
								<i class="fas fa-times"></i>
								@endif
								Bluetooth
							</li>
							<li>
								@if ($vehicle->Heated_Seats)
								<i class="fas fa-check"></i>
								@else
								<i class="fas fa-times"></i>
								@endif
								Heated seats
							</li>
						</ul>
					</div>
					<div class="col-md-3 col-6">
						<ul>
							<li>
								@if ($vehicle->Wheel_drive)
								<i class="fas fa-check"></i>
								@else
								<i class="fas fa-times"></i>
								@endif
								All Wheel drive
							</li>
							<li>
								@if ($vehicle->USB_input)
								<i class="fas fa-check"></i>
								@else
								<i class="fas fa-times"></i>
								@endif
								USB input
							</li>
							<li>
								@if ($vehicle->FM_Radio)
								<i class="fas fa-check"></i>
								@else
								<i class="fas fa-times"></i>
								@endif
								FM Radio
							</li>
						</ul>
					</div>
					<div class="col-md-3 col-6">
						<ul>
							<li>
								@if ($vehicle->GPS_Navigation)
								<i class="fas fa-check"></i>
								@else
								<i class="fas fa-times"></i>
								@endif
								GPS Navigation
							</li>
							<li>
								@if ($vehicle->Safe)
								<i class="fas fa-check"></i>
								@else
								<i class="fas fa-times"></i>
								@endif
								Safe
							</li>
							<li>
								@if ($vehicle->Air_Conditioner)
								<i class="fas fa-check"></i>
								@else
								<i class="fas fa-times"></i>
								@endif
								Air Conditioner
							</li>
						</ul>
					</div>
					<div class="col-md-3 col-6">
						<ul>
							<li>
								@if ($vehicle->Parking_Sensors)
								<i class="fas fa-check"></i>
								@else
								<i class="fas fa-times"></i>
								@endif
								Parking Sensors
							</li>
							<li>
								@if ($vehicle->WI_FI)
								<i class="fas fa-check"></i>
								@else
								<i class="fas fa-times"></i>
								@endif
								WI-FI
							</li>
							<li>
								@if ($vehicle->Sunroof)
								<i class="fas fa-check"></i>
								@else
								<i class="fas fa-times"></i>
								@endif
								Sunroof
							</li>
						</ul>
					</div>
				</div>
				<!-- End Car Facilities-->

			</div>
		</section>
		<!-- End Single Car Content-->

		<!-- Car Reviews-->
		<div class="rn-section rn-section-light-gray">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">

						<!-- Car Reviews-->
						<div class="rn-reviews mb-50">
							<h2 class="rn-simple-title">Customer Reviews</h2>

							<!-- Review Item-->
							@foreach ($reviews as $review)

								<div class="rn-review-item">
									<div class="rn-review-meta">
										<img src="{{asset("images/".$review->image)}}" alt="{{$review->name}}" srcset="{{asset("images/".$review->image)}} 1x, {{asset("images/".$review->image)}} 2x"/>
										<div class="rn-reviewer-info">
											<div class="rn-reviewer-name">{{$review->name}}</div>
											<div class="rn-review-time">{{$review->created_at}}</div>
										</div>
									</div>
									<div class="rn-review-content">
										<div class="rn-review-ratings">
											<div class="rn-review-rating">
												<div class="rn-review-rating-title">Quality:</div>
												<div class="rn-review-rating-stars">
													{{-- <i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i> --}}
													<div>{!! str_repeat('<i class="fas fa-star" aria-hidden="true"></i>', $review->quality) !!}
															{!! str_repeat('<i class="far fa-star" aria-hidden="true"></i>', 5 - $review->quality) !!}
													</div>
												</div>
											</div>
											<div class="rn-review-rating">
												<div class="rn-review-rating-title">Price:</div>
												<div class="rn-review-rating-stars">
													<div>{!! str_repeat('<i class="fas fa-star" aria-hidden="true"></i>', $review->price) !!}
														{!! str_repeat('<i class="far fa-star" aria-hidden="true"></i>', 5 - $review->price) !!}
												</div>
												</div>
											</div>
											<div class="rn-review-rating">
												<div class="rn-review-rating-title">Comfort:</div>
												<div class="rn-review-rating-stars">
													<div>{!! str_repeat('<i class="fas fa-star" aria-hidden="true"></i>', $review->comfort) !!}
														{!! str_repeat('<i class="far fa-star" aria-hidden="true"></i>', 5 - $review->comfort) !!}
												</div>
												</div>
											</div>
											<div class="rn-review-rating">
												<div class="rn-review-rating-title">Driving:</div>
												<div class="rn-review-rating-stars">
													<div>{!! str_repeat('<i class="fas fa-star" aria-hidden="true"></i>', $review->driving) !!}
														{!! str_repeat('<i class="far fa-star" aria-hidden="true"></i>', 5 - $review->driving) !!}
												</div>
												</div>
											</div>
										</div>
										<div class="rn-review-body">
											<p>{{$review->comment}}</p>
										</div>
									</div>
								</div>
							@endforeach
							<!-- End Review Item-->

						</div>
						<!-- End Car Reviews-->
@if (isset(session("loginUser")['id']))
						<!-- Car Review Form-->
						<div class="rn-review-form">
							<h2 class="rn-simple-title">Write A Review</h2>
							<form action="" method="POST">
								@csrf
								<div class="row">
									<div class="col-md-3 col-6">
										<div class="rn-rating-input rn-rating-input-quality">
											<label>Quality:</label>
											<div class="rn-rating-input-inner">
												<input class="rn-rating-value-input" name="quality" type="hidden"/>
												<div class="rn-rating-main-input"></div>
											</div>
										</div>
									</div>
									<div class="col-md-3 col-6">
										<div class="rn-rating-input rn-rating-input-price">
											<label>Price:</label>
											<div class="rn-rating-input-inner">
												<input class="rn-rating-value-input" name="price" type="hidden"/>
												<div class="rn-rating-main-input"></div>
											</div>
										</div>
									</div>
									<div class="col-md-3 col-6">
										<div class="rn-rating-input rn-rating-input-comfort">
											<label>Comfort:</label>
											<div class="rn-rating-input-inner">
												<input class="rn-rating-value-input" name="comfort" type="hidden"/>
												<div class="rn-rating-main-input"></div>
											</div>
										</div>
									</div>
									<div class="col-md-3 col-6">
										<div class="rn-rating-input rn-rating-input-driving">
											<label>Driving:</label>
											<div class="rn-rating-input-inner">
												<input class="rn-rating-value-input" name="driving" type="hidden"/>
												<div class="rn-rating-main-input"></div>
											</div>
										</div>
									</div>
								</div>
								{{-- <div class="row">
									<div class="col-lg-4">
										<input type="text" placeholder="Name">
									</div>
									<div class="col-lg-6">
										<input type="email" placeholder="Email">
									</div>
								</div> --}}
								<textarea cols="30" rows="10" name="comment" placeholder="Write your review"></textarea>
								<div class="text-right">
									<input class="btn btn-main btn-lg btn-shadow" type="submit" value="Submit Review">
								</div>
							</form>
						</div>
						<!-- End Car Review Form-->
@endif
					</div>
				</div>
			</div>
		</div>
		<!-- End Car Reviews-->

		<!-- Similar Cars-->
		<section class="rn-car-list rn-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">

						<!-- Section Title-->
						<div class="rn-section-title   ">
							<h2 class="rn-title">Similar cars</h2>
							{{-- <p>Inbecilloque elegans errorem concedo etsi electram.</p> --}}
							<span class="rn-title-bg">Similar cars</span>
						</div>

					</div>
					<!-- Car Item-->
					@foreach ($relatedVehicles as $vehicleR)
						<div class="col-lg-4 col-md-6">
							<div class="rn-car-item">
								<div class="rn-car-item-review">
									<div class="fas fa-star"></div> 5.0
								</div>

								@if (!$vehicleR->status)
								<div class="rn-car-item-review" style="background: red;">
									NotAvailable
								</div>
								@endif

								<div class="rn-car-item-thumb">
									<a href="#">
										<img class="img-fluid" src="{{asset("images/".$vehicleR->VehicleImage)}}" alt="Toyta Corrola" srcset="{{asset("images/".$vehicleR->VehicleImage)}} 1x, {{asset("images/".$vehicleR->VehicleImage)}} 2x"/>
									</a>
								</div>
								<div class="rn-car-item-info">
									<h3>
										<a href="">{{$vehicleR->VehiclesTitle}}</a>
									</h3>
									<p>{{$vehicleR->VehiclesOverview}}</p>
									<div class="rn-car-list-n-price">
										<ul>
											<li>{{$vehicleR->ModelYear}}</li>
											<li>{{$vehicleR->TransmissionGuide}}</li>
											<li>{{$vehicleR->FuelType}}</li>
										</ul>
										<div class="rn-car-price-wrap">
											<a class="rn-car-price" href="">
												<span class="rn-car-price-from">From</span>
												<span class="rn-car-price-format">
													<span class="rn-car-price-amount">{{$vehicleR->price}}</span>
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


					{{-- <div class="col-lg-4 col-md-6">
						<!-- Car Item-->
						<div class="rn-car-item">
							<div class="rn-car-item-review">
								<div class="fas fa-star"></div> 5.0
							</div>
							<div class="rn-car-item-thumb">
								<a href="car-single.html">
									<img class="img-fluid" src="assets/images/car-3.jpg" alt="Toyta Corrola" srcset="assets/images/car-3.jpg 1x, assets/images/car-3@2x.jpg 2x"/>
								</a>
							</div>
							<div class="rn-car-item-info">
								<h3>
									<a href="car-single.html">Toyta Corrola</a>
								</h3>
								<p>Mauris semper nisl a massa convallis</p>
								<div class="rn-car-list-n-price">
									<ul>
										<li>Aliqua venandi mutat</li>
										<li>Plerisque nostrum</li>
										<li>Intellegimus percurri</li>
									</ul>
									<div class="rn-car-price-wrap">
										<a class="rn-car-price" href="car-single.html">
											<span class="rn-car-price-from">From</span>
											<span class="rn-car-price-format">
												<span class="rn-car-price-amount">$900</span>
												<span class="rn-car-price-per">/day</span>
											</span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- End Car Item-->

					</div> --}}

				</div>
			</div>
		</section>
		<!-- End Similar Cars-->

@endsection