
@extends('admin.layouts.main')

@section('title')
All Locations
@endsection

@section('content')

<div class="bg-light p-5 rounded">
  <h2 class="fw-bold fs-2 mb-5 pb-2">edit testimonial</h2>
  <form action="{{route('testimonials.update',[$testimonial['id']])}}" method="post" class="px-md-5" enctype="multipart/form-data">
    @csrf
    @method('put')
    <input type="hidden" name="old_image" value="{{ $testimonial->image }}">
    <div class="form-group mb-3 row">
      @error('name')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <label for="" class="form-label col-md-2 fw-bold text-md-end">Name:</label>
      <div class="col-md-10">
        <input type="text" placeholder="name" name="name" class="form-control py-2" value="{{old('name',$testimonial->name)}}" />
      </div>
    </div>

    <hr>
    <div class="form-group mb-3 row">
      @error('job')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <label for="" class="form-label col-md-2 fw-bold text-md-end">job:</label>
      <div class="col-md-10">
        <input type="text" placeholder="job" name="job" class="form-control py-2" value="{{old('job',$testimonial->job)}}" />
      </div>
    </div>

    <hr>
    <div class="form-group mb-3 row">
        @error('image')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="" class="form-label col-md-2 fw-bold text-md-end">Image:</label>
        <div class="col-md-10">
          <img src="{{ asset('assets/images/testimonials/'.$testimonial->image) }}"  width="50 px" height="100 px">
        <input type="file"  name="image" class="form-control py-2" />
      </div>
    </div>

  <hr>
    <div class="form-group mb-3 row">
      @error('message')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <label for="" class="form-label col-md-2 fw-bold text-md-end">message:</label>
      <div class="col-md-10">
          <textarea name="message" placeholder="Enter message" cols="30" rows="5"class="form-control py-2"  >{{old('message',$testimonial->message)}}</textarea>
      </div>
    </div>





    <div class="text-md-end">
      <button class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
        Edit Testimonial
      </button>
    </div>
  </form>
</div>

@endsection
