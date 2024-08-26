
@extends('admin.layouts.main')

@section('title')
All Companies
@endsection

@section('content')


<a href="{{ route('company.create') }}" class="btn btn-dark"> Create compay</a>

<div class="bg-light p-5 rounded">
<h2 class="fw-bold fs-2 mb-5 pb-2">All companies</h2>
<table class="table table-hover">
  <thead>
    <tr class="table-dark">
      <th scope="col">#</th>
      <th scope="col">company</th>
      <th scope="col">show</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>


    </tr>
  </thead>
  <tbody>
    @foreach($companies as $company)
    <tr>
      <td scope="row">{{$company['id']}}</td>
      <td>{{$company['company']}}</td>


      <td><a href="{{route('company.show',$company['id'])}}" class="btn btn-light">Details</a></td>
      <td><a href="{{route('company.edit',$company['id'])}}" class="btn btn-light">Edit</a></td>

      <td>
      <form id="" action="{{ route('company.destroy', $company->id) }}" method="POST" >
       @csrf
      @method('DELETE')
        <button type="submit" class="btn btn-light"> Delete company</button>
      </form>
      </td>

    </tr>
    @endforeach

  </tbody>
</table>
</div>

@endsection
