@extends('layouts.user.layout')
@section('title')
<title>Q/A Forum | Doctors Portal</title>
@endsection


@section('content')
<div class="p-5 bg-white mb-5">    
    <p class="mt-5 mb-2 text-lg text-gray-400">My questions...</p> 
    @if($questions)
        @foreach($questions as $question)
        <div class=" px-5 py-3 mb-3  rounded shadow">           
            <div class="flex justify-between border-b border-gray-100 mb-2">
                <div class="mb-2">
                    <p>{{ $question->created_at }}</p>
                    <p class="text-gray-600 font-bold">{{ $question->created_by }}</p>
                </div>
                <div class="mt-2">
                    <a class=" text-blue-400 hover:bg-blue-500 hover:text-white px-4 py-1 mt-3 rounded" href="/questions/{{ $question->id }}">view more >></a> 
                </div>
            </div>      
            <div class="">
                <p class="break-all text-gray-600">
                    {{ $question->question }}
                </p>
            </div>
        </div>
        @endforeach
    @else
    @endif
</div>

           


@endsection