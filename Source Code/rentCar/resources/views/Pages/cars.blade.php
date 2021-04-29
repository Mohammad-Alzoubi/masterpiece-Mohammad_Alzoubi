@extends('layouts.masterPage')

@section('contant')

		<!-- Page Title-->
		<div class="rn-page-title">
			<div class="rn-pt-overlayer"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="rn-page-title-inner">
							<h1>All Cars</h1>
							<p>Cras eros lorem, rhoncus ac risus sit amet, fringilla ultrices purus.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Page Title-->

		<!-- Cars-->
		<section class="rn-section rn-car-list">
			<div class="container">
				<div class="row">
					<!-- Car Item-->
					@foreach ($vehicles3 as $vehicle)
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
									<a href="singleCar/{{$vehicle->id}}">
										<img class="img-fluid" src="{{asset("images/".$vehicle->VehicleImage)}}" alt="Black Sedan" srcset="{{asset("images/".$vehicle->VehicleImage)}} 1x, assets/images/car-1@2x.jpg 2x"/>
									</a>
								</div>
								<div class="rn-car-item-info">
									<h3>
										<a href="singleCar/{{$vehicle->id}}">{{$vehicle->VehiclesTitle}}</a>
									</h3>
									<p>{{$vehicle->VehiclesOverview}}</p>
									<div class="rn-car-list-n-price">
										<ul>
											<li>{{$vehicle->ModelYear}}</li>
											<li>{{$vehicle->TransmissionGuide}}</li>
											<li>{{$vehicle->FuelType}}</li>
										</ul>
										<div class="rn-car-price-wrap">
											<a class="rn-car-price" href="singleCar/{{$vehicle->id}}">
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
					@endforeach
					<!-- End Car Item-->


					<div class="col-lg-12 d-none d-lg-block">
						<a href="#">
							<img class="img-fluid mb-50" src="assets/images/big-banner.png" alt="banner" srcset="assets/images/big-banner.png 1x, assets/images/big-banner@2x.png 2x">
						</a>
					</div>


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
									<a href="singleCar/{{$vehicle->id}}">
										<img class="img-fluid" src="{{asset("images/".$vehicle->VehicleImage)}}" alt="Black Sedan" srcset="{{asset("images/".$vehicle->VehicleImage)}} 1x, assets/images/car-1@2x.jpg 2x"/>
									</a>
								</div>
								<div class="rn-car-item-info">
									<h3>
										<a href="singleCar/{{$vehicle->id}}">{{$vehicle->VehiclesTitle}}</a>
									</h3>
									<p>{{$vehicle->VehiclesOverview}}</p>
									<div class="rn-car-list-n-price">
										<ul>
											<li>{{$vehicle->ModelYear}}</li>
											<li>{{$vehicle->TransmissionGuide}}</li>
											<li>{{$vehicle->FuelType}}</li>
										</ul>
										<div class="rn-car-price-wrap">
											<a class="rn-car-price" href="singleCar/{{$vehicle->id}}">
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
					@endforeach
					<!-- End Car Item-->
					
				</div>




				{{-- {{$vehiclePaginate->links()}} --}}


				<div class="row">
					<div style="display: flex;justify-content:center;" class="col-lg-12">
					<div style="" class="rn-pagination rn-pagination-center">
						
						{{-- <nav class="rn-pagination rn-pagination-center">
							<ul>
								<li>
									<a href="#">
										<i class="fas fa-angle-left"></i>
									</a>
								</li>
								<li>
									<a class="rn-active" href="#">1</a>
								</li>
								<li>
									<a href="#">2</a>
								</li>
								<li>
									<a href="#">3</a>
								</li>
								<li>
									<a href="#">4</a>
								</li>
								<li>
									<a href="#">
										<i class="fas fa-angle-right"></i>
									</a>
								</li>
							</ul>
						</nav> --}}
						<!-- End Cars Pagination-->

						{{$vehiclePaginate->links()}}
					</div>
					</div>
				</div>


			</div>
		</section>
		<!-- End Cars-->

@endsection