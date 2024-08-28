
@extends('admin.layouts.main')

@section('title')
{{ __('admin/testimonial.show') }}
@endsection

@section('content')


<div class="bg-light p-5 rounded">
  <div class="card bg-light border-0">
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6 col-10 position-relative overflow-hidden">
        <img src="{{asset('assets/images/testimonials/'.$testimonial->image)}}"
          alt="" class="card-img"
          style="position: absolute; margin: auto; top: 50%; transform: translateY(-50%); width: 100%;height: 100%; object-fit: cover;" />
      </div>
      <div class="col-lg-8 col-md-6 col-12 card-body">
        <div class="mb-4 text-center py-2">
          <h2 class="fw-bold bg-light card-header">{{$testimonial->name}}</h2>
        </div>
        <div class="mb-4">
          <p class="card-text">
            <span class="fw-bold">{{ __('admin/testimonial.job') }}:</span> {{$testimonial->job}}
          </p>
        </div>
        <div class="mb-4">
          <p class="card-text">
            <span class="fw-bold">{{ __('admin/testimonial.message') }}:</span> {{$testimonial->message}}
          </p>
        </div>


        <div class="text-md-end">
          <a href="{{route('testimonials.index')}}" class="btn mt-4 btn-primary text-white fs-5 fw-bold border-0 py-2 px-md-5">
            {{ __('admin/testimonial.backtoall') }}
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
