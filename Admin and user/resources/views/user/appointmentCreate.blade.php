@extends('layouts.user.layout')
@section('title')
<title>Appointment | Doctors Portal</title>
@endsection

@section('content')

<div>
    
    <div class="container px-5 py-10 mx-auto flex">
    <div class=" bg-white rounded-lg p-8 flex flex-col  l mt-10 md:mt-0 relative z-10 shadow-md">
        <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Make an Appointment</h2>
        <form action="" method="post">   
            @csrf         
            <label for="full_name" class="leading-7 text-sm text-gray-600">Your Full Name</label>
            <input type="text" id="full_name" name="full_name" value="Name here" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">

            <label for="email" class="leading-7 text-sm text-gray-600">Your Email</label>
            <input type="text" id="email" name="email" value="Email here" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">

            <label for="date" class="leading-7 text-sm text-gray-600">Select Date</label>
            <input type="datetime-local" id="date" name="date" required class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out mb-5">
            
            <input type="submit" class="text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded text-lg cursor-pointer" name="submit" value="Pay 500 taka">
        </form>
        
    </div>
    </div>
    
</div>



@endsection