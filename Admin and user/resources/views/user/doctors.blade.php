@extends('layouts.user.layout')
@section('title')
<title>Doctor | Doctors Portal</title>
@endsection

@section('content')



@if($doctors)
@foreach($doctors as $doctor)

<div class="flex flex-wrap justify-evenly space-y-5">
    <div class="mt-5">
        <a class="" href="/doctors/{{$doctor->id}}">
            <div class="bg-white hover:bg-blue-400 hover:text-white bg-white text-blue-400 h-48 w-48 xl:h-60 xl:w-60 rounded shadow p-3 text-center mb-3">
                
                <p>{{ $doctor->full_name}}</p> 
                           
            </div>
        </a>
    </div>
@endforeach
@endif    
    <div>
        <a class="" href="/doctors">
            <div class="bg-white hover:bg-blue-400 hover:text-white bg-white text-blue-400 h-48 w-48 xl:h-60 xl:w-60 rounded shadow p-3 text-center mb-3">
                
                <p>Doctor</p> 
                           
            </div>
        </a>
    </div>
    <div>
        <a class="" href="/doctors">
            <div class="bg-white hover:bg-blue-400 hover:text-white bg-white text-blue-400 h-48 w-48 xl:h-60 xl:w-60 rounded shadow p-3 text-center mb-3">
                
                <p>Doctor</p> 
                           
            </div>
        </a>
    </div>
    <div>
        <a class="" href="/doctors">
            <div class="bg-white hover:bg-blue-400 hover:text-white bg-white text-blue-400 h-48 w-48 xl:h-60 xl:w-60 rounded shadow p-3 text-center mb-3">
                
                <p>Doctor</p> 
                           
            </div>
        </a>
    </div>
    <div>
        <a class="" href="/doctors">
            <div class="bg-white hover:bg-blue-400 hover:text-white bg-white text-blue-400 h-48 w-48 xl:h-60 xl:w-60 rounded shadow p-3 text-center mb-3">
                
                <p>Doctor</p> 
                           
            </div>
        </a>
    </div>
    <div>
        <a class="" href="/doctors">
            <div class="bg-white hover:bg-blue-400 hover:text-white bg-white text-blue-400 h-48 w-48 xl:h-60 xl:w-60 rounded shadow p-3 text-center mb-3">
                
                <p>Doctor</p> 
                           
            </div>
        </a>
    </div>
    <div>
        <a class="" href="/doctors">
            <div class="bg-white hover:bg-blue-400 hover:text-white bg-white text-blue-400 h-48 w-48 xl:h-60 xl:w-60 rounded shadow p-3 text-center mb-3">
                
                <p>Doctor</p> 
                           
            </div>
        </a>
    </div>
    <div>
        <a class="" href="/doctors">
            <div class="bg-white hover:bg-blue-400 hover:text-white bg-white text-blue-400 h-48 w-48 xl:h-60 xl:w-60 rounded shadow p-3 text-center mb-3">
                
                <p>Doctor</p> 
                           
            </div>
        </a>
    </div>
    <div>
        <a class="" href="/doctors">
            <div class="bg-white hover:bg-blue-400 hover:text-white bg-white text-blue-400 h-48 w-48 xl:h-60 xl:w-60 rounded shadow p-3 text-center mb-3">
                
                <p>Doctor</p> 
                           
            </div>
        </a>
    </div>
    <div>
        <a class="" href="/doctors">
            <div class="bg-white hover:bg-blue-400 hover:text-white bg-white text-blue-400 h-48 w-48 xl:h-60 xl:w-60 rounded shadow p-3 text-center mb-3">
                
                <p>Doctor</p> 
                           
            </div>
        </a>
    </div>
    <div>
        <a class="" href="/doctors">
            <div class="bg-white hover:bg-blue-400 hover:text-white bg-white text-blue-400 h-48 w-48 xl:h-60 xl:w-60 rounded shadow p-3 text-center mb-3">
                
                <p>Doctor</p> 
                           
            </div>
        </a>
    </div>
    <div>
        <a class="" href="/doctors">
            <div class="bg-white hover:bg-blue-400 hover:text-white bg-white text-blue-400 h-48 w-48 xl:h-60 xl:w-60 rounded shadow p-3 text-center mb-3">
                
                <p>Doctor</p> 
                           
            </div>
        </a>
    </div>
    
</div>

@endsection