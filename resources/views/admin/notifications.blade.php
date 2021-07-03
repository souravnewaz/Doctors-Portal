@extends('layouts.admin.layout')
@section('title')
<title>Notifications | Admin Panel</title>
@endsection
@section('content')

<div class="mb-2 mt-2 ">
    <p class="text-lg text-blue-400">New Notifications</p>
    <div class="grid grid-rows-1 text-blue-400">
        <a class="bg-white hover:bg-gray-200 mt-2 p-2 shadow rounded" href="">This is a notification</a>
        <a class="bg-white hover:bg-gray-200 mt-1 p-2 shadow rounded" href="">This is a notification</a>
        <a class="bg-white hover:bg-gray-200 mt-1 p-2 shadow rounded" href="">This is a notification</a>
        <a class="bg-white hover:bg-gray-200 mt-1 p-2 shadow rounded" href="">This is a notification</a>
        <a class="bg-white hover:bg-gray-200 mt-1 p-2 shadow rounded" href="">This is a notification</a>
    </div>
</div>

<div class="mb-2 mt-10">
    <p class="text-lg">Old Notifications</p>
    <div class="grid grid-rows-1">
        <a class="bg-white hover:bg-gray-200 mt-2 p-2 shadow rounded" href="">This is a notification</a>
        <a class="bg-white hover:bg-gray-200 mt-1 p-2 shadow rounded" href="">This is a notification</a>
        <a class="bg-white hover:bg-gray-200 mt-1 p-2 shadow rounded" href="">This is a notification</a>
        <a class="bg-white hover:bg-gray-200 mt-1 p-2 shadow rounded" href="">This is a notification</a>
        <a class="bg-white hover:bg-gray-200 mt-1 p-2 shadow rounded" href="">This is a notification</a>
    </div>
</div>


@endsection