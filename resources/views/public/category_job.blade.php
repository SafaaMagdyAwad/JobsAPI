
     
        @extends('public.layouts.main')
        @section('content')
        @include('public.includes.header',['title'=>"Category_Jobs"]);
        @include('public.includes.catJob');
           
        @endsection