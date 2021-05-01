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
              <h3 class="text-center title-2">Edit Brand</h3>
            </div>

            <form action="{{ route('brand.update', $brand->id) }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              @method('PATCH')
              <div class="form-group">
                <label for="name" class="control-label mb-1">Brand Name</label>
                <input name="name" type="text" class="form-control" value="{{ $brand-> name }}">
                @if ($errors->has('name'))
                <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                @endif
              </div>
              <div>
                <button id="payment-button" style="background: #00D231" type="submit" class="btn btn-lg btn-info btn-block" name="submit">Update
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