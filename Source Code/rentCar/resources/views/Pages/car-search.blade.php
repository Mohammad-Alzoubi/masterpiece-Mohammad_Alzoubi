@extends('layouts.masterPage')

@section('contant')
		<!-- Page Title-->
		<div class="rn-page-title">
			<div class="rn-pt-overlayer"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="rn-page-title-inner">
							<h1>Car Search</h1>
							{{-- <p>Cras eros lorem, rhoncus ac risus sit amet, fringilla ultrices purus.</p> --}}
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Page Title-->

		<!-- Car Results-->
		<div class="rn-section rn-car-search-results">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">

						<!-- Car Search Filters-->
						{{-- {{ route('search') }} --}}
						<form action="{{ route('car-search') }}" method="GET">
							<div class="rn-car-search-filters">
								<div class="rn-car-search-filter-item">
									<label>Car Brand:</label>
									<select name="brand">
										<option value="Any" disabled selected>Any</option>
										@foreach ($brands as $brand)
										<option value={{$brand->id}}>{{$brand->name}}</option>
										@endforeach
									</select>
								</div>
								<div class="rn-car-search-filter-item">
									<label>Passengers:</label>
									<select name="passengers">
										<option value="Any" disabled selected>Any</option>
										@foreach ($passengers as $passenger)
											<option value="{{$passenger->Passengers}}">{{$passenger->Passengers}}</option>
										@endforeach
									</select>
								</div>
								<div class="rn-car-search-filter-item">
									<label>Color:</label>
									<ul class="rn-car-color-filter">
										<li>
											<label>
												<input type="checkbox" value="silver" name="color">
												<span class="rn-color-silver"></span>
											</label>
										</li>
										<li>
											<label>
												<input type="checkbox" value="black" name="color">
												<span class="rn-color-black"></span>
											</label>
										</li>
										<li>
											<label>
												<input type="checkbox" value="white" name="color">
												<span class="rn-color-white"></span>
											</label>
										</li>
										<li>
											<label>
												<input type="checkbox" value="red" name="color">
												<span class="rn-color-red"></span>
											</label>
										</li>
										<li>
											<label>
												<input type="checkbox" value="blue" name="color">
												<span style="background: blue"></span>
											</label>
										</li>
									</ul>
								</div>
								<div class="rn-car-search-filter-item rn-csf-item-last">
									<label>Sort by:</label>
									<select name="sort">
										<option value="Default" disabled selected>Default</option>
										<option value="1">Price: High to Low</option>
										<option value="0">Price: Low to High</option>
									</select>
									<button style="background: #00B92B; color:#FFF;border:#FFF;" type="submit">Search</button>
								</div>
							</div>
						</form>
						<!-- End Car Search Filters-->

						<!-- Car Search Item-->
						@foreach ($vehicles as $vehicle)
						
							<div class="rn-car-search-item">
								<div class="rn-car-search-item-thumb">
									<a href="singleCar/{{$vehicle['id']}}">
										<img class="img-fluid" src="{{asset("images/".$vehicle->VehicleImage)}}" alt="" srcset="{{asset("images/".$vehicle->VehicleImage)}} 1x, {{asset("images/".$vehicle->VehicleImage)}} 2x"/>
									</a>
								</div>
								
								<div class="rn-car-search-item-info">
									<h2 class="rn-car-search-item-title">
										<a href="singleCar/{{$vehicle['id']}}">{{$vehicle->VehiclesTitle}}</a>
									</h2>
									<div class="rn-car-reviews">
										<div class="rn-car-stars">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="far fa-star"></i>
										</div>
										<a href="#">3 Reviews</a>
										@if (!$vehicle->status)
											<a style="background: red;color:#FFF">
												NotAvailable
											</a>
										@endif
										
									</div>
									<p>{{$vehicle->VehiclesOverview}}</p>
									<div class="rn-car-meta">
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
									<a class="rn-car-more-info" href="singleCar/{{$vehicle['id']}}">More Information</a>
								</div>
								
								<div class="rn-car-search-item-pricing">
									<div class="rn-car-total-price">
										<span>{{$vehicle->price}}</span>/day
									</div>
									<a class="btn btn-main btn-lg btn-shadow" href="singleCar/{{$vehicle['id']}}">Book Now</a>
								</div>
							</div>
							
						@endforeach
						<!-- End Car Search Item-->

						<!-- Load More Cars-->
						<div class="text-center">
							<a class="btn btn-lg btn-outline-light mb-40" href="#">Load More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Car Results-->
		@endsection