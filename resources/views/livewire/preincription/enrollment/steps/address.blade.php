<div class="font-semibold text-xl text-gray-800 leading-tight">
    Dirección
</div>


<div>
    <x-jet-label for="city_birth" value="{{ __($comment_enrollment['city_birth']) }}" />
    <x-jet-input wire:model="city_birth" id="city_birth" class="block mt-1 w-full @error('city_birth') is-invalid @else is-valid @enderror" type="city_birth" name="city_birth" :value="old('city_birth')"   />
    @error('city_birth') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
</div>

<div>
    <x-jet-label for="town_hall_birth" value="{{ __($comment_enrollment['town_hall_birth']) }}" />
    <x-jet-input wire:model="town_hall_birth" id="town_hall_birth" class="block mt-1 w-full @error('town_hall_birth') is-invalid @else is-valid @enderror" type="town_hall_birth" name="town_hall_birth" :value="old('town_hall_birth')"   />
    @error('town_hall_birth') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
</div>

<div>
    <x-jet-label for="state_birth" value="{{ __($comment_enrollment['state_birth']) }}" />
    <x-jet-input wire:model="state_birth" id="state_birth" class="block mt-1 w-full @error('state_birth') is-invalid @else is-valid @enderror" type="state_birth" name="state_birth" :value="old('state_birth')"   />
    @error('state_birth') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
</div>

<div>
    <x-jet-label for="country_birth" value="{{ __($comment_enrollment['country_birth']) }}" />
    <x-jet-input wire:model="country_birth" id="country_birth" class="block mt-1 w-full @error('country_birth') is-invalid @else is-valid @enderror" type="country_birth" name="country_birth" :value="old('country_birth')"   />
    @error('country_birth') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
</div>

<div>
    <x-jet-label for="status_nacionality" value="{{ __($comment_enrollment['status_nacionality']) }}" class="inline" />
    <x-select wire:model="status_nacionality" name="gender"  :options="[1=>'SI',0=>'NO']" class=" w-full @error('status_nacionality') is-invalid @else is-valid @enderror" />
        @error('status_nacionality') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
</div>

<div>
    <x-jet-label for="dir_address" value="{{ __($comment_enrollment['dir_address']) }}" />
    <x-jet-input wire:model="dir_address" id="dir_address" class="block mt-1 w-full @error('dir_address') is-invalid @else is-valid @enderror" type="dir_address" name="dir_address" :value="old('dir_address')"   />
    @error('dir_address') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
</div>