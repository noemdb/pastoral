<x-app-layout>

    @include('admin.elements.navbar')

    <div class="py-2">
        {{-- <div class="lg:px-8 mx-auto sm:px-6 lg:px-8 border-gray-900 "> --}}
        <div class="lg:px-8 mx-auto sm:px-6 lg:px-8 border-gray-900 ">
            <div class="bg-white  sm:rounded-lg border-gray-900 dark:bg-gray-800">

                <div class="px-2">
                	<livewire:admin.institution.pastoral.list-component /> 
                </div>


            </div>
        </div>
    </div>
</x-app-layout>
