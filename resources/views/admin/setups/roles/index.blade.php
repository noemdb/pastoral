<x-app-layout>    

    @include('admin.elements.setups.navbar') 

    <div class="py-2">
        <div class="lg:px-8 mx-auto sm:px-6 lg:px-8 border-gray-900 ">
            <div class="bg-white  sm:rounded-lg border-gray-900 dark:bg-gray-800">

                {{-- <div>Roles</div> --}}

                <livewire:admin.setup.role.list-component />

                {{-- <livewire:admin.institution.authority.list-component /> --}}

            </div>
        </div>
    </div>
</x-app-layout>
