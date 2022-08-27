<div class="font-semibold text-xl text-gray-800 leading-tight">
    Dirección
</div>


<div>
    {{-- <x-jet-label for="city_birth" value="{{ __('Ciudad de nacimiento') }}" /> --}}
    <x-jet-label for="city_birth" value="{{ __($comment_enrollment['city_birth']) }}" />
    <x-jet-input id="city_birth" class="block mt-1 w-full" type="city_birth" name="city_birth" :value="old('city_birth')"   />
</div>

<div>
    {{-- <x-jet-label for="town_hall_birth" value="{{ __('Municipio de nacimiento') }}" /> --}}
    <x-jet-label for="town_hall_birth" value="{{ __($comment_enrollment['town_hall_birth']) }}" />
    <x-jet-input id="town_hall_birth" class="block mt-1 w-full" type="town_hall_birth" name="town_hall_birth" :value="old('town_hall_birth')"   />
</div>

<div>
    {{-- <x-jet-label for="state_birth" value="{{ __('Estado de nacimiento') }}" /> --}}
    <x-jet-label for="state_birth" value="{{ __($comment_enrollment['state_birth']) }}" />
    <x-jet-input id="state_birth" class="block mt-1 w-full" type="state_birth" name="state_birth" :value="old('state_birth')"   />
</div>

<div>
    {{-- <x-jet-label for="country_birth" value="{{ __('País de nacimiento') }}" /> --}}
    <x-jet-label for="country_birth" value="{{ __($comment_enrollment['country_birth']) }}" />
    <x-jet-input id="country_birth" class="block mt-1 w-full" type="country_birth" name="country_birth" :value="old('country_birth')"   />
</div>

<div>
    <x-jet-label for="status_nacionality" value="{{ __($comment_enrollment['status_nacionality']) }}" class="inline" />
    <x-select name="gender"  :options="[1=>'SI',0=>'NO']" class=" w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" />
    {{-- <x-jet-checkbox id="status_nacionality" type="status_nacionality" name="status_nacionality" :value="old('status_nacionality')"   /> --}}
</div>

<div>
    {{-- <x-jet-label for="dir_address" value="{{ __('País de nacimiento') }}" /> --}}
    <x-jet-label for="dir_address" value="{{ __($comment_enrollment['dir_address']) }}" />
    <x-jet-input id="dir_address" class="block mt-1 w-full" type="dir_address" name="dir_address" :value="old('dir_address')"   />
</div>