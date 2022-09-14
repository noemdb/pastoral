<div wire:key="patologies">

    <div class="animate__animated animate__fadeIn" >

        <div class="font-semibold text-xl text-gray-800 leading-tight">
            Condición Médica
        </div>

        <div class="mb-4">
            <x-jet-label for="patology" value="{{ __($comment_enrollment['patology']) }}" />
            <div class="@error('patology') p-2 border-2 rounded  border-rose-600 bg-red-50 @enderror">
            <x-input wire:model.lazy="patology" name="patology" id="patology" class="block mt-1 w-full @error('patology') is-invalid @else is-valid @enderror" />
            </div>
            @error('patology') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>
        {{--  --}}

        <div class="mb-4">
            <x-jet-label for="status_patology" value="{{ __($comment_enrollment['status_patology']) }}" class="inline" />
            <div class="@error('status_patology') p-2 border-2 rounded  border-rose-600 bg-red-50 @enderror">
            <x-select wire:model="status_patology" name="status_patology" :options="[1=>'SI',0=>'NO']" class=" w-full @error('status_patology') is-invalid @else is-valid @enderror" />
            </div>
            @error('status_patology') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

    </div>

</div>
