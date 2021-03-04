<aside class="flex flex-col w-1/6 gap-4 bg-blue-600">
    <div class="py-6 text-center">
        <a href="{{ route('dashboard') }}" class="text-3xl font-extrabold text-white">CS Manager</a>
    </div>
    <nav class="px-4 py-2 text-white">
        <a href="{{ route('dashboard') }}" class="flex items-center gap-3 py-2 pl-4 transition duration-200 ease-in-out rounded-lg hover:bg-yellow-600        
        @if(request()->segment(1) == 'dashboard')
            bg-yellow-600
        @endif">
            <i class="fas fa-tachometer-alt fa-lg"></i>
            <span class="text-lg font-semibold">Dashboard</span>
        </a>
    </nav>
</aside>