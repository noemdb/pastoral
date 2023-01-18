<div class="p-2 m-2 rounded shadow bg-gray-100 dark:bg-gray-800 ">
    <div class="flex justify-between">
        <div class="flex justify-between w1/2">
            <h1 class="block font-semibold text-lg text-gray-700 dark:text-gray-100">Registrar <span class="text-gray-500">Inscripción.</span></h1>
        </div>
        <button type="button" @click="open = false" wire:click="close" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 dark:bg-gray-900 ">
            <span class="sr-only">Cerrar</span>
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
    <form wire:submit.prevent="saveInscription">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <fieldset {{ ($representant_exist) ? 'disabled="disabled"' : null}} >
                @if ($representant_exist) <div class=" font-bold text-red-200 text-right mr-4">La CI de este responsable ya se encuentra asociada en la base de datos</div> @endif
                <div class="{{ ($representant_exist) ? 'opacity-40' : null}} ">
                    @include('livewire.admin.competitor.enrollment.form.representants.fields')
                </div>
            </fieldset>

            <fieldset {{ ($estudiant_exist) ? 'disabled="disabled"' : null}} >
                @if ($estudiant_exist) <div class=" font-bold text-cyan-300 text-right mr-4">La CI de este participante ya se encuentra asociada en la base de datos</div> @endif
                <div class="{{ ($estudiant_exist) ? 'opacity-40' : null}} ">
                    <div>@include('livewire.admin.competitor.enrollment.form.estudiants.fields')</div>
                </div>
            </fieldset>

        </div>

        <div class="grid grid-cols-1 gap-4">
            <fieldset {{ ($inscription_exist) ? 'disabled="disabled"' : null}} >
                @if ($inscription_exist)
                    <div class=" font-bold text-indigo-300 text-right mr-4">Este participante ya se encuentra asociado a un proceso de inscripción</div>
                @else
                    <div>@include('livewire.admin.competitor.enrollment.form.inscriptions.fields')</div>
                @endif

                {{-- @if ($inscription_exist) <div class=" font-bold text-indigo-300 text-right mr-4">Este participante ya se encuentra asociada a un proceso de inscripción</div> @endif --}}
                {{-- <div class="{{ ($inscription_exist) ? 'opacity-40' : null}} "></div> --}}

            </fieldset>

            {{-- <div>@include('livewire.admin.competitor.enrollment.form.inscriptions.fields')</div> --}}
        </div>

    </form>

    <x-jet-validation-errors class="mb-4" />
</div>
