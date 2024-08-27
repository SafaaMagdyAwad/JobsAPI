
@extends('admin.layouts.main')

@section('title')
{{ __('admin/job/all.title') }}
@endsection

@section('content')


<a href="{{ route('job.create') }}" class="btn btn-dark">{{ __('admin/job/all.add') }}</a>
<div class="bg-light p-5 rounded">
<h2 class="fw-bold fs-2 mb-5 pb-2">{{ __('admin/job/all.title') }}</h2>
<table class="table table-hover">
  <thead>
    <tr class="table-dark">
      <th scope="col">{{ __('admin/job/all.title') }}</th>
      <th scope="col">{{ __('admin/job/all.salary') }}</th>
      <th scope="col">{{ __('admin/job/all.vacancy') }}</th>
      <th scope="col">{{ __('admin/job/all.description') }}</th>
      <th scope="col">{{ __('admin/job/all.job_nature') }}</th>
      <th scope="col">{{ __('admin/job/all.image') }}</th>
      <th scope="col">{{ __('admin/job/all.category') }}</th>
      <th scope="col">{{ __('admin/job/all.company') }}</th>
      <th scope="col">{{ __('admin/job/all.location') }}</th>
      <th scope="col">{{ __('admin/job/all.published') }}</th>
      <th scope="col">{{ __('admin/job/all.edit') }}</th>
      <th scope="col">{{ __('admin/job/all.show') }}</th>
      <th scope="col">{{ __('admin/job/all.delete') }}</th>


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
      <td><a href="{{route('job.edit',$job['id'])}}" class="btn btn-light">{{ __('admin/job/all.edit') }}</a></td>
      <td><a href="{{route('job.show',$job['id'])}}" class="btn btn-light">{{ __('admin/job/all.show') }}</a></td>

      <td>
      <form id="" action="{{ route('job.destroy', $job->id) }}" method="POST" >
       @csrf
      @method('DELETE')
        <button type="submit" class="btn btn-light">{{ __('admin/job/all.delete') }}</button>
      </form>
      </td>

    </tr>
    @endforeach

  </tbody>
</table>
</div>

@endsection
