<aside :class="sidebarOpen ? 'w-64' : 'hidden md:block md:w-20'" class="bg-gray-900 text-white flex flex-col transition-all duration-300">
    <div class="p-5 text-xl font-bold tracking-wider border-b border-gray-800 flex items-center justify-between">
        <a href="{{ route('home') }}">
            <span x-show="sidebarOpen">Crud Test</span>
            <span x-show="!sidebarOpen" class="mx-auto">CT</span>
        </a>
    </div>

    <nav class="flex-1 p-4 space-y-2">
        <a href="{{ route('products.index') }}" class="flex items-center px-4 py-2 rounded hover:bg-gray-800 transition">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
            </svg>
            <span x-show="sidebarOpen">Products</span>
        </a>

        <!-- <a href="{{ route('products.create') }}" class="flex items-center px-4 py-2 rounded hover:bg-gray-800 transition">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
            </svg>
            <span x-show="sidebarOpen">Add Products</span>
        </a> -->
    </nav>
</aside>