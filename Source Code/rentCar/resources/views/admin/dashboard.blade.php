@extends('layouts.masterAdmin')

@section('content')
<div class="row">

  <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
      <div class="card">
          <div class="card-body">
              <div class="d-inline-block">
                  <h5 class="text-muted">Total Admin</h5>
                  <h2 class="mb-0"> {{$admin}}</h2>
              </div>
              <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                  <i class="fa fas fa-user fa-fw fa-sm text-info"></i>
              </div>
          </div>
      </div>
  </div>
  <!-- end total views   -->

  <!-- total followers   -->
  <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
      <div class="card">
          <div class="card-body">
              <div class="d-inline-block">
                  <h5 class="text-muted">Total Customer</h5>
                  <h2 class="mb-0"> {{$customer}}</h2>
              </div>
              <div class="float-right icon-circle-medium  icon-box-lg  bg-primary-light mt-1">
                  <i class="fa fa-user fa-fw fa-sm text-primary"></i>
              </div>
          </div>
      </div>
  </div>
  <!-- end total followers   -->

  <!-- partnerships   -->
  <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
      <div class="card">
          <div class="card-body">
              <div class="d-inline-block">
                  <h5 class="text-muted">Total Brand</h5>
                  <h2 class="mb-0">{{$brand}}</h2>
              </div>
              <div class="float-right icon-circle-medium  icon-box-lg  bg-secondary-light mt-1">
                  <i class="fa fa-handshake fa-fw fa-sm text-secondary"></i>
              </div>
          </div>
      </div>
  </div>
  <!-- end partnerships   -->

  <!-- total earned   -->
  <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
      <div class="card">
          <div class="card-body">
              <div class="d-inline-block">
                  <h5 class="text-muted">Total Vehicles</h5>
                  <h2 class="mb-0"> {{$vehicle}}</h2>
              </div>
              <div class="float-right icon-circle-medium  icon-box-lg  bg-brand-light mt-1">
                  <i class="fas fa-car fa-fw fa-sm text-brand"></i>
              </div>
          </div>
      </div>
  </div>
  <!-- end total earned   -->
</div>
<!-- end widgets   -->
<div class="row">

  <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
      <div class="card">
          <div class="card-body">
              <div class="d-inline-block">
                  <h5 class="text-muted">Total Booking</h5>
                  <h2 class="mb-0"> {{$orderVehicle}}</h2>
              </div>
              <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                  <i class="fas fa-calendar-alt fa-fw fa-sm text-info"></i>
              </div>
          </div>
      </div>
  </div>
  <!-- end total views   -->

  <!-- total followers   -->
  <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
      <div class="card">
          <div class="card-body">
              <div class="d-inline-block">
                  <h5 class="text-muted">Total Message Contact</h5>
                  <h2 class="mb-0"> {{$contact}}</h2>
              </div>
              <div class="float-right icon-circle-medium  icon-box-lg  bg-primary-light mt-1">
                  <i class="fas fa-comment-alt fa-fw fa-sm text-primary"></i>
              </div>
          </div>
      </div>
      <div style="height: 210px;background:#EFEFF6"></div>
  </div>
  <!-- end total followers   -->

</div>
<!-- end widgets   -->
@endsection