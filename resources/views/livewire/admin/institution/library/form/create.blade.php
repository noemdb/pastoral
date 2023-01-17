<div class="p-2 m-2 rounded shadow bg-gray-100 dark:bg-gray-800 ">
    <div class="flex justify-between">
        <div class="flex justify-between w1/2">
            <h1 class="block font-semibold text-lg text-gray-700 dark:text-gray-100">Registrar <span class="text-gray-500">Libro.</span></h1>
        </div>
        <button type="button" wire:click="close" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 dark:bg-gray-900 ">
            <span class="sr-only">Cerrar</span>
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
    <form wire:submit.prevent="save">


        @include('livewire.admin.institution.library.form.fields')
        {{-- /home/nuser/code/pastoral/resources/views/livewire/admin/institution/library/form/fields.blade.php --}}

        <div class="flex justify-between">
            <x-jet-button type="submit" class="ml-1 bg-green-500 shadow" > {{ __('Enviar') }} </x-jet-button>
            <x-jet-button type="button" class="ml-1 bg-gray-900 shadow" wire:click="close"> {{ __('Cerrar') }} </x-jet-button>
        </div>

    </form>

    <x-jet-validation-errors class="mb-4" />
</div>
