<div>

    <div class="flex justify-between pt-2">

        <div class=" text-right mb-4 ml-4 text-lg leading-7 font-semibold dark:text-gray-100">
            Instituciones
        </div>

        <x-jet-button type="button" class="ml-1 bg-blue-900 shadow" wire:click="create"> + </x-jet-button>

    </div>

    @if ($modeEdit)

        <div class="animate__animated animate__fadeIn mb-4 pb-4">
            @include('livewire.admin.institution.pastoral.form.edit')
        </div>

    @endif

    @if ($modeCreate)

        <div class="animate__animated animate__fadeIn mb-4 pb-4">
            @include('livewire.admin.institution.pastoral.form.create')
        </div>

    @endif

    <div class="m-4 p-4">
        @include('livewire.admin.institution.pastoral.table.index')
    </div>


</div>
