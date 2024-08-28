
@extends('admin.layouts.main')

@section('title')
{{ __('admin/testimonial.add') }}
@endsection

@section('content')

<div class="bg-light p-5 rounded">
  <h2 class="fw-bold fs-2 mb-5 pb-2">{{ __('admin/testimonial.add') }}</h2>
  <form action="{{route('testimonials.store')}}" method="post" class="px-md-5" enctype="multipart/form-data">

    @csrf

    <div class="form-group mb-3 row">
      @error('name')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <label for="" class="form-label col-md-2 fw-bold text-md-end">{{ __('admin/testimonial.name') }}:</label>
      <div class="col-md-10">
        <input type="text" placeholder="{{ __('admin/testimonial.name') }}" name="name" class="form-control py-2" value="{{old('name')}}" />
      </div>
    </div>

    <hr>
    <div class="form-group mb-3 row">
      @error('job')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <label for="" class="form-label col-md-2 fw-bold text-md-end">{{ __('admin/testimonial.job') }}:</label>
      <div class="col-md-10">
        <input type="text" placeholder="{{ __('admin/testimonial.job') }}" name="job" class="form-control py-2" value="{{old('job')}}" />
      </div>
    </div>

    <hr>
    <div class="form-group mb-3 row">
      @error('image')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <label for="" class="form-label col-md-2 fw-bold text-md-end">{{ __('admin/testimonial.image') }}:</label>
      <div class="col-md-10">
        <input type="file"  name="image" class="form-control py-2" />
      </div>
    </div>

  <hr>
    <div class="form-group mb-3 row">
      @error('message')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <label for="" class="form-label col-md-2 fw-bold text-md-end">{{ __('admin/testimonial.message') }}:</label>
      <div class="col-md-10">
          <textarea name="message" placeholder="{{ __('admin/testimonial.message') }}" cols="30" rows="5"class="form-control py-2"  >{{old('message')}}</textarea>
      </div>
    </div>




    <div class="text-md-end">
      <button class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
        {{ __('admin/testimonial.add') }}
      </button>
    </div>
  </form>
</div>

@endsection
