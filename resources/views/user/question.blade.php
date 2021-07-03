@extends('layouts.user.layout')
@section('title')
<title>Q/A Forum | Doctors Portal</title>
@endsection



@section('content')

<div class="p-5 bg-white">
    
    <a class="text-gray-400 hover:bg-blue-500 hover:text-white px-4 py-1  rounded" href="/questions"><< back</a> 
    @if($question)
    <div class="bg-white px-5 py-3 mb-3 mt-2  rounded shadow">    
        <div class="flex justify-between border-b border-gray-100 mb-2">
            <div class="mb-2">
                <p>{{ $question->created_at }}</p>
                <p class="text-gray-600 font-bold text-2xl" href="">{{ $question->created_by }}</a>
            </div>
        </div>      
        <div class="">
            <p class="break-all text-gray-600">{{ $question->question }}</p>
        </div>
    </div>
    @endif
    
    <p class="mt-5 mb-2 text-lg font-bold text-gray-600">Comments</p>
    @if($comments)
    @foreach($comments as $comment)
    <div class="bg-gray-100 px-5 py-1 mb-1 rounded shadow">
        <div class="mb-4">
            <p class="text-gray-600 font-bold">{{ $comment->created_by}}</p>
            <span>{{ $comment->comment}}</span>
        </div>        
    </div>
    @endforeach
    @else
        <div>
            <p class="mt-5 mb-2 text-sm text-gray-600">No Comments</p>
        </div>
        
    @endif
    
    
</div>



@endsection