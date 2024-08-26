
@extends('admin.layouts.main')

@section('title')
All Jobs
@endsection

@section('content')


<a href="{{ route('job.create') }}" class="btn btn-dark"> Create Job</a>
<div class="bg-light p-5 rounded">
<h2 class="fw-bold fs-2 mb-5 pb-2">All jobs</h2>
<table class="table table-hover">
  <thead>
    <tr class="table-dark">
      <th scope="col">Job Title</th>
      <th scope="col">Salary</th>
      <th scope="col">Vacancy</th>
      <th scope="col">Description</th>
      <th scope="col">Job Nature</th>
      <th scope="col">image</th>
      <th scope="col">Category</th>
      <th scope="col">Company</th>
      <th scope="col">Location</th>
      <th scope="col">Published</th>
      <th scope="col">Edit</th>
      <th scope="col">show</th>
      <th scope="col">Delete</th>


    </tr>
  </thead>
  <tbody>
    @foreach($jobs as $job)
    <tr>
      <td scope="row">{{$job['title']}}</td>
      <td>{{$job['salary_from']}}$ :{{$job['salary_to']}}$</td>
      <td>{{$job['vacancy']}}</td>
      <td>{{Str::limit($job['description'],7)}}</td>
      <td>{{$job['job_nature']}}</td>
      <td><img   width="50" height="100" src={{ asset('assets/images/jobs/'.$job->image) }}></td>
      <td>{{$job->category->category}}</td>
      <td>{{$job->company->company}}</td>
      <td>{{$job->location->location}}</td>
      <td>{{$job['published'] ? 'Yes':'No'}}</td>
      <td><a href="{{route('job.edit',$job['id'])}}" class="btn btn-light">Edit</a></td>
      <td><a href="{{route('job.show',$job['id'])}}" class="btn btn-light">Details</a></td>

      <td>
      <form id="" action="{{ route('job.destroy', $job->id) }}" method="POST" >
       @csrf
      @method('DELETE')
        <button type="submit" class="btn btn-light"> Delete Job</button>
      </form>
      </td>

    </tr>
    @endforeach

  </tbody>
</table>
</div>

@endsection
