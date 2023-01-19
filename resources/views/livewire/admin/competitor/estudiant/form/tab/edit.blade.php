<div class="p-2 m-2 rounded shadow bg-gray-100 dark:bg-gray-800 ">
    <div class="flex justify-between">
        <div class="flex justify-between w1/2">
            <h1 class="block font-semibold text-lg text-gray-700 dark:text-gray-100">Edición de datos del catequizando</h1>
        </div>
        <button type="button" wire:click="closeEditMode" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 dark:bg-gray-900 ">
            <span class="sr-only">Cerrar</span>
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
    <div class="p-1 m-1 rounded shadow bg-white dark:bg-gray-800">
        <form wire:submit.prevent="save">

            @include('livewire.admin.competitor.estudiant.form.tab.main')

            <hr class="my-1">

            <div class="flex justify-between">
                <x-jet-button type="submit" class="ml-1 bg-green-500 shadow" :disabled="$errors->any()" > {{ __('Enviar') }} </x-jet-button>                {{-- <x-jet-button type="submit" class="ml-1 bg-green-500 shadow"> {{ __('Enviar') }} </x-jet-button> --}}
                <x-jet-button type="button" class="ml-1 bg-gray-900 shadow" wire:click="closeEditMode"> {{ __('Cerrar') }} </x-jet-button>
            </div>

        </form>
    </div>

    <x-jet-validation-errors class="mb-4" />
</div>

