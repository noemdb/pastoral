<div wire:key="representant">
	<div class="animate__animated animate__fadeIn" >
		<div class="font-semibold text-xl text-gray-800 leading-tight mb-4 dark:text-gray-100">
			Representante
		</div>
		<div class="mb-4">
			<x-jet-label for="representant_ci" value="{{ __($comment_enrollment['representant_ci']) }}" />
			<x-input wire:model.lazy="representant_ci" id="representant_ci" name="representant_ci" class="block mt-1 w-full" />
			@error('representant_ci') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
		</div>
		<div class="mb-4">
			<x-jet-label for="representant_name" value="{{ __($comment_enrollment['representant_name']) }}" />
			<x-input wire:model.lazy="representant_name" name="representant_name" class="block mt-1 w-full " />
			@error('representant_name') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
		</div>
		<div class="mb-4 ">
            <x-jet-label for="kinship" value="{{ __($comment_enrollment['kinship']) }}" /> 
            <div wire:loading wire:target="loadInstitution" class=" text-gray-400 text-sm">Procesando {{ __($comment_enrollment['kinship']) }}...</div>
            <x-select name="kinship" id="kinship" wire:model="kinship" :options="$kinship_list" class=" w-full " />
            @error('kinship') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>
		<div class="mb-4">
			<x-jet-label for="profession" value="{{ __($comment_enrollment['profession']) }}" />
			<x-input wire:model.lazy="profession" name="profession" class="block mt-1 w-full " />
			@error('profession') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
		</div>
	</div>
</div>