@extends('layouts.admin.layout')
@section('title')
<title>Wallet | Admin Panel</title>
@endsection
@section('content')

<div class="flex justify-center lg:w-1/3 " >
  
  <div class="w-full ">
    <div class="text-2xl text-gray-600 font-bold  bg-white p-4 flex justify-between mb-2 rounded shadow">
      <p>Balance</p>
      <p>12500 bdt</p>
    </div>
    <button class="bg-green-400 hover:bg-green-500 px-4 py-2 text-white mb-5 focus:outline-none">Withdraw</button>
    <p>Transactions</p>
    <div class="divide-y divide-gray-100 rounded shadow ">
      <div class="bg-white p-4 flex justify-between ">
        <p class="text-red-400">Withdraw</p>
        <p class="text-red-400">3000 bdt</p>
      </div> 
      <div class="bg-white p-4 flex justify-between ">
        <p class="text-green-400">Appointment 994</p>
        <p class="text-green-400">500 bdt</p>
      </div>
      <div class="bg-white p-4 flex justify-between">
        <p class="text-red-400">Withdraw</p>
        <p class="text-red-400">3000 bdt</p>
      </div> 
      <div class="bg-white p-4 flex justify-between">
        <p class="text-green-400">Appointment 1101</p>
        <p class="text-green-400">500 bdt</p>
      </div>

    </div>
       
  </div>   
</div>


@endsection