@extends('layouts.admin')

@section('title', 'Manage Packages')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-semibold">Packages List</h2>
            <a href="{{ route('admin.packages.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add New Package</a>
        </div>

        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">Name</th>
                    <th class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">Description</th>
                    <th class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">Price</th>
                    <th class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-center text-sm font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($packages as $package)
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-200">{{ $package->name }}</td>
                        <td class="py-2 px-4 border-b border-gray-200">{{ Str::limit($package->description, 50) }}</td>
                        <td class="py-2 px-4 border-b border-gray-200">Rp {{ number_format($package->price, 2, ',', '.') }}</td>
                        <td class="py-2 px-4 border-b border-gray-200 text-center">
                            <a href="{{ route('admin.packages.show', $package) }}" class="text-blue-600 hover:text-blue-900 mr-2">View</a>
                            <a href="{{ route('admin.packages.edit', $package) }}" class="text-yellow-600 hover:text-yellow-900 mr-2">Edit</a>
                            <form action="{{ route('admin.packages.destroy', $package) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this package?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="py-4 text-center text-gray-500">No packages found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection