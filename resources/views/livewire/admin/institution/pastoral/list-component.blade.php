<div>

    <div class="flex justify-between pt-2">

        <div class=" text-right mb-4 ml-4 text-lg leading-7 font-semibold dark:text-gray-100">
            <div class="flex justify-start pt-2">
                {{-- <x-fas-cloud class="mr-2 w-6 h-6 text-gray-500" style="color: #555" /> --}}
                <x-icon-building class="w-6 h-6 mr-0.5" />
                <div class="mr-2">Instituciones</div>
            </div>
        </div>

        <x-jet-button type="button" class="mx-1 bg-blue-900 shadow w-8 h-8 !p-0 flex justify-center items-center shadow" wire:click="create">
            <x-icon-plus class="w-4 h-4 " />
        </x-jet-button>

    </div>


    @if ($modeEdit)

        <div class="mb-4 pb-4">
            @include('livewire.admin.institution.pastoral.form.tab.edit')
        </div>

    @endif

    @if ($modeCreate)

        <div class="mb-4 pb-4">
            @include('livewire.admin.institution.pastoral.form.tab.create')
        </div>

    @endif

    <div class="mx-4 px-4">
        @include('livewire.admin.institution.pastoral.table.index')
    </div>





</div>
