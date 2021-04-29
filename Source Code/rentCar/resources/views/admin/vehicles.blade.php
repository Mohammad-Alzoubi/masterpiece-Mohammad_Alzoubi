@extends('layouts.masterAdmin')

@section('content')
<div class="section__content section__content--p30">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">Manage Vehicles</div>
          <div class="card-body">
            <div class="card-title">
              <h3 class="text-center title-2">Create Vehicles</h3>
            </div>
            <hr>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
              <p>{{ $message }}</p>
            </div>
            @endif
            <form action="vehicles" method="post" enctype="multipart/form-data">
              {{ csrf_field()}}
              <div class="form-group">
                <label for="name" class="control-label mb-1">Vehicle Title</label>
                <input name="name" type="text" class="form-control" value="{{ old('name') }}">
                @if ($errors->has('name'))
                <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                @endif
              </div>
              <div class="form-group">
                <label for="overview" class="control-label mb-1">Vehicle Overview</label>
                <input name="overview" type="text" class="form-control" value="{{ old('overview') }}">
                @if ($errors->has('overview'))
                <div class="alert alert-danger">{{ $errors->first('overview') }}</div>
                @endif
              </div>
              <div class="form-group">
                <label for="description" class="control-label mb-1" >Vehicle Description</label>
                <input name="description" type="text" class="form-control" value="{{ old('description') }} ">

                @if ($errors->has('description'))
                <div class="alert alert-danger">{{ $errors->first('description') }}</div>
                @endif
              </div>
              <div class="form-group">
                <label for="model" class="control-label mb-1">Model Year</label>
                <input name="model" type="number" class="form-control" value="{{old('model')}} ">
                @if ($errors->has('model'))
                <div class="alert alert-danger">{{ $errors->first('model') }}</div>
                @endif
              </div>
              <div class="form-group">
                <label for="image" class="control-label mb-1">Vehicle Image</label>
                <input name="image" type="file" class="form-control">
                @if ($errors->has('image'))
                <div class="alert alert-danger">{{ $errors->first('image') }}</div>
                @endif
              </div>
              <div class="form-group">
                <label for="price" class="control-label mb-1">Vehicle price</label>
                <input type="number" class="form-control" name="price" id="price" min="0" value="{{old('price')}}">
                @if ($errors->has('price'))
                <div class="alert alert-danger">{{ $errors->first('price') }}</div>
                @endif
              </div>
              <div class="form-group">
                <label for="discount" class="control-label mb-1">Vehicle Discount (%)</label>
                <input type="number" class="form-control" name="discount" id="discount" max=100 min=0 step="0.01" value=00 >
              </div>
              <br>
              <div class="form-group col-sm-6 custom-control-inline">
                <label for="brand">Select Brand</label>
                <select class="form-control" name="brand" id="brand">
                  <option disabled selected>Select Brand</option>
                  @foreach ($brands as $brand)
									<option value={{$brand->id}}>{{$brand->name}}</option>
									@endforeach
                </select>
                @if ($errors->has('brand'))
                <div class="alert alert-danger">{{ $errors->first('brand') }}</div>
                @endif
              </div>
              <div class="form-group col-sm-5 custom-control-inline">
                <label for="fuel">Fuel Type</label>
                <select class="form-control" name="fuel" id="fuel">
                  <option disabled selected>Select</option>
									<option value='petrol'>Petrol</option>
									<option value='diesel'>Diesel</option>
									<option value='CNG'>CNG</option>
                </select>
                @if ($errors->has('fuel'))
                <div class="alert alert-danger">{{ $errors->first('fuel') }}</div>
                @endif
              </div>
              <div class="form-group">
                <label for="transmission">Select Transmission Guide</label>
                <select class="form-control" name="transmission" id="transmission">
                  <option disabled selected>Select</option>
									<option value='Auto'>Auto</option>
									<option value='Manual'>Manual</option>
                </select>
                @if ($errors->has('transmission'))
                <div class="alert alert-danger">{{ $errors->first('transmission') }}</div>
                @endif
              </div>
              <div class="form-group">
                <label for="doors" class="control-label mb-1">Doors</label>
                <input type="number" class="form-control" name="doors" min="0" id="doors" value="{{old('doors')}}">
                @if ($errors->has('doors'))
                <div class="alert alert-danger">{{ $errors->first('doors') }}</div>
                @endif
              </div>
              <div class="form-group">
                <label for="Passengers" class="control-label mb-1">Passengers</label>
                <input type="number" class="form-control" name="passengers" min="0" id="Passengers" value="{{old('passengers')}}">
                @if ($errors->has('passengers'))
                <div class="alert alert-danger">{{ $errors->first('passengers') }}</div>
                @endif
              </div>
              <div class="form-group">
                <label for="Luggages" class="control-label mb-1">Luggages</label>
                <input type="number" class="form-control" name="luggages" min="0" id="Luggages" value="{{old('luggages')}}">

                @if ($errors->has('luggages'))
                  <div class="alert alert-danger">{{ $errors->first('luggages') }}</div>
                @endif
              </div>

              <div class="form-group">
                <label for="color">Color</label>
                <select class="form-control" name="color" id="color">
                  <option disabled selected>Select</option>
									<option value='red'>Red</option>
									<option value='black'>Black</option>
									<option value='white'>White</option>
									<option value='gray'>Gray</option>
                </select>
                @if ($errors->has('transmission'))
                <div class="alert alert-danger">{{ $errors->first('transmission') }}</div>
                @endif
              </div>

              <div class="form-group">
                <label for="">Status Vehicles</label>
                <select class="form-control" name="statusV" id="transmission">
                  {{-- <option disabled selected>Select</option> --}}
									<option value='1' selected>Available</option>
									<option value='0'>NotAvailable</option>
                </select>
              </div>
              <hr>


              <div class="section__content section__content--p30">
                <div class="container-fluid">
                <h4>ACCESSORIES</h4>
                <label class="custom-control custom-checkbox custom-control-inline col-sm-3">
                    <input type="checkbox" name="audio" value="1" class="custom-control-input"><span class="custom-control-label">Audio input</span>
                </label>
                <label class="custom-control custom-checkbox custom-control-inline col-sm-3">
                    <input type="checkbox" name="wheel_drive" value="1" class="custom-control-input"><span class="custom-control-label">All Wheel drive</span>
                </label>
                <label class="custom-control custom-checkbox custom-control-inline col-sm-3">
                    <input type="checkbox" name="gps" value="1" class="custom-control-input"><span class="custom-control-label">GPS Navigation</span>
                </label>
                <label class="custom-control custom-checkbox custom-control-inline col-sm-2">
                    <input type="checkbox" name="parking_sensors" value="1" class="custom-control-input"><span class="custom-control-label">Parking Sensors</span>
                </label>


                <label class="custom-control custom-checkbox custom-control-inline col-sm-3">
                    <input type="checkbox" name="bluetooth" value="1" class="custom-control-input"><span class="custom-control-label">Bluetooth</span>
                </label>
                <label class="custom-control custom-checkbox custom-control-inline col-sm-3">
                    <input type="checkbox" name="usb" value="1" class="custom-control-input"><span class="custom-control-label">USB input</span>
                </label>
                <label class="custom-control custom-checkbox custom-control-inline col-sm-3">
                    <input type="checkbox" name="safe" value="1" class="custom-control-input"><span class="custom-control-label">Safe</span>
                </label>
                <label class="custom-control custom-checkbox custom-control-inline col-sm-2">
                    <input type="checkbox" name="wifi" value="1" class="custom-control-input"><span class="custom-control-label">WI-FI</span>
                </label>


                <label class="custom-control custom-checkbox custom-control-inline col-sm-3">
                    <input type="checkbox" name="heated" value="1" class="custom-control-input"><span class="custom-control-label">Heated seats</span>
                </label>
                <label class="custom-control custom-checkbox custom-control-inline col-sm-3">
                    <input type="checkbox" name="fm_radio" value="1" class="custom-control-input"><span class="custom-control-label">FM Radio</span>
                </label>
                <label class="custom-control custom-checkbox custom-control-inline col-sm-3">
                    <input type="checkbox" name="conditioner" value="1" class="custom-control-input"><span class="custom-control-label">Air Conditioner</span>
                </label>
                <label class="custom-control custom-checkbox custom-control-inline col-sm-2">
                    <input type="checkbox" name="sunroof" value="1" class="custom-control-input"><span class="custom-control-label">Sunroof</span>
                </label>

                </div>
              </div>

              <hr>

              <div>
                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" name="submit">Add
                </button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>

