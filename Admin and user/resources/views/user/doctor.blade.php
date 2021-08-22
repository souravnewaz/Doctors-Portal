@extends('layouts.user.layout')
@section('title')
<title>Doctors | Doctors Portal</title>
@endsection

@section('content')


<div class="bg-white">
    <div class="flex wrap mb-5 p-5">
        @if($doctor)
        @foreach($doctor as $doc)
        <div class="w-full lg:w-1/3">
            <div class="">
                <img class="object-scale-down h-48 w-full rounded" src="/images/doctors/1.jpg" alt="image loading">
              </div>
        </div>
        <div class="w-full lg:w-2/3 p-3 mt-3">
            <p class="text-2xl font-bold">{{ $doc->full_name }}</p>
            <p class="text-lg text-red-400">{{ $doc->title }}</p>
            <p class="text-gray-400">{{ $doc->city }}, {{ $doc->country }} </p>
            <p class="text-gray-400">{{ $doc->email }}</p>
            <p class="text-gray-400 mb-5">{{ $doc->phone }}</p>
            <a href="/create-appointment/{{ $doc->id }}" class="bg-blue-400 hover:bg-blue-500 text-white rounded px-4 py-2 cursor-pointer mt-5">Make an Appointment</a>
        </div>
        
    </div>
    @endforeach
    @endif  
    <div class="w-full p-5 bg-gray-200">
        <div class="bg-white p-5 rounded shadow">
            <p class="text-2xl font-bold mb-5">Reviews</p>
        </div>
        
    </div>
</div>


@endsection