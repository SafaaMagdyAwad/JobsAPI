
@extends('admin.layouts.main')

@section('title')
{{ __('admin/jobApplication.all') }}
@endsection

@section('content')



<div class="bg-light p-5 rounded" style="overflow-x:auto;">
<h2 class="fw-bold fs-2 mb-5 pb-2">{{ __('admin/jobApplication.all') }}</h2>
<table class="table table-hover">
  <thead>
    <tr class="table-dark">
      <th scope="col">{{ __('admin/jobApplication.name') }}</th>
      <th scope="col">{{ __('admin/jobApplication.email') }}</th>
      <th scope="col">{{ __('admin/jobApplication.website') }}</th>
      <th scope="col">{{ __('admin/jobApplication.cv') }}</th>
      <th scope="col">{{ __('admin/jobApplication.cover_litter') }}</th>
      <th scope="col">{{ __('admin/jobApplication.job') }}</th>
      <th scope="col">{{ __('admin/jobApplication.show') }}</th>

      <th scope="col">{{ __('admin/jobApplication.delete') }}</th>


    </tr>
  </thead>
  <tbody>
    @foreach($jobApplications as $jobApp)
    <tr>
      <td scope="row">{{$jobApp['name']}}</td>
      <td>{{$jobApp['email']}}</td>
      <td>{{$jobApp['website']}}</td>
      <td><a href="{{ asset('assets/cv/'.$jobApp['cv']) }}" target="_blank">{{ __('admin/jobApplication.cv') }}.pdf</a></td>
      <td> {{ \Illuminate\Support\Str::limit($jobApp['cover_litter'], 20,'...') }}</td>
      <td>{{$jobApp->job->title}}</td>
      <td><a href="{{route('jobApplication.show',$jobApp)}}" class="btn btn-light">{{ __('admin/jobApplication.show') }}</a></td>


      <td>
      <form id="" action="{{ route('jobApplication.destroy', $jobApp) }}" method="POST" >
       @csrf
      @method('DELETE')
        <button type="submit" class="btn btn-light" onclick="return confirm('{{ __('admin/jobApplication.deleteMessage') }}')">{{ __('admin/jobApplication.delete') }}</button>
      </form>
      </td>

    </tr>
    @endforeach

  </tbody>
</table>
</div>

@endsection
