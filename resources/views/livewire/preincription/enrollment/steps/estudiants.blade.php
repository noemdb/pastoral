<div wire:key="estudiant">

    <div class="animate__animated animate__fadeIn" >

        <div class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-100">
            Datos del Estudiante
        </div>

        {{-- <hr class=" my-1"> --}}

        <div class="mb-4">
            <x-jet-label for="name" value="{{ __($comment_enrollment['name']) }}" />
            <x-input wire:model.lazy="name" name="name" class="block mt-1 w-full" />
            @error('name') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <x-jet-label for="lastname" value="{{ __($comment_enrollment['lastname']) }}" />
            <x-input wire:model.lazy="lastname" name="lastname" class="block mt-1 w-full" />
            @error('lastname') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <x-jet-label for="citype_id" value="{{ __($comment_enrollment['citype_id']) }}" />
            <x-select  wire:model="citype_id" name="citype_id" class="w-full" :options="$citype_list" />
            @error('citype_id') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <x-jet-label for="ci" value="{{ __($comment_enrollment['ci']) }}" />
            <x-input wire:model.lazy="ci" name="ci" class="block mt-1 w-full" />
            @error('ci') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <x-jet-label for="gender" value="{{ __($comment_enrollment['gender']) }}" />
            <x-select name="gender" wire:model="gender" :options="$gender_list" class="w-full" />
            @error('gender') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

    </div>

</div>

