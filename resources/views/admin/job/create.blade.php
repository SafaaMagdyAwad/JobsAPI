
@extends('admin.layouts.main')

@section('title')
{{ __('admin/job.add') }}
@endsection

@section('content')


<div class="bg-light p-5 rounded">
  <h2 class="fw-bold fs-2 mb-5 pb-2">{{ __('admin/job.add') }}</h2>
  <form action="{{route('job.store')}}" method="post" class="px-md-5" enctype="multipart/form-data">

    @csrf

    <div class="form-group mb-3 row">
      @error('title')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <label for="" class="form-label col-md-2 fw-bold text-md-end">{{ __('admin/job.add') }}:</label>
      <div class="col-md-10">
        <input type="text" placeholder="{{ __('admin/job.add') }}" name="title" class="form-control py-2" value="{{old('title')}}" />
      </div>
    </div>

    <hr>
    <div class="form-group mb-3 row">
      @error('image')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <label for="" class="form-label col-md-2 fw-bold text-md-end">{{ __('admin/job.image') }}:</label>
      <div class="col-md-10">
        <input type="file"  name="image" class="form-control py-2" />
      </div>
    </div>

  <hr>
    <div class="form-group mb-3 row">
      @error('description')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <label for="" class="form-label col-md-2 fw-bold text-md-end">{{ __('admin/job.description') }}:</label>
      <div class="col-md-10">
          <textarea name="description" placeholder="{{ __('admin/job.description') }}" cols="30" rows="5"class="form-control py-2"  >{{old('description')}}</textarea>
      </div>
    </div>

  <hr>
    <div class="form-group mb-3 row">
      @error('qualification')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <label for="" class="form-label col-md-2 fw-bold text-md-end">{{ __('admin/job.qualification') }}:</label>
      <div class="col-md-10">
          <textarea name="qualification" placeholder="{{ __('admin/job.qualification') }}" cols="30" rows="5"class="form-control py-2"  >{{old('qualification')}}</textarea>
      </div>
    </div>

    <hr>
    <div class="form-group mb-3 row">
      @error('responsability')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <label for="" class="form-label col-md-2 fw-bold text-md-end">{{ __('admin/job.responsability') }}:</label>
      <div class="col-md-10">
          <textarea name="responsability" placeholder="{{ __('admin/job.responsability') }}" cols="30" rows="5"class="form-control py-2"  >{{old('responsability')}}</textarea>
      </div>
    </div>

    <hr>
    <div class="form-group mb-3 row">
      @error('job_nature')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <label for="" class="form-label col-md-2 fw-bold text-md-end">{{ __('admin/job.job_nature') }}:</label>
      <div class="col-md-10">
          <select name="job_nature" class="form-control">
              <option value="Full Time" @selected(old('job_nature') == "Full Time")>{{ __('admin/job.FullTime') }}</option>
              <option value="Part Time" @selected(old('job_nature') == "Part Time")>{{ __('admin/job.PartTime') }}</option>
          </select>
      </div>
    </div>



    <hr>
    <div class="form-group mb-3 row">
      @error('vacancy')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <label for="" class="form-label col-md-2 fw-bold text-md-end">{{ __('admin/job.vacancy') }}:</label>
      <div class="col-md-10">
              <input type="number" name="vacancy" step=1 class="form-controll" value="{{ old('vacancy') }}">
      </div>
    </div>
    <hr>
    <div class="form-group mb-3 row">
      @error('salary_from')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <label for="" class="form-label col-md-2 fw-bold text-md-end">{{ __('admin/job.salary_from') }}:</label>
      <div class="col-md-10">
              <input type="number" name="salary_from" step=0.1 class="form-controll" value="{{ old('salary_from') }}">
      </div>
    </div>

    <hr>
    <div class="form-group mb-3 row">
      @error('salary_to')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <label for="" class="form-label col-md-2 fw-bold text-md-end">{{ __('admin/job.salary_to') }}:</label>
      <div class="col-md-10">
              <input type="number" name="salary_to" step=0.1 class="form-controll" value="{{ old('salary_to') }}">
      </div>
    </div>

    <hr>
    <div class="form-group mb-3 row">
      @error('date_line')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <label for="" class="form-label col-md-2 fw-bold text-md-end">{{ __('admin/job.date_line') }}:</label>
      <div class="col-md-10">
              <input type="date" name="date_line"  class="form-controll" value="{{ old('date_line') }}">
      </div>
    </div>

    <hr>
    <div class="form-group mb-3 row">

      <label for="" class="form-label col-md-2 fw-bold text-md-end">{{ __('admin/job.published') }}:</label>
      <div class="col-md-10">
              <input type="checkbox" name="published"  class="form-controll"  @checked(old('published'))>
      </div>
    </div>

    <hr>
    <div class="form-group mb-3 row">
      @error('category_id')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <label for="" class="form-label col-md-2 fw-bold text-md-end">{{ __('admin/job.category') }}:</label>
      <div class="col-md-10">
          <select name="category_id" class="form-control">
              @foreach ($categories as $category)
              <option value="{{ $category->id }}" @selected(old('category_id') ==  $category->id)>{{ $category->category }}</option>
              @endforeach
          </select>
      </div>
    </div>

    <hr>
    <div class="form-group mb-3 row">
      @error('location_id')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <label for="" class="form-label col-md-2 fw-bold text-md-end">{{ __('admin/job.location') }}:</label>
      <div class="col-md-10">
          <select name="location_id" class="form-control">
              @foreach ($locations as $location)
              <option value="{{ $location->id }}" @selected(old('location_id') ==  $location->id)>{{ $location->location }}</option>
              @endforeach
          </select>
      </div>
    </div>

    <hr>
    <div class="form-group mb-3 row">
      @error('company_id')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <label for="" class="form-label col-md-2 fw-bold text-md-end">{{ __('admin/job.company') }}:</label>
      <div class="col-md-10">
          <select name="company_id" class="form-control">
              @foreach ($companies as $company)
              <option value="{{ $company->id }}" @selected(old('company_id') ==  $company->id)>{{ $company->company }}</option>
              @endforeach
          </select>
      </div>
    </div>

    <div class="text-md-end">
      <button class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
        {{ __('admin/job.add') }}
      </button>
    </div>
  </form>
</div>

@endsection
