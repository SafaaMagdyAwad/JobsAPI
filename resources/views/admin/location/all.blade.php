@extends('admin.layouts.main')

@section('title')
{{ __('admin/location.all') }}
@endsection

@section('content')

<a href="{{ route('location.create') }}" class="btn btn-dark"> Create location</a>

<div class="bg-light p-5 rounded" style="overflow-x:auto;">
<h2 class="fw-bold fs-2 mb-5 pb-2">{{ __('admin/location.all') }}</h2>
<table class="table table-hover">
  <thead>
    <tr class="table-dark">
      <th scope="col">#</th>
      <th scope="col">{{ __('admin/location.location') }}</th>

      <th scope="col">{{ __('admin/location.show') }}</th>
      <th scope="col">{{ __('admin/location.edit') }}</th>
      <th scope="col">{{ __('admin/location.delete') }}</th>


    </tr>
  </thead>
  <tbody>
    @foreach($locations as $location)
    <tr>
      <td scope="row">{{$location['id']}}</td>
      <td>{{$location['location']}}</td>
      <td><a href="{{route('location.show',$location['id'])}}" class="btn btn-light">{{ __('admin/location.show') }}</a></td>
      <td><a href="{{route('location.edit',$location['id'])}}" class="btn btn-light">{{ __('admin/location.edit') }}</a></td>

      <td>
      <form id="" action="{{ route('location.destroy', $location->id) }}" method="POST" >
       @csrf
      @method('DELETE')
        <button type="submit" class="btn btn-light"  onclick="return confirm('{{ __('admin/jobApplication.deleteMessage') }}')"> {{ __('admin/location.delete') }}</button>
      </form>
      </td>

    </tr>
    @endforeach

  </tbody>
</table>
</div>
@endsection

