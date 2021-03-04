<nav class="flex justify-end w-full p-4">
    <div class="flex items-center gap-3">
        <a href="" class="flex items-center gap-3 px-4 py-2 transition duration-200 ease-in-out rounded-lg hover:text-blue-600">
            <i class="fas fa-user"></i>
            <span class="font-semibold">{{ $username }}</span>
        </a>
        <span class="text-2xl"> | </span>
        <form action="{{ route('auth.logout') }}" method="POST" >
            @csrf
            <button type="submit" class="flex items-center gap-3 px-4 py-2 font-semibold transition duration-200 ease-in-out rounded-lg hover:text-red-600 hover:cursor-pointer ">
                <i class="fas fa-power-off"></i>
                <span>Logout</span>
            </button>
        </form>
    </div>
</nav>