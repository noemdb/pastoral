<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
        <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->

        <link rel="stylesheet" href="{{ asset('vendor/tw-starter/1.0.0/css/index.min.css') }}" />
        {{-- vendor/tw-starter/1.0.0/css/index.min.css --}}

        {{-- @fcStyles --}}
        @livewireStyles

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    </head>
    <body class="font-sans antialiased">

        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <!-- <x-app-logo /> -->
                {{ $header }}
            </div>
        </header>

        <!-- <x-app-logo /> -->

        <main>
            {{ $slot }}
        </main>

        @stack('modals')        

        {{-- <script type="text/javascript" src="{{ asset('vendor/tw-starter/1.0.0/js/index.min.js') }}"></script> --}}

        @stack('scripts')

        @livewireScripts

        <script src="{{ asset('js/app.js') }}"></script>

        {{-- livewire-ui-modal --}}
        {{-- @livewire('livewire-ui-modal') --}}

        {{-- @fcScripts --}}


    </body>
</html>
