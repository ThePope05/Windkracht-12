<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,1,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,1,0" />

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm h-12 flex flex-row justify-between">
            <div class="container w-max">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>

            <div class="container w-max flex flex-row">
                @guest
                <a class="text-right" href="{{ route('auth.login') }}">
                    Login
                </a>
                <a class="text-right" href="{{ route('auth.register') }}">
                    Register
                </a>
                @endguest

                @auth

                @if (Auth::user()->role === 'owner')

                <a class="text-right" href="{{ route('dashboard') }}">
                    Dashboard
                </a>

                @endif

                <a class="text-right" href="{{ route('auth.logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <a class="text-right" href="{{ route('auth.profile.edit') }}">
                    Profile
                </a>

                <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                @endauth
            </div>
        </nav>

        <main class="py-4">
            {{ $slot }}
        </main>
    </div>
</body>

</html>