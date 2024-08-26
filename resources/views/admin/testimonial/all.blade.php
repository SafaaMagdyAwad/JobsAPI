
@extends('admin.layouts.main')

@section('title')
All Testimonials
@endsection

@section('content')


<a href="{{ route('testimonials.create') }}" class="btn btn-dark"> Create Testimonial</a>

<div class="bg-light p-5 rounded">
<h2 class="fw-bold fs-2 mb-5 pb-2">All Testimonials</h2>
<table class="table table-hover">
  <thead>
    <tr class="table-dark">
      <th scope="col">Name</th>
      <th scope="col">Job</th>
      <th scope="col">image</th>
      <th scope="col">Message</th>
      <th scope="col">show</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>


    </tr>
  </thead>
  <tbody>
    @foreach($testimonials as $testimonial)
    <tr>
      <td scope="row">{{$testimonial['name']}}</td>
      <td>{{$testimonial['job']}}</td>
      <td><img src="{{asset('assets/images/testimonials/'.$testimonial['image'])}}" width="50" height="100"></td>
      <td>{{Str::limit($testimonial['message'],7)}}</td>

      <td><a href="{{route('testimonials.show',$testimonial['id'])}}" class="btn btn-light">Details</a></td>
      <td><a href="{{route('testimonials.edit',$testimonial['id'])}}" class="btn btn-light">Edit</a></td>

      <td>
      <form id="" action="{{ route('testimonials.destroy', $testimonial->id) }}" method="POST" >
       @csrf
      @method('DELETE')
        <button type="submit" class="btn btn-light"> Delete Testimonial</button>
      </form>
      </td>

    </tr>
    @endforeach

  </tbody>
</table>
</div>
@endsection
