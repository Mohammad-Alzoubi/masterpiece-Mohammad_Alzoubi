@extends('layouts.masterAdmin')

@section('content')

<div class="section__content section__content--p30">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">Manage Admin</div>
          <div class="card-body">
            <div class="card-title">
              <h3 class="text-center title-2">Create Admin</h3>
            </div>
            <hr>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
              <p>{{ $message }}</p>
            </div>
            @endif
            <form action="admin" method="post" enctype="multipart/form-data">

              {{ csrf_field() }}
              <div class="form-group">
                <label for="name" class="control-label mb-1">Admin Name</label>
                <input name="name" type="text" class="form-control" value="{{ old('name') }}">
                @if ($errors->has('name'))
                <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                @endif
              </div>
              <div class="form-group">
                <label for="email" class="control-label mb-1">Admin Email</label>
                <input name="email" type="email" class="form-control" value="{{ old('email') }}">
                @if ($errors->has('email'))
                <div class="alert alert-danger">{{ $errors->first('email') }}</div>
                @elseif($message = Session::get('failed'))
                <p class="text-danger">{{ $message }}</p>
                @endif

              </div>
              <div class="form-group">
                <label for="password" class="control-label mb-1">Admin Password</label>
                <input name="password" type="password" class="form-control" value="{{ old('password') }}">
                @if ($errors->has('password'))
                <div class="alert alert-danger">{{ $errors->first('password') }}</div>
                @endif
              </div>
              <div class="form-group">
                <label for="image" class="control-label mb-1">Admin Image</label>
                <input name="image" type="file" class="form-control">
                @if ($errors->has('image'))
                <div class="alert alert-danger">{{ $errors->first('image') }}</div>
                @endif
              </div>
              <div>
                <button id="payment-button" style="background: #00D231" type="submit" class="btn btn-lg btn-info btn-block" name="submit">Add
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    {{-- *********************************************************** --}}
    <!-- Start Table  -->
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card">
              <h5 class="card-header">Data Table</h5>
              <div class="card-body">
                  <div class="table-responsive">
                      <table class="table table-striped table-bordered first">
                          <thead>
                              <tr>
                                <th>ID</th>
                                <th>Email</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Edit</th>
                                <th>Delete</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach ($admins as $admin)
                              <tr>
                                  <td>{{$admin->id}}</td>
                                  <td>{{$admin->email}}</td>
                                  <td>
                                    <div class="image img-cir img-40 ">
                                      <img src="{{asset("images/{$admin->image}")}}">
                                    </div>
                                  </td>
                                  <td>{{$admin->name}}</td>
                                  <td>
                                    <a href="{{ route('admin.edit', $admin->id)}}" class="btn btn-warning">Edit</a>
                                  </td>
                                  <td>
                                    <form action="{{ route('admin.destroy', $admin->id)}}" method="post">
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
                                <th>Email</th>
                                <th>Image</th>
                                <th>Name</th>
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
  </div>
  {{-- *********************************************************** --}}
  </div>
</div>
@endsection
