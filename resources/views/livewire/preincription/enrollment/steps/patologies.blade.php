<div wire:key="patologies">

    <div class="animate__animated animate__fadeIn" >

        <div class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-100">
            Condición Médica
        </div>

        <div class="mb-4">
            <x-jet-label for="patology" value="{{ __($comment_enrollment['patology']) }}" />
            <x-input wire:model.lazy="patology" name="patology" id="patology" class="block mt-1 w-full " />
            @error('patology') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>
        {{--  --}}

        <div class="mb-4">
            <x-jet-label for="status_patology" value="{{ __($comment_enrollment['status_patology']) }}" class="inline" />
            <x-select wire:model="status_patology" name="status_patology" :options="[1=>'SI',0=>'NO']" class=" w-full " />
            @error('status_patology') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

    </div>

</div>
