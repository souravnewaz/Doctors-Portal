@extends('layouts.user.layout')
@section('title')
<title>Profile | Doctors Portal</title>
@endsection

@section('content')

<div class="bg-white">
    <div class="flex wrap mb-5 p-5">
        @if($user)
        <div class="w-full lg:w-1/3">
            <div class="">
                <img class="object-scale-down h-48 w-full rounded" src="/images/users/1.jpg" alt="image loading">
              </div>
        </div>
        <div class="w-full lg:w-2/3 p-3 mt-3">
            
            <p class="text-lg text-red-400">{{ $user->full_name }}</p>
            <p class="text-lg text-red-400">{{ $user->email }}</p>
            <p class="text-gray-400">{{ $user->country }}</p>
        </div>
        @endif
    </div>
    <div class="w-full p-5 bg-gray-200">
        <div class="bg-white p-5 rounded shadow">
            <p class="text-2xl font-bold mb-5">Reviews</p>
        </div>
        
    </div>
</div>

@endsection