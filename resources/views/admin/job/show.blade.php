
@extends('admin.layouts.main')

@section('title')
{{ __('admin/job.show') }}
@endsection

@section('content')

<div class="bg-light p-5 rounded">
  <div class="card bg-light border-0">
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6 col-10 position-relative overflow-hidden">
        <img src="{{asset('assets/images/jobs/'.$data->image)}}"
          alt="" class="card-img"
          style="position: absolute; margin: auto; top: 50%; transform: translateY(-50%); width: 100%;height: 100%; object-fit: cover;" />
      </div>
      <div class="col-lg-8 col-md-6 col-12 card-body">
        <div class="mb-4 text-center py-2">
          <h2 class="fw-bold bg-light card-header">{{$data->title}}</h2>
        </div>
        <div class="mb-4">
          <p class="card-text">
            <span class="fw-bold">{{ __('admin/job.job_nature') }}:</span> {{$data->job_nature}}
          </p>
        </div>
        <div class="mb-4">
          <p class="card-text">
            <span class="fw-bold">{{ __('admin/job.vacancy') }}:</span> {{$data->vacancy}}
          </p>
        </div>
        <div class="mb-4">
          <p class="card-text">
            <span class="fw-bold">{{ __('admin/job.salary') }}:</span> {{$data->salary_from}}$ : {{$data->salary_to}}$
          </p>
        </div>
        <div class="mb-4">
          <p class="card-text">
            <span class="fw-bold">{{ __('admin/job.description') }}:</span> {{$data->description}}
          </p>
        </div>
        <div class="mb-4">
          <p class="card-text">
            <span class="fw-bold">{{ __('admin/job.responsability') }}:</span> {{$data->responsability}}
          </p>
        </div>
        <div class="mb-4">
          <p class="card-text">
            <span class="fw-bold">{{ __('admin/job.qualification') }}:</span> {{$data->description}}
          </p>
        </div>
        <div class="mb-4">
          <p class="card-text">
            <span class="fw-bold">{{ __('admin/job.date_line') }}:</span> {{$data->date_line}}
          </p>
        </div>
        <div class="mb-4">
          <p class="card-text">
            <span class="fw-bold">{{ __('admin/job.location') }}:</span> {{$data->location->location}}
          </p>
        </div>
        <div class="mb-4">
          <p class="card-text">
            <span class="fw-bold">{{ __('admin/job.category') }}:</span> {{$data->category->category}}
          </p>
        </div>
        <div class="mb-4">
          <p class="card-text">
            <span class="fw-bold">{{ __('admin/job.company') }}:</span> {{$data->company->company}}
          </p>
        </div>
        <div class="mb-4">
          <p class="card-text">
            <span class="fw-bold">{{ __('admin/job.published') }}:</span> {{$data->published?"YES":"NO"}}
          </p>
        </div>

        <div class="text-md-end">
          <a href="{{route('job.index')}}" class="btn mt-4 btn-primary text-white fs-5 fw-bold border-0 py-2 px-md-5">
            {{ __('admin/job.backtoall') }}
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
