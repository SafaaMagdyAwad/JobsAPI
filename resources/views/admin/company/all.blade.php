
@extends('admin.layouts.main')

@section('title')
{{ __('admin/company.all') }}
@endsection

@section('content')


<a href="{{ route('company.create') }}" class="btn btn-dark"> {{ __('admin/company.add') }}</a>

<div class="bg-light p-5 rounded" style="overflow-x:auto;">
<h2 class="fw-bold fs-2 mb-5 pb-2">{{ __('admin/company.all') }}</h2>
<table class="table table-hover">
  <thead>
    <tr class="table-dark">
      <th scope="col">#</th>
      <th scope="col">{{ __('admin/company.company') }}</th>
      <th scope="col">{{ __('admin/company.show') }}</th>
      <th scope="col">{{ __('admin/company.edit') }}</th>
      <th scope="col">{{ __('admin/company.delete') }}</th>


    </tr>
  </thead>
  <tbody>
    @foreach($companies as $company)
    <tr>
      <td scope="row">{{$company['id']}}</td>
      <td>{{$company['company']}}</td>


      <td><a href="{{route('company.show',$company['id'])}}" class="btn btn-light">{{ __('admin/company.show') }}</a></td>
      <td><a href="{{route('company.edit',$company['id'])}}" class="btn btn-light">{{ __('admin/company.edit') }}</a></td>

      <td>
      <form id="" action="{{ route('company.destroy', $company->id) }}" method="POST" >
       @csrf
      @method('DELETE')
        <button type="submit" class="btn btn-light"  onclick="return confirm('{{ __('admin/jobApplication.deleteMessage') }}')"> {{ __('admin/company.delete') }}</button>
      </form>
      </td>

    </tr>
    @endforeach

  </tbody>
</table>
</div>

@endsection
