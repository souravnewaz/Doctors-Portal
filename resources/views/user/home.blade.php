@extends('layouts.user.layout')
@section('title')
<title>Home | Doctors Portal</title>
@endsection

@section('content')


<div class="p-5 xl:flex xl:justify-evenly grid-rows">
    <div class="mb-8">
        <a class="bg-blue-400 hover:bg-blue-500 text-white  px-5 py-3 rounded shadow " href="/doctors">Book an appointment with our specialist</a>
    </div>
    <div class="">
        <a class="bg-blue-400 hover:bg-blue-500 text-white  px-5 py-3 rounded shadow" href="/departments">View all departments for the specialist</a>
    </div>
    
</div>


<div class="flex flex-wrap justify-around">
    <div class="bg-white h-48 w-48 xl:h-60 xl:w-60 rounded shadow p-3 text-center mb-3">
        <p>Shortcut</p>
    </div>
    <div class="bg-white h-48 w-48 xl:h-60 xl:w-60 rounded shadow p-3 text-center mb-3">
        <p>Shortcut</p>
    </div>
    <div class="bg-white h-48 w-48 xl:h-60 xl:w-60 rounded shadow p-3 text-center mb-3">
        <p>Shortcut</p>
    </div>
    <div class="bg-white h-48 w-48 xl:h-60 xl:w-60 rounded shadow p-3 text-center mb-3">
        <p>Shortcut</p>
    </div>
</div>






@endsection