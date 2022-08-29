<div class="font-semibold text-xl text-gray-800 leading-tight">
    Condición Médica
</div>
<div>
    <x-jet-label for="patology" value="{{ __($comment_enrollment['patology']) }}" />
    <x-jet-input wire:model="patology" id="patology" class="block mt-1 w-full @error('patology') is-invalid @else is-valid @enderror" type="patology" name="patology" :value="old('patology')"   />
    @error('patology') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
</div>

<div>
    <x-jet-label for="status_patology" value="{{ __($comment_enrollment['status_patology']) }}" class="inline" />
    <x-select wire:model="status_patology" name="status_patology" :options="[1=>'SI',0=>'NO']" class=" w-full @error('status_patology') is-invalid @else is-valid @enderror" />
    @error('status_patology') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
</div>
