<aside class="flex flex-col w-1/6 bg-blue-600">
    <div class="py-4 text-center">
        <a href="{{ route('dashboard') }}" class="text-3xl font-bold text-white">CS Manager</a>
    </div>
    <nav class="py-2 text-white">
        <a href="{{ route('dashboard') }}" class="flex items-center gap-3 py-2 pl-4 transition duration-200 ease-in-out hover:bg-blue-800        
        @if(request()->segment(2) == null)
            bg-blue-800
        @endif">
            <i class="fas fa-tachometer-alt fa-lg"></i>
            <span class="text-lg font-semibold">Dashboard</span>
        </a>
    </nav>
</aside>