@extends('layouts.admin.layout')
@section('title')
<title>Doctor Details | Admin Panel</title>
@endsection
@section('content')

<!-- component -->
@if($doctor)
@foreach($doctor as $doc)
<div class=" flex flex-row flex-wrap p-3">
    <div class="">
  <!-- Profile Card -->
  <div class="rounded-lg shadow-lg bg-gray-600 w-full flex flex-row flex-wrap p-3 antialiased">
    <div class="md:w-1/3 w-full">
      <img class="rounded-lg shadow-lg antialiased" src="/images/doctors/1.jpg">  
    </div>
    <div class="md:w-2/3 w-full px-3 text-white">
      <p class="  text-3xl ">{{ $doc->full_name }}</p>
      <p class="">{{ $doc->title }}</p>
      <p class="">{{ $doc->department }}</p>
      <p class="">{{ $doc->chamber }}</p>
      <p class="">{{ $doc->email }}</p>
      <p class="">{{ $doc->phone }}</p>
      <p class="">{{ $doc->city }}</p>
      <p class="">{{ $doc->country }}</p>

      
    </div>
  </div>
  <!-- End Profile Card -->
    </div>
  </div>
@endforeach
@endif   

@endsection