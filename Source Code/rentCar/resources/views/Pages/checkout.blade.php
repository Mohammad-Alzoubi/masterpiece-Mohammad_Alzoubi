@extends('layouts.masterPage')

@section('contant')
		<!-- Page Title-->
		<div class="rn-page-title">
			<div class="rn-pt-overlayer"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="rn-page-title-inner">
							<h1>Checkout</h1>
							{{-- <p>Cras eros lorem, rhoncus ac risus sit amet, fringilla ultrices purus.</p> --}}
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Page Title-->

		<!-- Page Content-->
		<section class="rn-section">
			<div class="container mb-10">
				<form action="Checkout1" method="post" enctype="multipart/form-data">
					@csrf
					<div class="row">
						<div class="col-lg-6">
							<!-- Contact details-->
							<h2 class="rn-simple-title">Contact details</h2>
							<!-- Full Name-->
							<div class="row">
								<div class="col-md-6">
									<div class="rn-input-group">
										<label>First name</label>
										<p type="text" name="fName" value="">{{$customer->name}}</p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="rn-input-group">
										<label>address</label><span style="color:#F00">*</span>
										<input type="text" name='address' required>
										@if ($errors->has('address'))
											<div class="alert alert-danger">{{ $errors->first('address') }}</div>
										@endif
									</div>
								</div>
							</div>
							<!-- End Fullname-->

							<!-- Phone & Email-->
							<div class="row">
								<div class="col-md-6">
									<div class="rn-input-group">
										<label>E-mail</label>
										<p type="text" name="email" >{{$customer->email}}</p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="rn-input-group">
										<label>Phone</label><span style="color:#F00">*</span>
										{{-- <input type="number" value="{{$customer->phone}}" > --}}
										<input type="text" name='phone' value="{{$customer->phone}}" autocomplete="off"/>
										{{-- @if ($customer->phone =='Add phone number')
											<input type="text" name='phone' />
											@if ($errors->has('phone'))
											<div class="alert alert-danger">{{ $errors->first('phone') }}</div>
											@endif
											<input type="hidden" name="phoneRequired" value="1">
											
											@else
											<p>{{$customer->phone}}</p>
										@endif --}}
									</div>
								</div>
							</div>
							<!--End Phone & Email-->
							
							{{-- image --}}
							<div class="rn-input-group">
								<label>Image Driving License</label><span style="color:#F00">*</span>
								<input name="imageLicense" type="file" class="form-control" required>
							</div>

							<div class="rn-input-group">
								<label>Identity Image</label><span style="color:#F00">*</span>
								<input name="imageIdentity" type="file" class="form-control" required>
							</div>
							{{-- image --}}

							<!-- Address-->
							{{-- <div class="rn-input-group">
								<label>Street address</label>
								<input type="text">
							</div> --}}

							<!-- Country-->
							{{-- <div class="rn-input-group">
								<label>Country</label>
								<select>
									<option value="">Select country....</option>
									<option value="AF">Afghanistan</option>
									<option value="AX">Åland Islands</option>
									<option value="AL">Albania</option>
									<option value="DZ">Algeria</option>
									<option value="AS">American Samoa</option>
								</select>
							</div> --}}
							<!-- End Country-->

