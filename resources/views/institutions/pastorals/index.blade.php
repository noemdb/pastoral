<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Instituciones') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="m-1 p-1">
                    @livewire('institutions.pastorals.list-component')
                    {{-- <livewire:nav.show-posts /> --}}
                    {{-- <livewire:user-table/> --}}
                    {{-- <livewire:pastoral-table/> --}}
                </div>
                {{-- <x-jet-welcome /> --}}
            </div>
        </div>
    </div>
</x-app-layout>