{{-- *********************************************************** --}}
<div class="row">
  <!-- ============================================================== -->
  <!-- basic table  -->
  <!-- ============================================================== -->
  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
      <div class="card">
          <h5 class="card-header">Data Table</h5>
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-striped table-bordered first">
                      <thead>
                          <tr>
                            <th>#</th>
                            <th>Vehicle Title</th>
                            <th>Vehicle Image</th>
                            <th>Brand</th>
                            <th>Price Per day</th>
                            <th>Fuel Type</th>
                            <th>Model Year</th>
                            <th>Edit</th>
                            <th>Delete</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($vehicles as $vehicle)
                            
                          <tr>
                              <td>{{$vehicle->id}}</td>
                              <td>{{$vehicle->VehiclesTitle}}</td>
                              <td>
                                <div class="image img-cir img-40">
                                  <img src="{{asset("images/{$vehicle->VehicleImage}")}}">
                                </div>
                              </td>
                              <td>{{$vehicle->brand_name}}</td>
                              <td>{{$vehicle->price}} JOD</td>
                              <td>{{$vehicle->FuelType}}</td>
                              <td>{{$vehicle->ModelYear}}</td>
                              <td>
                                <a href="{{ route('vehicles.edit', $vehicle->id)}}" class="btn btn-warning">Edit</a>
                              </td>
                              <td>
                                <form action="{{ route('vehicles.destroy', $vehicle->id)}}" method="post">
                                  @csrf
                                  @method('DELETE')
                                  <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                              </td>
                          </tr>
                        @endforeach
                      </tbody>
                      <tfoot>
                          <tr>
                              <th>#</th>
                              <th>Vehicle Title</th>
                              <th>Vehicle Image</th>
                              <th>Brand</th>
                              <th>Price Per day</th>
                              <th>Fuel Type</th>
                              <th>Model Year</th>
                              <th>Edit</th>
                              <th>Delete</th>
                          </tr>
                      </tfoot>
                  </table>
              </div>
          </div>
      </div>
  </div>

  <!-- end basic table  -->
  <!-- ============================================================== -->
</div>
{{-- *********************************************************** --}}



  </div>
</div>
@endsection


{{-- <div class="row m-t-30">
  <div class="col-md-12">
    <!-- DATA TABLE-->
    <div class="table-responsive m-b-40">
      <table class="table table-borderless table-data3">
        <thead>
          <tr>
            <th>Name</th>
            <th>Image</th>
            <th>price</th>
            <th>category</th>
            <th>Description</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          @foreach($Products as $product)
          <tr>

            <td>{{$product->name}}</td>

            <td>
              <div class="image img-cir img-40">
                <img src="{{asset("images/{$product->image}")}}">

              </div>
            </td>
            @if ($product->discount !=0)
            <td>{{$product->price - ($product->discount * $product->price / 100)}} JOD</td>
            @else
            <td>{{$product->price }} JOD</td>
            
            @endif
            <td>{{$product->category_name}}</td>
            <td>{{$product->description}}</td>
            <td>
              <a href="{{ route('admin.products.edit', $product->id)}}" class="btn btn-warning">Edit</a>
            </td>
            <td>
              <form action="{{ route('admin.products.destroy', $product->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
              </form>
            </td>

          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- END DATA TABLE-->
  </div>
</div> --}}






