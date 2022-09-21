{{-- <div class="w-full"> --}}
<div class="p-2 m-2 shadow">
    <div class="flex justify-end">
        <button type="button"  wire:click="closeEditMode" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 dark:bg-gray-900 ">
            <span class="sr-only">Close menu</span>
            <!-- Heroicon name: outline/x -->
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
    <form wire:submit.prevent="save">
        <div class="flex justify-between">
            <h1 class="block font-semibold text-lg text-gray-700 dark:text-gray-100">Edición de datos de la institución</h1>
            <div wire:loading class="text-gray-400 text-sm"> Cargando... </div>
        </div>

        @include('livewire.admin.institution.pastoral.form.fields')

        {{-- <button type="submit">Save</button> --}}
        <x-jet-button type="submit" class="ml-1 bg-green-500 " :disabled="$errors->any()" > {{ __('Enviar') }} </x-jet-button>

    </form>

    <x-jet-validation-errors class="mb-4" />
</div>

{{-- </div> --}}
