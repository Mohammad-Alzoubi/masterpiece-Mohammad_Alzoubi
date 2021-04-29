@extends('layouts.masterAdmin')

@section('content')

<div class="section__content section__content--p30">
  <div class="container-fluid">
    {{-- *********************************************************** --}}
    <div class="row">
      <!-- ============================================================== -->
      <!-- basic table  -->
      <!-- ============================================================== -->
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card">
              <h5 class="card-header">Manage Bookings</h5>
              <div class="card-body">
                  <div class="table-responsive">
                      <table class="table table-striped table-bordered first">
                          <thead>
                              <tr>
                                <th>ID</th>
                                <th>Vehicle image</th>
                                <th>Vehicle Name</th>
                                <th>From Date</th>
                                <th>To Date</th>
                                <th>Price</th>
                                <th>Customer Name</th>
                                <th>Booking Time</th>
                                <th>Status</th>
                                <th>Action</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach ($bookings as $booking)
                              <tr>
                                  <td>{{$booking->id}}</td>
                                  <td>
                                    <div class="image img-cir img-40">
                                      <img src="{{asset("images/{$booking->VehicleImage}")}}">
                                    </div>
                                  </td>
                                  <td>{{$booking->vehiclesName}}</td>
                                  <td>{{$booking->FromDate}}</td>
                                  <td>{{$booking->ToDate}}</td>
                                  <td>{{$booking->total_price}}</td>
                                  <td>{{$booking->customerName}}</td>
                                  <td>{{$booking->created_at}}</td>
                                  <td>{{$booking->status}}</td>
                                  <td>
                                    <select id="{{$booking->id}}" name="status" class="form-control"
                                      onchange="statusChange({{$booking->id}})">
                                      <option value="Not Confirmed yet">Not Confirmed yet</option>
                                      <option value="Confirmed" {{$booking->status == "Confirmed" ? "selected" : ""}}>Confirmed</option>
                                      <option value="Cancelled" {{$booking->status == "Cancelled" ? "selected" : ""}}>Cancel</option>
                                    </select>
                                  </td>
                              </tr>
                            @endforeach
                          </tbody>
                          <tfoot>
                              <tr>
                                <th>ID</th>
                                <th>Vehicle image</th>
                                <th>Vehicle Name</th>
                                <th>From Date</th>
                                <th>To Date</th>
                                <th>Price</th>
                                <th>Customer Name</th>
                                <th>Booking Time</th>
                                <th>Status</th>
                                <th>Action</th>
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

<script>
  function statusChange (id){
    var e = document.getElementById(id);
    var status = e.value;
    alert(`Do you really want to ${status} this Booking`)
    document.location.href = `/admin/manage-bookings/${id}/${status}`;
  }

</script>


@endsection