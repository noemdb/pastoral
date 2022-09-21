<div>

    <div class=" text-right mb-4 ml-4 text-lg leading-7 font-semibold dark:text-gray-100">
        Institucines
    </div>

    @if ($modeEdit)

        <div class="animate__animated animate__fadeIn mb-4 pb-4">
            @include('livewire.admin.institution.pastoral.form.edit')
        </div>

    @endif

    <div class="m-4 p-4">
        @include('livewire.admin.institution.pastoral.table.index')
    </div>


</div>
