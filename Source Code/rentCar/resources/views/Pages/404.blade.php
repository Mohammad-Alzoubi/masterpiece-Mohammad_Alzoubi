@extends('layouts.masterPage')

@section('contant')
		<!-- Page Title-->
		<div class="rn-page-title">
			<div class="rn-pt-overlayer"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="rn-page-title-inner">
							<h1>Page Not Found</h1>
							<p>Cras eros lorem, rhoncus ac risus sit amet, fringilla ultrices purus.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Page Title-->

		<!-- Page Not Found-->
		<section class="rn-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<!-- 404 Text-->
						<div class="rn-404-contsiner">
							<img class="img-fluid" src="{{asset('assets/images/404.svg')}}" alt="">
							<div class="rn-404-info">
								<h2>Opps! Something wrong.</h2>
								<p>404 Error page not found! Please go back to 
									<a href="/">Home Page</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Page Not Found-->

@endsection