<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> --}}

        <!-- Styles -->
        @livewireStyles

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    </head>
    <body class="font-sans antialiased" x-data="{ darkMode: false }" x-init=" if (!('darkMode' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches) { localStorage.setItem('darkMode', JSON.stringify(true));} darkMode = JSON.parse(localStorage.getItem('darkMode')); $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))" x-cloak>

        <div x-bind:class="{'dark' : darkMode === true}" class="min-h-screen bg-gray-100">

            <x-jet-banner />

            <div class="min-h-screen bg-gray-200 shadow dark:bg-gray-900 dark:border-gray-700 dark:text-gray-100">

                @livewire('navigation-menu')

                <!-- Page Heading -->
                @if (isset($header))
                    <header class="bg-gray-200 shadow dark:bg-gray-600 dark:border-gray-700 dark:text-white">
                        <div class="max-w-7xl mx-auto py-1 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endif

                <!-- Page Content -->
                <main class="bg-gray-200 dark:bg-gray-900">
                    {{ $slot }}
                </main>
            </div>

        </div>

        @stack('modals')

        @livewireScripts

        <script type="text/javascript" src="{{ asset('vendor/livewire-alert/sweetalert2.js') }}"></script>

        <x-livewire-alert::scripts />

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
