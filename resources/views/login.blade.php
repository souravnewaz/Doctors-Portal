@extends('layouts.layout')
@section('content')


<div class="bg-grey-lighter min-h-screen flex flex-col">
    <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
        <div class="mb-2 text-green-400">
            <p class="p-3">{{ session('success') }}</p>
        </div>
        
        <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
            <h1 class="mb-8 text-3xl text-center">Login</h1>
            <form action="" method="POST">
                @csrf
            <input 
                type="text"
                class="block border border-grey-light w-full p-3 rounded mb-4"
                name="email"
                placeholder="Email" />

            <input 
                type="password"
                class="block border border-grey-light w-full p-3 rounded mb-4"
                name="password"
                placeholder="Password" />

            <button
                type="submit"
                class="w-full text-center py-3 rounded bg-blue-400 text-white hover:bg-blue-500 focus:outline-none my-1"
            >Login</button>
            </form>
        </div>

        <div class="text-grey-dark mt-6">
            Not Registered? 
            <a class="no-underline border-b border-blue text-blue-400" href="/signup">
                Signup
            </a>
        </div>
        @if(session()->has('error'))
        <div class="relative px-4 py-3 mt-5 leading-normal text-red-700 bg-red-100 rounded-lg" role="alert">
            <span class="absolute inset-y-0 left-0 flex items-center ml-4">
              <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
            </span>
            <p class="ml-6">{{ session()->get('error') }}</p>  
          </div>
        @endif
        @if (count($errors) > 0)
        <div class="relative px-4 py-3 mt-5 leading-normal text-red-700 bg-red-100 rounded-lg" role="alert">
          @foreach ($errors->all() as $error)
          <span class="absolute inset-y-0 left-0 flex items-center ml-4">
            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
          </span>
          <p class="ml-6">{{ $error }}</p>
          @endforeach   
        </div>
        @endif
    </div>
</div>

@endsection