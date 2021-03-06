<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>
        CS Manager | @yield('title')
    </title>
</head>
<body class="font-serif">
    <main class="w-full h-screen @auth flex bg-gray-200 @endauth">
        @guest
            @yield('guestContent')
        @endguest
        @auth
            @include('layouts.components.sidebar')
            <div class="flex flex-col w-5/6">
                @include('layouts.components.navbar', [
                    'username' => Auth::user()->name
                ])                
                <div class="flex flex-col h-full gap-3 p-6">
                    @yield('head')
                    @yield('authContent')
                </div>
            </div>
        @endauth
    </main>

    @stack('scripts')    
    @push('scripts')
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js" integrity="sha512-UwcC/iaz5ziHX7V6LjSKaXgCuRRqbTp1QHpbOJ4l1nw2/boCfZ2KlFIqBUA/uRVF0onbREnY9do8rM/uT/ilqw==" crossorigin="anonymous"></script>
    @endpush
</body>
</html>