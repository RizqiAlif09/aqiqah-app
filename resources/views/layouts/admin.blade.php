<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <div class="flex h-screen">
        <div class="w-64 bg-gray-800 text-white flex flex-col">
            <div class="p-4 text-2xl font-bold border-b border-gray-700">Admin Panel</div>
            <nav class="flex-grow">
                <a href="{{ route('admin.dashboard') }}" class="block py-2 px-4 hover:bg-gray-700 @if(request()->routeIs('admin.dashboard')) bg-gray-700 @endif">Dashboard</a>
                <a href="{{ route('admin.packages.index') }}" class="block py-2 px-4 hover:bg-gray-700 @if(request()->routeIs('admin.packages.*')) bg-gray-700 @endif">Packages</a>
                <a href="{{ route('admin.orders.index') }}" class="block py-2 px-4 hover:bg-gray-700 @if(request()->routeIs('admin.orders.*')) bg-gray-700 @endif">Orders</a>
            </nav>
            <div class="p-4 border-t border-gray-700">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full text-left py-2 px-4 bg-red-600 hover:bg-red-700 rounded">Logout</button>
                </form>
            </div>
        </div>

        <div class="flex-1 flex flex-col overflow-hidden">
            <header class="bg-white shadow p-4 flex justify-between items-center">
                <h1 class="text-2xl font-bold">@yield('title', 'Dashboard')</h1>
                <div>
                    <span class="text-gray-700">Hello, {{ Auth::user()->name ?? 'Admin' }}</span>
                </div>
            </header>
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200 p-6">
                @if (session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif

                @if (session('error'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                        <span class="block sm:inline">{{ session('error') }}</span>
                    </div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>