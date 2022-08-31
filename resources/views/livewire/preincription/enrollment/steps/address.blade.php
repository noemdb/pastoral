<div class="font-semibold text-xl text-gray-800 leading-tight">
    Dirección
</div>


<div class="mb-4">
    <x-jet-label for="city_birth" value="{{ __($comment_enrollment['city_birth']) }}" />
    <x-input wire:model="city_birth" id="city_birth" name="city_birth" class="block mt-1 w-full @error('city_birth') is-invalid @else is-valid @enderror" />
    @error('city_birth') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
</div>

<div class="mb-4">
    <x-jet-label for="town_hall_birth" value="{{ __($comment_enrollment['town_hall_birth']) }}" />
    <x-input wire:model="town_hall_birth" id="town_hall_birth" name="town_hall_birth" class="block mt-1 w-full @error('town_hall_birth') is-invalid @else is-valid @enderror" />
    @error('town_hall_birth') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
</div>

<div class="mb-4">
    <x-jet-label for="state_birth" value="{{ __($comment_enrollment['state_birth']) }}" />
    <x-input wire:model="state_birth" id="state_birth" name="state_birth" class="block mt-1 w-full @error('state_birth') is-invalid @else is-valid @enderror" />
    @error('state_birth') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
</div>

<div class="mb-4">
    <x-jet-label for="country_birth" value="{{ __($comment_enrollment['country_birth']) }}" />
    <x-input wire:model="country_birth" name="country_birth" class="block mt-1 w-full @error('country_birth') is-invalid @else is-valid @enderror" />
    @error('country_birth') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
</div>

<div class="mb-4">
    <x-jet-label for="status_nacionality" value="{{ __($comment_enrollment['status_nacionality']) }}" class="inline" />
    <x-select wire:model="status_nacionality" name="status_nacionality"  :options="[1=>'SI',0=>'NO']" class=" w-full @error('status_nacionality') is-invalid @else is-valid @enderror" />
        @error('status_nacionality') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
</div>

<div class="mb-4">
    <x-jet-label for="dir_address" value="{{ __($comment_enrollment['dir_address']) }}" />
    <x-input wire:model="dir_address" name="dir_address" class="block mt-1 w-full @error('dir_address') is-invalid @else is-valid @enderror" />
    @error('dir_address') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
</div>