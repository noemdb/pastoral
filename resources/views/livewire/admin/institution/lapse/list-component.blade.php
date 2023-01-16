<div>

        <div class="flex justify-between pt-2">

            <div class="text-right mb-4 ml-4 text-lg leading-7 font-semibold dark:text-gray-100">
                <div class="flex justify-start pt-2">
                    <x-icon-calendar class="w-6 h-6 mr-0.5" />
                    <div class="mr-2">Programas de Formación</div>
                </div>
            </div>

            <div>
                <div wire:loading class="text-black font-semibold fixed	 bottom-0 right-0 z-10 bg-white rounded border shadow mr-2 mb-2 dark:text-gray-100"> Cargando... </div>
                <x-jet-button type="button" class="mx-1 bg-blue-900 shadow w-8 h-8 !p-0 flex justify-center items-center shadow" wire:click="create">
                    <x-icon-plus class="w-4 h-4" />
                </x-jet-button>

            </div>

        </div>

        @if ($modeEdit)

            <div class="mb-4 pb-4">
                @include('livewire.admin.institution.lapse.form.edit')
            </div>

        @endif


        @if ($modeCreate)

            <div class="mb-4 pb-4">
                @include('livewire.admin.institution.lapse.form.create')
            </div>

        @endif



        <div class="mx-4 px-4">
            @include('livewire.admin.institution.lapse.table.index')
        </div>


    </div>
