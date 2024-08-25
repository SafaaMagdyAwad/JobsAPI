
     
        @extends('public.layouts.main')
        @section('content')
        @include('public.includes.header',['title'=>"Job_list"]);
        @include('public.includes.jobs');
           
        @endsection