<div wire:key="institution">

    <div class="animate__animated animate__fadeIn" >

        <div class="flex justify-start mb-4 ml-4 text-lg leading-7 font-semibold dark:text-gray-100">
            <x-icon-text-snippet class="w-6 h-6 mr-0.5" /> Carta compromiso.
        </div>

        <div class="mb-4 ">
            @if ($curriculum)
                @if ($curriculum->txt_contract_study)
                    {!!$curriculum->txt_contract_study ?? null !!}
                @else
                <div class="bg-yellow-100 rounded-lg py-5 px-6 mb-4 text-base text-yellow-700 mb-3" role="alert">No hay una carta compromiso registrada.</div>
                @endif
            @else
            <div class="bg-red-100 rounded-lg py-5 px-6 mb-4 text-base text-red-700 mb-3" role="alert">Seleccione un plan de formación.</div>
            @endif


        </div>

    </div>

</div>
