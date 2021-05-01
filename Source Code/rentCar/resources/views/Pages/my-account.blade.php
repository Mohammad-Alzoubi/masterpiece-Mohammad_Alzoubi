@extends('layouts.masterPage')

@section('contant')
<!-- Page Title-->
<div class="rn-page-title">
    <div class="rn-pt-overlayer"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="rn-page-title-inner">
                    <h1>my-account</h1>
                    {{-- <p>Cras eros lorem, rhoncus ac risus sit amet, fringilla ultrices purus.</p> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title-->

<br><br><br>
<section class="main_content_area my_account ptb-100">
  <div class="container">
    <div class="account_dashboard">
        <div class="row">
            <div class="col-sm-12 col-md-3 col-lg-3">
              <!-- Nav tabs -->
              <div class="dashboard_tab_button ">
                  <ul role="tablist" class="nav flex-column dashboard-list rn-navbar">
                    <li><a href="#Profile" style="color:#00D231" data-toggle="tab" class="nav-link active bg-light border mt-2">Profile</a></li>
                    <li> <a href="#orders"  style="color:#00D231" data-toggle="tab" class="nav-link bg-light border mt-2">My Booking</a></li>
                    <li><a href="#account-details"  style="color:#00D231" data-toggle="tab" class="nav-link bg-light border mt-2">Edit Profile</a></li>
                    <li><a href="logout" style="color:#00D231"  class="nav-link bg-light border mt-2">logout</a></li>
                  </ul>
              </div>
            </div>
            <div class="col-sm-12 col-md-9 col-lg-9">
              <!-- Tab panes -->
              <div class="tab-content Profile_content">
                <div class="tab-pane fade show active" id="Profile">
                    <h3 class="ml-5">Profile </h3>
                    <br>
                    <!--administrator start-->
                    <div class="administrator">
                      <div class="administrator_thumb float-left">
                          <img style="width: 180px; height: 133px" src="{{asset("images/{$customer->image}")}}" alt="">
                      </div>
                      <div class="administrator_contnet">
                          <p>Name : <span>{{$customer->name}}</span></p>
                          <p>Email: <span>{{$customer->email}}</span></p>
                          <p>Phone: <span>{{$customer->phone}}</span></p>
                      </div>
                    </div>
                    <!--administrator end-->
                </div>

@if (count($vehicle))
                <div class="tab-pane fade" id="orders">
                    <h3>My Booking</h3>
                    @foreach ($vehicle as $vehicle)
                        
                    
                    <div class="lion_table_area table-responsive">
                      <table class="table">
                          <thead>
                            <tr>
                                <th>Vehicle Name</th>
                                <th>Image</th>
                                <th>From Date</th>
                                <th>To Date</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td>{{$vehicle->vehiclesName}}</td>
                                <td> <img height='100' src="{{asset("images/{$vehicle->VehicleImage}")}}" alt="image booking"></td>
                                <td>{{$vehicle->FromDate}}</td>
                                <td>{{$vehicle->ToDate}}</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="subtableCon">
                                  <table class="subtable">
                                      <tr>
                                        <th>Summary</th>
                                        <td>Status: {{$vehicle->status}}</td>
                                        <td>Total Price: {{$vehicle->total_price}} JOD</td>
                                      </tr>
                                  </table>
                                </td>
                            </tr>
                          </tbody>
                      </table>
                    </div>
                    @endforeach
                </div>
                @else
                <div class="tab-pane fade" id="orders">
                  <h3>booking emty...</h3>
                </div>
@endif
                <div class="tab-pane fade" id="account-details">
                    <h3>Edit Profile </h3>
                    <div class="login">
                      <div class="login_form_container">
                          <div class="account_login_form">
                              <form method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <label>Name</label>
                                <input type="text" name="name" value="{{$customer->name}}">
                                @if ($errors->has('name'))
                                <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                                @endif
                                <label>Email</label>
                                <input type="email" name="email" value="{{$customer->email}}">
                                @if ($errors->has('email'))
                                <div class="alert alert-danger">{{ $errors->first('email') }}</div>
                                @endif
                                <br><br>
                                <label>Image</label>
                                <input type="file" name="image"><br><br>
                                <label>Phone</label>
                                <input type="text" name="phone" value="{{$customer->phone}}">
                                @if ($errors->has('phone'))
                                <div class="alert alert-danger">{{ $errors->first('phone') }}</div>
                                @endif
                                {{-- <button class="btn btn-danger rounded" name="submit" type="submit">Save</button> --}}
                                <br><br>
                                <button class="btn btn-main btn-lg btn-shadow btn-block" type="submit">
                                  Save
                                </button>
                              </form>
                          </div>
                        </div>
                    </div>
                </div>
              </div>
          </div>
        </div>
    </div>
  </div>
</section>
<br><br><br>
@endsection