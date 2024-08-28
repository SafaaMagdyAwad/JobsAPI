
@extends('admin.layouts.main')

@section('title')
{{ __('admin/job.title') }}
@endsection

@section('content')


<a href="{{ route('job.create') }}" class="btn btn-dark">{{ __('admin/job.add') }}</a>
<div class="bg-light p-5 rounded" style="overflow-x:auto;">
<h2 class="fw-bold fs-2 mb-5 pb-2">{{ __('admin/job.title') }}</h2>
<table class="table table-hover">
  <thead>
    <tr class="table-dark">
      <th scope="col">{{ __('admin/job.title') }}</th>
      <th scope="col">{{ __('admin/job.salary') }}</th>
      <th scope="col">{{ __('admin/job.vacancy') }}</th>
      <th scope="col">{{ __('admin/job.description') }}</th>
      <th scope="col">{{ __('admin/job.job_nature') }}</th>
      <th scope="col">{{ __('admin/job.image') }}</th>
      <th scope="col">{{ __('admin/job.category') }}</th>
      <th scope="col">{{ __('admin/job.company') }}</th>
      <th scope="col">{{ __('admin/job.location') }}</th>
      <th scope="col">{{ __('admin/job.published') }}</th>
      <th scope="col">{{ __('admin/job.edit') }}</th>
      <th scope="col">{{ __('admin/job.show') }}</th>
      <th scope="col">{{ __('admin/job.delete') }}</th>


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
      <td>{{$job['published'] ?  __('admin/job.yes') : __('admin/job.no') }}</td>
      <td><a href="{{route('job.edit',$job['id'])}}" class="btn btn-light">{{ __('admin/job.edit') }}</a></td>
      <td><a href="{{route('job.show',$job['id'])}}" class="btn btn-light">{{ __('admin/job.show') }}</a></td>

      <td>
      <form id="" action="{{ route('job.destroy', $job->id) }}" method="POST" >
       @csrf
      @method('DELETE')
        <button type="submit" class="btn btn-light"  onclick="return confirm('{{ __('admin/jobApplication.deleteMessage') }}')">{{ __('admin/job.delete') }}</button>
      </form>
      </td>

    </tr>
    @endforeach

  </tbody>
</table>
</div>

@endsection
