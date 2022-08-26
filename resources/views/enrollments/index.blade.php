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


    {{-- <div class="py-12"> --}}
        {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> --}}
            {{-- <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg"> --}}



                {{-- <x-jet-authentication-card> --}}

                    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
                        {{-- <x-slot name="logo"> --}}
                            <x-app-logo />
                        {{-- </x-slot> --}}

                        <div class="w-full sm:max-w-xl mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">

                            <form method="POST" action="{{ route('enrollments.store') }}">
                                @csrf

                                @include('enrollments.form.partials.pastorals')

                                <hr class="mb-2">

                                @include('enrollments.form.partials.estudiants')

                                {{-- <hr> --}}

                                {{-- @include('enrollments.form.partials.estudiants') --}}

                                <div class="flex items-center justify-end mt-4">
                                    <x-jet-button class="ml-4">
                                        {{ __('Registrar') }}
                                    </x-jet-button>
                                </div>
                            </form>

                        </div>



                    </div>

                {{-- </x-jet-authentication-card> --}}
            {{-- </div> --}}
        {{-- </div> --}}
    {{-- </div> --}}

    


    {{-- <div x-data="{ show: false }">
        <button @click="show = !show">Show</button>
        <h1 x-show="show">Alpine Js is working !</h1>
    </div>
    <hr>

    <div x-data>
        <button @click="alert('Alpine Js is working !')">Click</button>
    </div> --}}


</x-enrollment.app-layout>



