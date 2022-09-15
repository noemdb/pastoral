<div wire:key="institution">
    
    <div class="animate__animated animate__fadeIn" >


    {{-- <div  > --}}

        <div class="mb-4 ml-4 text-lg leading-7 font-semibold">
            Institución
        </div>
        
        {{-- <hr class=" my-1"> --}}
        
        <div class="mb-4">
            <x-jet-label for="pastoral_id" value="{{ __($comment_enrollment['pastoral_id']) }}" /> 
            <div wire:loading wire:target="loadInstitution" class=" text-gray-400 text-sm">Procesando {{ __($comment_enrollment['pastoral_id']) }}...</div>
            <x-select name="pastoral_id" id="pastoral_id" wire:model="pastoral_id" wire:change="loadInstitution($event.target.value)" :options="$pastorals_list" class=" w-full" />
            @error('pastoral_id') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

        @if ($pastoral)
            <div class=" text-gray-400 text-sm">
                <div>{{ $pastoral->description }}</div>
                <div>{{ $pastoral->legalname }}</div>
                <div>{{ $pastoral->rif_institution }}</div>
                <div>{{ $pastoral->address }}</div>
            </div>
            <div class="mb-4">
                <div wire:loading wire:target="loadCurriculum" class=" text-gray-400 text-sm">Procesando {{ __($comment_enrollment['curriculum_id']) }}...</div>
                <x-jet-label for="curriculum_id" value="{{ __($comment_enrollment['curriculum_id']) }}" />    
                <x-select name="curriculum_id" id="curriculum_id" wire:model="curriculum_id" wire:change="loadCurriculum($event.target.value)" :options="$curriculum_list" class=" w-full " />
                @error('curriculum_id') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
            </div>

            @if ($curriculum)
                <div class=" text-gray-400 text-sm">
                    <div>{{ $curriculum->name }}</div>
                    <div>{{ $curriculum->description }}</div>
                    <div>Capacidad: {{ $curriculum->capacity }}</div>
                </div>
            @endif

        @endif
               
    </div>


</div>