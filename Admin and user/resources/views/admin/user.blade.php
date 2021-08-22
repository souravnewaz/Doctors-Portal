@extends('layouts.admin.layout')
@section('title')
<title>User Details | Admin Panel</title>
@endsection
@section('content')

<!-- component -->
<div class=" flex flex-row flex-wrap p-3">
    <div class="">
  <!-- Profile Card -->
  <div class="rounded-lg shadow-lg bg-gray-600 w-full flex flex-row flex-wrap p-3 antialiased">
    <div class="md:w-1/3 w-full">
      <img class="rounded-lg shadow-lg h-48 w-96 antialiased" src="/images/users/1.jpg">  
    </div>
    <div class="md:w-2/3 w-full px-3 text-white">
      <p class="  text-3xl ">{{ $user->full_name}}</p>
      <p class="">{{ $user->email}}</p>
      <p class="">{{ $user->phone}}</p>
      <p>{{ $user->blood_group}}</p>
      <p>{{ $user->address}}</p>

      
    </div>
  </div>
  <!-- End Profile Card -->
    </div>
  </div>


@endsection