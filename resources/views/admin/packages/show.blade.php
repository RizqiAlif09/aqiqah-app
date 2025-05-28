@extends('layouts.admin')

@section('title', 'Package Details')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Package Details: {{ $package->name }}</h2>

        <div class="mb-4">
            <p class="text-gray-700"><strong class="font-bold">Name:</strong> {{ $package->name }}</p>
        </div>
        <div class="mb-4">
            <p class="text-gray-700"><strong class="font-bold">Description:</strong> {{ $package->description ?? 'N/A' }}</p>
        </div>
        <div class="mb-6">
            <p class="text-gray-700"><strong class="font-bold">Price:</strong> Rp {{ number_format($package->price, 2, ',', '.') }}</p>
        </div>

        <div class="flex items-center">
            <a href="{{ route('admin.packages.edit', $package) }}" class="bg-yellow-600 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded mr-2">Edit</a>
            <form action="{{ route('admin.packages.destroy', $package) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this package?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
            </form>
            <a href="{{ route('admin.packages.index') }}" class="ml-4 text-blue-600 hover:text-blue-800">Back to Packages</a>
        </div>
    </div>
@endsection