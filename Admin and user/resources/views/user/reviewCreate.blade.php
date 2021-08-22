@extends('layouts.user.layout')
@section('title')
<title>Feedback | Doctors Portal</title>
@endsection


@section('content')

<div  class="p-5 bg-white ">
    @if ($errors->any())
    <div class="text-red-400">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if($review)
    <div>
        <p class="text-2xl font-bold text-gray-600 mb-5">Your review</p>
        <div>
            <p class="text-gray-400">{{ $review->comment }}</p>
        </div>
        
    </div>
    @else
    <div>
        <p class="text-2xl font-bold text-gray-600">Write your feedback here</p>
        <form action="" method="post">
            @csrf
            <textarea class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500 mt-4 mb-1" name="comment" id="comment" rows="5" placeholder="Write something..."></textarea>            
            <input class="bg-blue-400 text-white hover:bg-blue-500 px-4 py-1 rounded cursor-pointer" type="submit" name="submit" value="Submit">
        </form>
    </div>
    @endif
</div>

@endsection