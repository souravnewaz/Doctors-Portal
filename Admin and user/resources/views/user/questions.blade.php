@extends('layouts.user.layout')
@section('title')
<title>Q/A Forum | Doctors Portal</title>
@endsection


@section('content')
<div class="p-5 bg-white mb-5">
    <div>
        <p class="text-2xl font-bold text-gray-600">Ask your question here</p>
        <form action="" method="post">
            @csrf
            <textarea class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500 mt-4 mb-1" name="question" id="question" rows="5" placeholder="Ask something..."></textarea>
            @if(session('user_type')== 'user')
            <input class="bg-blue-400 text-white hover:bg-blue-500 px-4 py-1 rounded cursor-pointer" type="submit" name="submit" value="Post">
            @else
            <a class="text-red-400 hover:text-red-500" href="/login">Login to post your question</a>
            @endif
        </form>
    </div>
    <div>
        <p class="text-green-400">{{ session('success') }}</p>
        @if (count($errors) > 0)
            <div class="relative px-4 py-3 mt-5 leading-normal text-red-700 bg-red-100 rounded-lg" role="alert">
                @foreach ($errors->all() as $error)
                <span class="absolute inset-y-0 left-0 flex items-center ml-4">
                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
            </span>
            <p class="ml-6">{{ $error }}</p>
        @endforeach 
        @endif
    </div>
    <div class="mt-5">
        <a href="/questions-user/{{ Session::get('user')}}" class="text-blue-400 mt-5">My Questions</a>
    </div>
    
    <p class="mt-5 mb-2 text-lg text-gray-400">Recent questions...</p> 
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