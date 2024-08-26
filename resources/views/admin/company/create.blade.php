
@extends('admin.layouts.main')

@section('title')
Add Company
@endsection

@section('content')

<div class="bg-light p-5 rounded">
  <h2 class="fw-bold fs-2 mb-5 pb-2">Add Company</h2>
  <form action="{{route('company.store')}}" method="post" class="px-md-5">

      @csrf

      <div class="form-group mb-3 row">
        @error('company')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="" class="form-label col-md-2 fw-bold text-md-end">company:</label>
        <div class="col-md-10">
          <input type="text" placeholder="company" name="company" class="form-control py-2" value="{{old('company')}}" />
        </div>
      </div>
      <div class="text-md-end">
        <button class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
          Add company
        </button>
      </div>
    </form>
</div>

@endsection
