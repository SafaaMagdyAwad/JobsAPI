
@extends('admin.layouts.main')

@section('title')
{{ __('admin/testimonial.all') }}
@endsection

@section('content')


<a href="{{ route('testimonials.create') }}" class="btn btn-dark"> {{ __('admin/testimonial.add') }}</a>

<div class="bg-light p-5 rounded" style="overflow-x:auto;">
<h2 class="fw-bold fs-2 mb-5 pb-2">{{ __('admin/testimonial.all') }}</h2>
<table class="table table-hover">
  <thead>
    <tr class="table-dark">
      <th scope="col">{{ __('admin/testimonial.name') }}</th>
      <th scope="col">{{ __('admin/testimonial.job') }}</th>
      <th scope="col">{{ __('admin/testimonial.image') }}</th>
      <th scope="col">{{ __('admin/testimonial.message') }}</th>
      <th scope="col">{{ __('admin/testimonial.show') }}</th>
      <th scope="col">{{ __('admin/testimonial.edit') }}</th>
      <th scope="col">{{ __('admin/testimonial.delete') }}</th>


    </tr>
  </thead>
  <tbody>
    @foreach($testimonials as $testimonial)
    <tr>
      <td scope="row">{{$testimonial['name']}}</td>
      <td>{{$testimonial['job']}}</td>
      <td><img src="{{asset('assets/images/testimonials/'.$testimonial['image'])}}" width="50" height="100"></td>
      <td>{{Str::limit($testimonial['message'],7)}}</td>

      <td><a href="{{route('testimonials.show',$testimonial['id'])}}" class="btn btn-light">{{ __('admin/testimonial.show') }}</a></td>
      <td><a href="{{route('testimonials.edit',$testimonial['id'])}}" class="btn btn-light">{{ __('admin/testimonial.edit') }}</a></td>

      <td>
      <form id="" action="{{ route('testimonials.destroy', $testimonial->id) }}" method="POST" >
       @csrf
      @method('DELETE')
        <button type="submit" class="btn btn-light"  onclick="return confirm('{{ __('admin/jobApplication.deleteMessage') }}')"> {{ __('admin/testimonial.delete') }}</button>
      </form>
      </td>

    </tr>
    @endforeach

  </tbody>
</table>
</div>
@endsection
