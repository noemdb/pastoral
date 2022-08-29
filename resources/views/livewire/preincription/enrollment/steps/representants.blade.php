<div class="font-semibold text-xl text-gray-800 leading-tight mb-4">
    Representante
</div>
<div>
    <x-jet-label for="representant_ci" value="{{ __($comment_enrollment['representant_ci']) }}" />
    <x-jet-input wire:model="representant_ci" id="representant_ci" class="block mt-1 w-full @error('representant_ci') is-invalid @else is-valid @enderror" type="representant_ci" name="representant_ci" :value="old('representant_ci')"   />
    @error('representant_ci') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
</div>

<div>
    <x-jet-label for="representant_name" value="{{ __($comment_enrollment['representant_name']) }}" />
    <x-jet-input wire:model="representant_name" id="representant_name" class="block mt-1 w-full @error('representant_name') is-invalid @else is-valid @enderror" type="representant_ci" name="representant_ci" :value="old('representant_ci')"   />
    @error('representant_name') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
</div>
