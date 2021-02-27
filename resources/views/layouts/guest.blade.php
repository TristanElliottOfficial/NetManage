<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <!-- Authentication Guest Layout Start -->
        <div class="flex items-center justify-center bg-gray-200 h-screen">
            <div class="w-1/3">

            <!-- Authentication Error Alert Container Component Start -->
                <div class="block mb-3">
                    @if (Session::has('status'))
                        <v-auth-alert text="{{ $message }}"></v-auth-alert>
                    @endif
                </div>
            <!-- Authentication Error Alert Container Component End -->

            @yield('content')
            </div>
        </div>
        <!-- Authentication Guest Layout End -->
    </div>
</body>
</html>