{{-- 							
							<div class="row">
								<div class="col-md-4">
									<div class="rn-input-group">
										<label>City</label>
										<input type="text">
									</div>
								</div>
								<div class="col-md-4">
									<div class="rn-input-group">
										<label>State</label>
										<select>
											<option value="">Select State...</option>
											<option value="AL">Alabama</option>
											<option value="AK">Alaska</option>
											<option value="AS">American Samoa</option>
											<option value="AZ">Arizona</option>
											<option value="AR">Arkansas</option>

										</select>
									</div>
								</div>
							</div> --}}
							<!-- End Address-->
							<div class="rn-input-group">
								<label>Order notes (optional)</label>
								<textarea></textarea>
							</div>
						</div>
						<!-- End Contact details-->
						{{--=====================================1 --}}
						<div class="col-lg-6">


							<!-- Checkout Form-->
							<div class="rn-checkout-items">

								<!-- Checkout Item-->
								<div class="rn-checkout-item">
									<div class="rn-checkout-item-thumb">
										<img class="img-fluid" src="{{asset("images/".$vehicle->VehicleImage)}}" alt="Cart Item" srcset="{{asset("images/".$vehicle->VehicleImage)}} 1x, {{asset("images/".$vehicle->VehicleImage)}} 2x"/>
									</div>
									<div class="rn-checkout-item-info">
										<div class="rn-checkout-item-title-price">
											<h2>
												<a href="">{{$vehicle->VehiclesTitle}}</a>
											</h2>
											<span>{{$vehicle->price}}/day</span>
										</div>
										<div class="rn-locations pr-0">
											<div class="rn-pickup-location pr-0">
												<div class="rn-location pr-0">{{$bookingDetails->pickup_location}}</div>
												<div class="rn-date-n-time pr-0">{{$bookingDetails->pickup_Date}}</div>
											</div>
											<div class="rn-drop-location pr-0">
												<div class="rn-location pr-0">{{$bookingDetails->drop_location}}</div>
												<div class="rn-date-n-time pr-0">{{$bookingDetails->drop_Date}}</div>
											</div>
										</div>
									</div>

									{{-- Save vehicleId , bookingId and price --}}
									<input type="hidden" name="vehicleId"  value="{{$vehicle->id}}">
									<input type="hidden" name="bookingId"  value="{{$bookingDetails->id}}">
									<input type="hidden" name="TotalPrice" value="{{$price}}">

									<div class="rn-checkout-total-container">
										<div class="rn-cart-total">Total: {{$price}}</div>
									</div>
								</div>
								<!-- End Checkout Item-->

								<div class="rn-checkout-total"><strong>Total Price:</strong>
									<span>{{$price}} JOD</span>
								</div>
								<br>

								<div id="paypal-button-container"></div>
								<!-- Payment Methods-->
								<div class="rn-payment-methods">
									{{-- <label class="rn-payment-method">
										<input type="radio" name="rn-payment">
										<span class="rn-payment-method-radio"></span>
										<span class="rn-payment-method-title">Credit/Debit Card</span>
									</label> --}}
									<label class="rn-payment-method">
										<input type="radio" name="rn-payment">
										<span class="rn-payment-method-radio"></span>
										<span class="rn-payment-method-title">Cash " When Arrived "</span>
									</label>
								</div>
								
								
									<label class="rn-payment-method">
										<input style="width: 15px;height:15px;" type="checkbox" id="checkme"/>
										<span class="rn-payment-method-checkbox"></span>
										<span style="" class="rn-payment-method-title">I Agree with <span style="text-decoration: underline;">Terms&Conditions</span> and <span style="text-decoration: underline;">Privacy Policy</span></span>
									</label>
									<br><br>


								<div class="text-right">
									<input class="btn btn-main btn-lg btn-shadow" name="sendNewSms" type="submit" disabled="disabled" id="sendNewSms" value="Continue to Booking 💪">
									{{-- <a href="my-account"> <input type="submit" value="Place order" /></a> --}}
								</div>
								
							</div>
							<!-- End Checkout Form-->

						</div>
					</div>
				</form>
			</div>
		</section>
		<!-- End Page Content-->

		<script>
var checker = document.getElementById('checkme');
var sendbtn = document.getElementById('sendNewSms');
 // when unchecked or checked, run the function
checker.onchange = function(){
	if(this.checked){
		sendbtn.disabled = false;
	} else {
		sendbtn.disabled = true;
	}
}
		</script>
{{-- ********************************************************************** --}}    


    <script src="https://www.paypal.com/sdk/js?client-id=test&currency=USD"></script>
    <script>
        paypal.Buttons({
            style: {
                color:  'blue',
                shape:  'pill',
                label:  'pay',
                height: 40
            }
        }).render('#paypal-button-container');
    </script>





{{-- ********************************************************************** --}}    

    {{-- <script src="https://www.paypal.com/sdk/js?client-id=test&currency=USD"></script>
    <script>
        paypal.Buttons({
            style: {
                layout: 'horizontal'
            }
        }).render('#paypal-button-container');
    </script> --}}

@endsection