<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-touch-fullscreen" content="yes">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Frontend | {{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- Styles -->
        @stack('prestyles')
        @stack('sufstyles')
    </head>
    <body class="frontend-layout">
        <div id="app">
            <!-- Site Header -->
            @include('frontend._partials.header')

            <!-- Site Main -->
            <main class="site__main">
                {{ $slot }}
            </main>

            @include('frontend._partials.footer')
        </div>

        <!-- Scripts -->
        @stack('prescripts')
        {{-- <script src="{{ asset('js/backend/lang/' . app()->getLocale() . '.js?v=' . env('APP_VERSION')) }}"></script> --}}
        @vite(['resources/js/frontend/app.js'])
        @stack('sufscripts')
    </body>
</html>
