@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')

<h1 class="text-3xl font-bold mb-4">Admin Dashboard</h1>

<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
    <div class="bg-white p-4 rounded shadow">Total Businesses<br><span class="text-2xl font-semibold">--</span></div>
    <div class="bg-white p-4 rounded shadow">Total Appointments<br><span class="text-2xl font-semibold">--</span></div>
    <div class="bg-white p-4 rounded shadow">Revenue<br><span class="text-2xl font-semibold">--</span></div>
</div>

@endsection