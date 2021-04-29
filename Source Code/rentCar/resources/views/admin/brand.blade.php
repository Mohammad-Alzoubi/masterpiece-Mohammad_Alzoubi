@extends('layouts.masterAdmin')

@section('content')
<div class="section__content section__content--p30">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">Manage Brand</div>
          <div class="card-body">
            <div class="card-title">
              <h3 class="text-center title-2">Create Brand</h3>
            </div>

            @if ($message = Session::get('success'))
            <div class="alert alert-success">
              <p>{{ $message }}</p>
            </div>
            @endif
            <form action="brand" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="name" class="control-label mb-1">Brand Name</label>
                <input name="name" type="text" class="form-control">
                @if ($errors->has('name'))
                <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                @endif
              </div>
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
                                <th>ID</th>
                                <th>Name</th>
                                <th>created_at</th>
                                <th>Edit</th>
                                <th>Delete</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach ($brands as $brand)
                              <tr>
                                <td>{{$brand->id}}</td>
                                <td>{{$brand->name}}</td>
                                <td>{{$brand->created_at}}</td>
                                <td>
                                  <a href="{{ route('brand.edit', $brand->id)}}" class="btn btn-warning">Edit</a>
                                </td>
                                <td>
                                  <form action="{{ route('brand.destroy', $brand->id)}}" method="post">
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
                                  <th>ID</th>
                                  <th>Name</th>
                                  <th>created_at</th>
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