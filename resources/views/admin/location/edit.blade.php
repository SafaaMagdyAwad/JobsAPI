

@extends('admin.layouts.main')

@section('title')
{{ __('admin/location.edit') }}
@endsection

@section('content')

<div class="bg-light p-5 rounded">
  <h2 class="fw-bold fs-2 mb-5 pb-2">{{ __('admin/location.edit') }}</h2>
  <form action="{{route('location.update',[$location['id']])}}" method="post" class="px-md-5" >
    @csrf
    @method('put')


    <hr>
    <div class="form-group mb-3 row">
      @error('location')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <label for="" class="form-label col-md-2 fw-bold text-md-end">{{ __('admin/location.location') }}:</label>
      <div class="col-md-10">
        <input type="text" placeholder="{{ __('admin/location.location') }}" name="location" class="form-control py-2" value="{{old('location',$location->location)}}" />
      </div>
    </div>





    <div class="text-md-end">
      <button class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
        {{ __('admin/location.edit') }}
      </button>
    </div>
  </form>
</div>

@endsection
