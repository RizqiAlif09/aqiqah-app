@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-2">Total Orders</h2>
            <p class="text-3xl text-blue-600">{{ $totalOrders }}</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-2">Total Packages</h2>
            <p class="text-3xl text-green-600">{{ $totalPackages }}</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-2">Total Revenue</h2>
            <p class="text-3xl text-purple-600">Rp {{ number_format($totalRevenue, 2, ',', '.') }}</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md md:col-span-3">
            <h2 class="text-xl font-semibold mb-2">Most Popular Package</h2>
            @if ($mostPopularPackage && $mostPopularPackage->package)
                <p class="text-2xl text-yellow-600">{{ $mostPopularPackage->package->name }} ({{ $mostPopularPackage->total }} orders)</p>
            @else
                <p class="text-lg text-gray-600">No orders yet to determine popular package.</p>
            @endif
        </div>
    </div>
@endsection