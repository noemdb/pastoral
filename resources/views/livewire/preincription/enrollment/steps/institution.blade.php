<div class="animate__animated animate__fadeInDown" >

    <div class="mb-4 ml-4 text-lg leading-7 font-semibold">
        Institución
    </div>
    
    {{-- <hr class=" my-1"> --}}
    
    <div>
        <x-jet-label for="pastoral_id" value="{{ __($comment_enrollment['pastoral_id']) }}" />    
        <x-select name="pastoral_id" id="pastoral_id" wire:model="pastoral_id" wire:change="loadInstitution($event.target.value)" :options="$pastorals_list" class=" w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" />
    </div>

    @if ($pastoral)
        <div class=" text-gray-400 text-sm">
            <div>{{ $pastoral->description }}</div>
            <div>{{ $pastoral->legalname }}</div>
            <div>{{ $pastoral->rif_institution }}</div>
            <div>{{ $pastoral->address }}</div>
        </div>
        <div>
            <x-jet-label for="levels" value="{{ __($comment_enrollment['levels']) }}" />    
            <x-select name="levels" id="levels" wire:model="levels" :options="$pescolars_list" class=" w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" />
        </div>
    @endif
    

    
</div>