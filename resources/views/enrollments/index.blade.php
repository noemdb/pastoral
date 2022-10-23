<x-enrollment.app-layout>

    @section('title', 'Preinscripciones')

    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight"> --}}

            <div class="flex justify-between h-16">

                <div>
                    
                    <x-jet-nav-link href="{{ route('welcome') }}" :active="request()->routeIs('welcome')">
                            Inicio
                </x-jet-nav-link>
                </div>

                <div class="flex text-center">

                    <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-100">
                        Preinscripciones
                        <br>
                        <span class=" font-semibold text-gray-400 text-sm">Formación para el catesismo de Primera Comunión y Confirmación </span> 
                    </h2>

                    
                </div>

                <div class=" ml-2">
                    <x-mode-dark-btn /> 
                </div>

            </div>

    </x-slot>

    <x-slot name="logo">
        <x-app-logo />
    </x-slot>

    <div>

    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-100">
        <x-app-logo />

        <div class="w-full sm:max-w-xl mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg border-solid border-4 border-light-blue-500 dark:bg-gray-800 dark:border-gray-700">

            <livewire:preincription.enrollment.list-component />

        </div>

    </div>

</x-enrollment.app-layout>

