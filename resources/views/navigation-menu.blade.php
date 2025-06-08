<div id="sidebar" class="fixed inset-y-0 left-0 z-40 w-64 bg-white shadow-xl border-r border-gray-200 transform -translate-x-full transition-transform duration-300 ease-in-out lg:translate-x-0 lg:static lg:inset-0">
    <div class="flex flex-col h-full">
        <!-- Logo Section -->
        <div class="flex items-center justify-center h-16 px-4 bg-white border-b border-gray-200">
            <div class="flex items-center space-x-3">
                <!-- Logo Icon -->
                <div class="w-12 h-12 rounded-full flex items-center justify-center shadow-md">
                    <img src="{{ asset('logo/aqiqahlogo.png') }}" alt="logo usaha">
                </div>
                <!-- Logo Text -->
                <div class="text-gray-800">
                    <h1 class="text-lg font-bold">Aqiqah</h1>
                    <p class="text-xs text-gray-500">Dashboard Admin</p>
                </div>
            </div>
        </div>

        <!-- Navigation Menu -->
        <nav class="flex-1 px-4 py-6 space-y-2 overflow-y-auto">
            <!-- Dashboard -->
            <a href="{{ route('dashboard') }}" 
               class="flex items-center px-4 py-3 text-gray-700 rounded-lg hover:bg-green-50 hover:text-green-700 transition-colors duration-200 {{ request()->routeIs('dashboard') ? 'bg-green-50 text-green-700 border-l-4 border-green-500' : '' }}">
                <svg class="w-5 h-5 mr-3 {{ request()->routeIs('dashboard') ? 'text-green-600' : 'text-gray-500' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5v4m8-4v4" />
                </svg>
                <span class="font-medium">Dashboard</span>
            </a>

            <!-- Menu Divider -->
            <div class="border-t border-gray-200 my-4"></div>
            <p class="px-4 text-xs font-semibold text-gray-400 uppercase tracking-wider">Produk</p>

            <!-- Aqiqah -->
            <a href="{{ route('aqiqah-list') }}" 
               class="flex items-center px-4 py-3 text-gray-700 rounded-lg hover:bg-green-50 hover:text-green-700 transition-colors duration-200 {{ request()->routeIs('aqiqah-list') ? 'bg-green-50 text-green-700 border-l-4 border-green-500' : '' }}">
                <svg class="w-5 h-5 mr-3 {{ request()->routeIs('aqiqah-list') ? 'text-green-600' : 'text-gray-500' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                </svg>
                <span class="font-medium">Paket Aqiqah</span>
            </a>

            <!-- Nasi Box -->
            <a href="{{ route('nasi-box-list') }}" 
               class="flex items-center px-4 py-3 text-gray-700 rounded-lg hover:bg-green-50 hover:text-green-700 transition-colors duration-200 {{ request()->routeIs('nasi-box-list') ? 'bg-green-50 text-green-700 border-l-4 border-green-500' : '' }}">
                <svg class="w-5 h-5 mr-3 {{ request()->routeIs('nasi-box-list') ? 'text-green-600' : 'text-gray-500' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                </svg>
                <span class="font-medium">Nasi Box</span>
            </a>

            <!-- Menu Divider -->
            <div class="border-t border-gray-200 my-4"></div>
            <p class="px-4 text-xs font-semibold text-gray-400 uppercase tracking-wider">Transaksi</p>

            <!-- Transactions -->
            <a href="{{ route('transaction-list') }}" 
               class="flex items-center px-4 py-3 text-gray-700 rounded-lg hover:bg-green-50 hover:text-green-700 transition-colors duration-200 {{ request()->routeIs('transaction-list') || request()->routeIs('transaction-detail') ? 'bg-green-50 text-green-700 border-l-4 border-green-500' : '' }}">
                <svg class="w-5 h-5 mr-3 {{ request()->routeIs('transaction-list') || request()->routeIs('transaction-detail') ? 'text-green-600' : 'text-gray-500' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                </svg>
                <span class="font-medium">Transaksi</span>
            </a>

            <!-- Menu Divider -->
            <div class="border-t border-gray-200 my-4"></div>
            <p class="px-4 text-xs font-semibold text-gray-400 uppercase tracking-wider">Konten</p>

            <!-- Articles -->
            <a href="{{ route('article-list') }}" 
               class="flex items-center px-4 py-3 text-gray-700 rounded-lg hover:bg-green-50 hover:text-green-700 transition-colors duration-200 {{ request()->routeIs('article-list') ? 'bg-green-50 text-green-700 border-l-4 border-green-500' : '' }}">
                <svg class="w-5 h-5 mr-3 {{ request()->routeIs('article-list') ? 'text-green-600' : 'text-gray-500' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                </svg>
                <span class="font-medium">Artikel</span>
            </a>

            <!-- Category Articles -->
            <a href="{{ route('category-article-list') }}" 
               class="flex items-center px-4 py-3 text-gray-700 rounded-lg hover:bg-green-50 hover:text-green-700 transition-colors duration-200 {{ request()->routeIs('category-article-list') ? 'bg-green-50 text-green-700 border-l-4 border-green-500' : '' }}">
                <svg class="w-5 h-5 mr-3 {{ request()->routeIs('category-article-list') ? 'text-green-600' : 'text-gray-500' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                </svg>
                <span class="font-medium">Kategori Artikel</span>
            </a>
        </nav>
    </div>
</div>