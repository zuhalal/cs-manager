<nav class="flex flex-col gap-2 px-4 py-2 text-white">
   @include('layouts.components.sidenavLink', [
       'section' => 'Dashboard',
       'icon' => 'tachometer-alt'
   ])
    @include('layouts.components.sidenavLink', [
        'section' => 'Operator',
        'icon' => 'user'
    ])
</nav>