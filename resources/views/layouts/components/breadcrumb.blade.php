<ul class="flex gap-2">
    <li>
        @if ($subPages ?? '')
           <a href="{{ route('dashboard') }}" class="text-yellow-600 hover:text-yellow-800">{{ $page }}</a>             
        @else
            {{ $page }}            
        @endif
    </li>
    @if ($subPages ?? '')
        @foreach ($subPages as $subPage)
            <li> / </li>
            <li>{{ $subPage }}</li>
        @endforeach
    @endif
</ul>