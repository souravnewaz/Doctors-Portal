@extends('layouts.user.layout')
@section('title')
<title>Appointment</title>
@endsection

@section('content')

<p class="text-green-400">{{ session('success') }}</p>



<div class="bg-gray-200 p-3">
    <p class="font-bold text-xl mt-3 mb-5">My appointments </p>
    @if($appointments)
    @foreach($appointments as $appointment)
    <div class="bg-white rounded shadow p-3 mb-3">
        <p>Appointment ID: {{ $appointment->id }}</p>
        <p>Doctor Name: {{ $appointment->doctor }}</p>
        <p>Patient Name: {{ $appointment->user }}</p>
        <p>Date: {{ $appointment->date }}</p>
        <p>Status: {{ $appointment->status }}</p>
    </div>
    @endforeach
    @endif
    <p class="font-bold text-xl mt-3 mb-5">Appointment History</p>
    @if($appointments_completed)
    @foreach($appointments_completed as $appointment)
    <div class="bg-white rounded shadow p-3 mb-3">
        <p>Appointment ID: {{ $appointment->id }}</p>
        <p>Doctor Name: {{ $appointment->doctor }}</p>
        <p>Patient Name: {{ $appointment->user }}</p>
        <p>Date: {{ $appointment->date }}</p>
        <p class="mb-2">Status: {{ $appointment->status }}</p>
        <a class="bg-blue-400 hover:bg-blue-500 text-white px-4 py-2 rounded" href="/review-create/{{ $appointment->id }}">Give a Feedback</a>
    </div>
    @endforeach
    @endif
</div>
    

@endsection