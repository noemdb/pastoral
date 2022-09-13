<x-enrollment.app-layout>

    @section('title', 'Preinscripciones')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Preinscripciones
        </h2>
    </x-slot>

    <x-slot name="logo">
        <x-app-logo />
    </x-slot>

    <div>

    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <x-app-logo />

        <div class="w-full sm:max-w-xl mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg border-solid border-4 border-light-blue-500">

            <livewire:preincription.enrollment.list-component />

        </div>

    </div>


</x-enrollment.app-layout>

