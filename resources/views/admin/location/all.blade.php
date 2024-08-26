@extends('admin.layouts.main')

@section('title')
All Locations
@endsection

@section('content')

<a href="{{ route('location.create') }}" class="btn btn-dark"> Create location</a>

<div class="bg-light p-5 rounded">
<h2 class="fw-bold fs-2 mb-5 pb-2">All locations</h2>
<table class="table table-hover">
  <thead>
    <tr class="table-dark">
      <th scope="col">#</th>
      <th scope="col">Location</th>

      <th scope="col">show</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>


    </tr>
  </thead>
  <tbody>
    @foreach($locations as $location)
    <tr>
      <td scope="row">{{$location['id']}}</td>
      <td>{{$location['location']}}</td>
      <td><a href="{{route('location.show',$location['id'])}}" class="btn btn-light">Details</a></td>
      <td><a href="{{route('location.edit',$location['id'])}}" class="btn btn-light">Edit</a></td>

      <td>
      <form id="" action="{{ route('location.destroy', $location->id) }}" method="POST" >
       @csrf
      @method('DELETE')
        <button type="submit" class="btn btn-light"> Delete Location</button>
      </form>
      </td>

    </tr>
    @endforeach

  </tbody>
</table>
</div>
@endsection

