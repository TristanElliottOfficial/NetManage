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
        <!-- Main Layout Start -->
            <div class="flex h-screen">
            <!-- Main Layout Sidebar Component Start -->
                <aside class="w-64 border-r">

                <!-- Sidebar Brand Component Start -->
                    <div class="block w-full px-4 py-4">
                        <a href="#" class="block text-2xl font-light text-gray-600 transition duration-200 ease-in-out hover:text-blue-600">Laravel</a>
                    </div>
                <!-- Sidebar Brand Component End -->

                <!-- Sidebar Menu Component Start -->
                    <div class="block w-full mt-2">
                        <h4 class="px-4 py-3 text-xs font-light text-blue-600 uppercase bg-blue-50">Menu Heading</h4>
                        <nav class="block">
                            <a href="#" class="block w-full px-4 py-2 font-light text-gray-700 transition duration-150 ease-in-out hover:bg-blue-500 hover:text-blue-100">Link</a>
                        </nav>
                    </div>
                <!-- Sidebar Menu Component End -->

                </aside>
            <!-- Main Layout Sidebar Component End -->

                <main class="flex-1">
                    @yield('content')
                </main>

            </div>
        <!-- Main Layout End -->
    </div>
</body>
</html>
