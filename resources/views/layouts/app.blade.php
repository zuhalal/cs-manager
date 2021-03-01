<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>
        CS Manager | @yield('title')
    </title>
</head>
<body>
    <main class="w-full h-screen">
        @yield('content')
    </main>

    @stack('scripts')    
    @push('scripts')
        <script src="{{ asset('js/app.js') }}"></script>
    @endpush
</body>
</html>