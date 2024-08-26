@extends('admin.layouts.main')

@section('title')
All Categories
@endsection

@section('content')

<a href="{{ route('categories.create') }}" class="btn btn-dark"> Create category</a>

<div class="bg-light p-5 rounded">
<h2 class="fw-bold fs-2 mb-5 pb-2">All categories</h2>
<table class="table table-hover">
  <thead>
    <tr class="table-dark">
      <th scope="col">#</th>
      <th scope="col">category</th>
      <th scope="col">show</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>


    </tr>
  </thead>
  <tbody>
    @foreach($categories as $category)
    <tr>
      <td scope="row">{{$category['id']}}</td>
      <td>{{$category['category']}}</td>
     <td><a href="{{route('categories.show',$category['id'])}}" class="btn btn-light">Details</a></td>
      <td><a href="{{route('categories.edit',$category['id'])}}" class="btn btn-light">Edit</a></td>

      <td>
      <form id="" action="{{ route('categories.destroy', $category) }}" method="POST" >
       @csrf
      @method('DELETE')
        <button type="submit" class="btn btn-light"> Delete category</button>
      </form>
      </td>

    </tr>
    @endforeach

  </tbody>
</table>
</div>


@endsection
