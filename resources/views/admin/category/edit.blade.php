@extends('admin.layouts.main')

@section('title')
{{ __('admin/category.edit') }}
@endsection

@section('content')

<div class="bg-light p-5 rounded">
  <h2 class="fw-bold fs-2 mb-5 pb-2">{{ __('admin/category.edit') }}</h2>
  <form action="{{route('categories.update',[$category['id']])}}" method="post" class="px-md-5" >
    @csrf
    @method('put')

    <div class="form-group mb-3 row">
      @error('category')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <label for="" class="form-label col-md-2 fw-bold text-md-end">{{ __('admin/category.category') }}:</label>
      <div class="col-md-10">
        <input type="text" placeholder="category" name="category" class="form-control py-2" value="{{old('category',$category->category)}}" />
      </div>
    </div>

    <div class="text-md-end">
      <button class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
        {{ __('admin/category.edit') }}
      </button>
    </div>
  </form>
</div>


@endsection
