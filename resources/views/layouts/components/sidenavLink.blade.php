<a href="@if($section == 'Dashboard')
    {{ route(strtolower($section)) }}
@else
    {{ route(strtolower($section).'.index') }}
@endif " class="flex items-center gap-3 py-2 pl-4 transition duration-200 ease-in-out rounded-lg hover:bg-yellow-600        
@if(request()->segment(1) == strtolower($section))
    bg-yellow-600
@endif">
    <i class="fas fa-{{ $icon }} fa-lg"></i>
    <span class="text-lg font-semibold">{{ $section }}</span>
</a>