<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
        <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>

        <!-- Fonts -->
        {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> --}}

        <!-- Styles -->

        <link rel="stylesheet" href="{{ asset('vendor/tw-starter/1.0.0/css/index.min.css') }}" />

        {{-- @fcStyles --}}

        @livewireStyles

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    </head>
    <body class="font-sans antialiased" x-data="{ darkMode: false }" x-init=" if (!('darkMode' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches) { localStorage.setItem('darkMode', JSON.stringify(true));} darkMode = JSON.parse(localStorage.getItem('darkMode')); $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))" x-cloak>
        
        <div x-bind:class="{'dark' : darkMode === true}" class="min-h-screen bg-gray-100">

            {{-- <header class="bg-white shadow dark:bg-gray-800"> --}}
                {{-- <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8"> --}}
                    <!-- <x-app-logo /> -->
                    {{-- {{ $header }} --}}
                {{-- </div> --}}
            {{-- </header> --}}

            <header class="bg-white shadow dark:bg-gray-800">
                <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- <x-app-logo /> -->

            {{-- <main class="bg-gray-100 dark:bg-gray-800">
                {{ $slot }}
            </main> --}}

            <!-- Page Content -->
            <main class="bg-gray-100 dark:bg-gray-800">
                {{ $slot }}
            </main>

        </div>

        @stack('modals')  

        <script type="text/javascript" src="{{ asset('vendor/tw-starter/1.0.0/js/index.min.js') }}"></script>

        @stack('scripts')

        @livewireScripts

        {{-- @fcScripts --}}

        <script type="text/javascript" src="{{ asset('vendor/livewire-alert/sweetalert2.js') }}"></script>
  
        <x-livewire-alert::scripts />

        <script src="{{ asset('js/app.js') }}"></script>


    </body>
</html>
