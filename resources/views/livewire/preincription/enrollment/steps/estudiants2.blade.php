<div wire:key="estudiant">

    <div class="animate__animated animate__fadeIn" >

        <div class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-100">
            Datos del Estudiante (Adicionales)
        </div>

        <div class="mb-4">
            <x-jet-label for="laterality" value="{{ __($comment_enrollment['laterality']) }}" />
            <x-select name="laterality" wire:model="laterality" id="laterality" wire:model.lazy="laterality" :options="$laterality_list" class="w-full" />
            @error('laterality') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <x-jet-label for="date_birth" value="{{ __($comment_enrollment['date_birth']) }}" />
            <x-input type="date" wire:model.lazy="date_birth" name="date_birth" class="block mt-1 w-full" />
            @error('date_birth') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <x-jet-label for="phone" value="{{ __($comment_enrollment['phone']) }}" />
            <x-input wire:model.lazy="phone" name="phone" class="block mt-1 w-full " />
            @error('phone') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <x-jet-label for="email" value="{{ __($comment_enrollment['email']) }}" />
            <x-input wire:model.lazy="email" name="email" class="block mt-1 w-full" />
            @error('email') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <x-jet-label for="christening_place" value="{{ __($comment_enrollment['christening_place']) }}" />
            <x-input wire:model.lazy="christening_place" name="phchristening_placeochristening_placene" class="block mt-1 w-full " />
            @error('christening_place') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <x-jet-label for="christening_date" value="{{ __($comment_enrollment['christening_date']) }}" />
            <x-input type="date" wire:model.lazy="christening_date" name="christening_date" class="block mt-1 w-full" />
            @error('christening_date') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

    </div>

</div>

