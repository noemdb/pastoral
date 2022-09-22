<x-app-layout>

    @include('admin.elements.navbar')

    <div class="py-2">
        <div class="max-w-7xl  mx-auto sm:px-6 lg:px-8 border-gray-900 ">
            <div class="bg-white  sm:rounded-lg border-gray-900 dark:bg-gray-800">

                {{-- <div class=" text-right mb-4 ml-4 pl-4 pr-4 mr-4 text-lg leading-7 font-semibold dark:text-gray-100">
                    Instituciones
                </div> --}}

                <div class="px-2">
                	<livewire:admin.institution.pastoral.list-component /> 
                </div>


            </div>
        </div>
    </div>
</x-app-layout>
