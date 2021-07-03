@extends('layouts.user.layout')
@section('title')
<title>Departments | Doctors Portal</title>
@endsection

@section('content')





<div class="flex flex-wrap justify-evenly space-y-5">
    @if($departments)
    @foreach($departments as $department)
    <div class="mt-5">
        <a class="" href="/doctors">
            <div class="bg-white hover:bg-blue-400 hover:text-white bg-white text-blue-400 h-48 w-48 xl:h-60 xl:w-60 rounded shadow p-3 text-center mb-3">
                
                <p>{{ $department->department }}</p> 
                           
            </div>
        </a>
    </div>
    @endforeach
    @endif
    
</div>

@endsection