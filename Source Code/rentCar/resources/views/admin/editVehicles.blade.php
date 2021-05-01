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
              <h3 class="text-center title-2">Updated Vehicles</h3>
            </div>
            <hr>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
              <p>{{ $message }}</p>
            </div>
            @endif
            
            <form action="{{ route('vehicles.update', $vehicle->id) }}" method="post" enctype="multipart/form-data">
              {{ csrf_field()}}
              @method('PATCH')
              <div class="form-group">
                <label for="name" class="control-label mb-1">Vehicle Title</label>
                <input name="name" type="text" class="form-control" value="{{ $vehicle->VehiclesTitle }}">
                @if ($errors->has('name'))
                <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                @endif
              </div>
              <div class="form-group">
                <label for="overview" class="control-label mb-1">Vehicle Overview</label>
                <input name="overview" type="text" class="form-control" value="{{ $vehicle->VehiclesOverview }}">
                @if ($errors->has('overview'))
                <div class="alert alert-danger">{{ $errors->first('overview') }}</div>
                @endif
              </div>
              <div class="form-group">
                <label for="description" class="control-label mb-1">Vehicle Description</label>
                <input name="description" type="text" class="form-control" value="{{ $vehicle->VehicleDescription }}">
              </div>
              <div class="form-group">
                <label for="model" class="control-label mb-1">Model Year</label>
                <input name="model" type="number" class="form-control" value="{{ $vehicle->ModelYear}}">
              </div>
              <div class="form-group">
                <label for="image" class="control-label mb-1">Vehicle Image</label>
                <input name="image" type="file" class="form-control" >
              </div>
              <div class="form-group">
                <label for="price" class="control-label mb-1">Vehicle price</label>
                <input type="number" class="form-control" name="price" id="price" min="0" value="{{ $vehicle->price}}">
              </div>
              <div class="form-group">
                <label for="discount" class="control-label mb-1">Vehicle Discount (%)</label>
                <input type="number" class="form-control" name="discount" id="discount" max=100 min=0 step="0.01" value="{{ $vehicle->discount}}" >

              </div>
              <br>
              <div class="form-group col-sm-6 custom-control-inline">
                <label for="brand">Select Brand</label>
                <select class="form-control" name="brand" id="brand" value="{{ $vehicle->brand_name }}">
                  <option disabled selected>Select Brand</option>
                  @foreach ($brands as $brand)
									<option value={{$brand->id}}>{{$brand->name}}</option>
									@endforeach
                  {{-- <option value="{{ $brands->id }}" selected>{{ $brand->name}}</option> --}}
                </select>
              </div>
              <div class="form-group col-sm-5 custom-control-inline">
                <label for="fuel">Fuel Type</label>
                <select class="form-control" name="fuel" id="fuel" value="{{ $vehicle->FuelType }}">
                  <option value="{{ $vehicle->FuelType }}" selected>{{ $vehicle->FuelType }}</option>
									<option value='petrol'>Petrol</option>
									<option value='diesel'>Diesel</option>
									<option value='CNG'>CNG</option>
                </select>
              </div>
              <div class="form-group">
                <label for="transmission">Select Transmission Guide</label>
                <select class="form-control" name="transmission" id="transmission" value="">
                  {{-- <option disabled selected>Select</option> --}}
                  <option value="{{ $vehicle->TransmissionGuide }}" selected>{{ $vehicle->TransmissionGuide }}</option>
									<option value='Auto'>Auto</option>
									<option value='Manual'>Manual</option>
                </select>
              </div>
              <div class="form-group">
                <label for="doors" class="control-label mb-1">Doors</label>
                <input type="number" class="form-control" name="doors" min="0" id="doors" value="{{ $vehicle->Doors}}">
              </div>
              <div class="form-group">
                <label for="Passengers" class="control-label mb-1">Passengers</label>
                <input type="number" class="form-control" name="passengers" min="0" id="Passengers" value="{{ $vehicle->Passengers}}">
              </div>
              <div class="form-group">
                <label for="Luggages" class="control-label mb-1">Luggages</label>
                <input type="number" class="form-control" name="luggages" min="0" id="Luggages" value="{{ $vehicle->Luggages}}">
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
                    <input type="checkbox" name="audio"  class="custom-control-input"><span class="custom-control-label">Audio input</span>
                </label>
                <label class="custom-control custom-checkbox custom-control-inline col-sm-3">
                    <input type="checkbox" name="wheel_drive"  class="custom-control-input"><span class="custom-control-label">All Wheel drive</span>
                </label>
                <label class="custom-control custom-checkbox custom-control-inline col-sm-3">
                    <input type="checkbox" name="gps"  class="custom-control-input"><span class="custom-control-label">GPS Navigation</span>
                </label>
                <label class="custom-control custom-checkbox custom-control-inline col-sm-2">
                    <input type="checkbox" name="parking_sensors"  class="custom-control-input"><span class="custom-control-label">Parking Sensors</span>
                </label>


                <label class="custom-control custom-checkbox custom-control-inline col-sm-3">
                    <input type="checkbox" name="bluetooth"  class="custom-control-input"><span class="custom-control-label">Bluetooth</span>
                </label>
                <label class="custom-control custom-checkbox custom-control-inline col-sm-3">
                    <input type="checkbox" name="usb"  class="custom-control-input"><span class="custom-control-label">USB input</span>
                </label>
                <label class="custom-control custom-checkbox custom-control-inline col-sm-3">
                    <input type="checkbox" name="safe"  class="custom-control-input"><span class="custom-control-label">Safe</span>
                </label>
                <label class="custom-control custom-checkbox custom-control-inline col-sm-2">
                    <input type="checkbox" name="wifi"  class="custom-control-input"><span class="custom-control-label">WI-FI</span>
                </label>


                <label class="custom-control custom-checkbox custom-control-inline col-sm-3">
                    <input type="checkbox" name="heated"  class="custom-control-input"><span class="custom-control-label">Heated seats</span>
                </label>
                <label class="custom-control custom-checkbox custom-control-inline col-sm-3">
                    <input type="checkbox" name="fm_radio"  class="custom-control-input"><span class="custom-control-label">FM Radio</span>
                </label>
                <label class="custom-control custom-checkbox custom-control-inline col-sm-3">
                    <input type="checkbox" name="conditioner"  class="custom-control-input"><span class="custom-control-label">Air Conditioner</span>
                </label>
                <label class="custom-control custom-checkbox custom-control-inline col-sm-2">
                    <input type="checkbox" name="sunroof"  class="custom-control-input"><span class="custom-control-label">Sunroof</span>
                </label>

                </div>
              </div>
              <hr>

              <div>
                <button id="payment-button" style="background: #00D231" type="submit" class="btn btn-lg btn-info btn-block" name="submit">Updated
                </button>
              </div>

            </form>
          </div>
        </div>
      </div>
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






