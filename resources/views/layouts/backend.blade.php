<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-touch-fullscreen" content="yes">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Backend | {{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- Styles -->
        @stack('prestyles')
        <link rel="stylesheet" href="{{ asset('vendor/laraberg/css/laraberg.css?v=' . env('APP_VERSION')) }}">
        @stack('sufstyles')
    </head>
    <body class="backend-layout">
        <div id="app">
            @include('backend._partials.sidebar')

            <div class="app__main">
                <div class="app__main__wrapper">

                    <!-- App Header -->
                    @include('backend._partials.header')

                    <!-- Breadcrumbs -->
                    {{-- {{ Breadcrumbs::render() }} --}}

                    <!-- App Main Content -->
                    <main class="app__content">
                        {{ $slot }}
                    </main>
                </div>

                <!-- App Footer -->
                @include('backend._partials.footer')
            </div>
        </div>

        <!-- Scripts -->
        @stack('prescripts')
        {{-- <script crossorigin src="https://unpkg.com/react@17/umd/react.development.js"></script>
        <script crossorigin src="https://unpkg.com/react-dom@17/umd/react-dom.development.js"></script>
        <script src="{{ asset('vendor/laraberg/js/laraberg.js?v=' . env('APP_VERSION')) }}"></script> --}}
        <script src="{{ asset('vendor/tinymce/tinymce.min.js?v=' . env('APP_VERSION')) }}"></script>
        {{-- <script src="{{ asset('js/backend/lang/' . app()->getLocale() . '.js?v=' . env('APP_VERSION')) }}"></script> --}}
        {{-- @vite(['resources/js/react/app.js']) --}}
        @vite(['resources/js/backend/app.js'])
        @stack('sufscripts')
    </body>
</html>

