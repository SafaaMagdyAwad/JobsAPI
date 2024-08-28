@extends('admin.layouts.main')

@section('title')
{{ __('admin/category.all') }}
@endsection

@section('content')

<a href="{{ route('categories.create') }}" class="btn btn-dark"> {{ __('admin/category.add') }}</a>

<div class="bg-light p-5 rounded" style="overflow-x:auto;">
<h2 class="fw-bold fs-2 mb-5 pb-2">{{ __('admin/category.all') }}</h2>
<table class="table table-hover">
  <thead>
    <tr class="table-dark">
      <th scope="col">#</th>
      <th scope="col">{{ __('admin/category.category') }}</th>
      <th scope="col">{{ __('admin/category.show') }}</th>
      <th scope="col">{{ __('admin/category.edit') }}</th>
      <th scope="col">{{ __('admin/category.delete') }}</th>


    </tr>
  </thead>
  <tbody>
    @foreach($categories as $category)
    <tr>
      <td scope="row">{{$category['id']}}</td>
      <td>{{$category['category']}}</td>
     <td><a href="{{route('categories.show',$category['id'])}}" class="btn btn-light">{{ __('admin/category.show') }}</a></td>
      <td><a href="{{route('categories.edit',$category['id'])}}" class="btn btn-light">{{ __('admin/category.edit') }}</a></td>

      <td>
      <form id="" action="{{ route('categories.destroy', $category) }}" method="POST" >
       @csrf
      @method('DELETE')
        <button type="submit" class="btn btn-light"  onclick="return confirm('{{ __('admin/jobApplication.deleteMessage') }}')"> {{ __('admin/category.delete') }}</button>
      </form>
      </td>

    </tr>
    @endforeach

  </tbody>
</table>
</div>


@endsection
