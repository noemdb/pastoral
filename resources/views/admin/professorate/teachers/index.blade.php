<x-app-layout>    

    @include('admin.elements.professorate.navbar') 

    <div class="py-2">
        <div class="lg:px-8 mx-auto sm:px-6 lg:px-8 border-gray-900 ">
            <div class="bg-white  sm:rounded-lg border-gray-900 dark:bg-gray-800">

                <livewire:admin.professorate.teacher.list-component />
                {{-- /home/nuser/code/pastoral/resources/views/livewire/admin/professorate/teacher/list-component.blade.php --}}

            </div>
        </div>
    </div>
</x-app-layout>
