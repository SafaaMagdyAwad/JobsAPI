
@extends('admin.layouts.main')

@section('title')
{{ __('admin/location.add') }}
@endsection

@section('content')



        <h2 class="fw-bold fs-2 mb-5 pb-2">{{ __('admin/location.add') }}</h2>
        <form action="{{route('location.store')}}" method="post" class="px-md-5">

          @csrf

          <div class="form-group mb-3 row">
            @error('location')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label for="" class="form-label col-md-2 fw-bold text-md-end">{{ __('admin/location.location') }}:</label>
            <div class="col-md-10">
              <input type="text" placeholder="{{ __('admin/location.location') }}" name="location" class="form-control py-2" value="{{old('location')}}" />
            </div>
          </div>
          <div class="text-md-end">
            <button class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
                {{ __('admin/location.add') }}
            </button>
          </div>
        </form>
@endsection


