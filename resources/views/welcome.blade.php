@extends('layouts.app')

@section('title', 'Halaman1')

@section('content')
 <h1 class="text-3xl font-bold text-blue-500">
    Haloooo
 </h1>

 <a href="{{url('/halaman2')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
    Get Started!!!!! </a>
@endsection