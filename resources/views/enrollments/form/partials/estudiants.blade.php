<div class="font-semibold text-xl text-gray-800 leading-tight">
    Datos del Estudiante
</div>

{{-- <x-jet-label for="name" value="{{ __('Estudiante') }}" /> --}}

<hr class=" my-1">

<div>
    <x-jet-label for="name" value="{{ __($comment_enrollment['name']) }}" />
    <x-jet-input id="name" class="block mt-1 w-full" type="name" name="name" :value="old('name')" required autofocus />
</div>

<div>
    {{-- <x-jet-label for="lastname" value="{{ __('Apellidos') }}" /> --}}
    <x-jet-label for="lastname" value="{{ __($comment_enrollment['lastname']) }}" />
    <x-jet-input id="lastname" class="block mt-1 w-full" type="lastname" name="lastname" :value="old('lastname')" required  />
</div>

<div>
    {{-- <x-jet-label for="citype_id" value="{{ __('Tipo de Identificación') }}" /> --}}
    <x-jet-label for="citype_id" value="{{ __($comment_enrollment['citype_id']) }}" />
    <x-jet-input id="citype_id" class="block mt-1 w-full" type="citype_id" name="citype_id" :value="old('citype_id')" required  />
</div>

<div>
    {{-- <x-jet-label for="ci" value="{{ __('N. de Identificación') }}" /> --}}
    <x-jet-label for="ci" value="{{ __($comment_enrollment['ci']) }}" />
    <x-jet-input id="ci" class="block mt-1 w-full" type="ci" name="ci" :value="old('ci')" required  />
</div>

<div>
    {{-- <x-jet-label for="levels" value="{{ __('Curso') }}" /> --}}
    <x-jet-label for="levels" value="{{ __($comment_enrollment['levels']) }}" />
    <x-jet-input id="levels" class="block mt-1 w-full" type="levels" name="levels" :value="old('levels')"  required />
</div>


<div>
    {{-- <x-jet-label for="gender" value="{{ __('Género') }}" /> --}}
    <x-jet-label for="gender" value="{{ __($comment_enrollment['gender']) }}" />
    <x-jet-input id="gender" class="block mt-1 w-full" type="gender" name="gender" :value="old('gender')" required  />
</div>


<div>
    {{-- <x-jet-label for="laterality" value="{{ __('Lateralidad') }}" /> --}}
    <x-jet-label for="laterality" value="{{ __($comment_enrollment['laterality']) }}" />
    <x-jet-input id="laterality" class="block mt-1 w-full" type="laterality" name="laterality" :value="old('laterality')"   />
</div>

<div>
    {{-- <x-jet-label for="date_birth" value="{{ __('Fecha de nacimiento') }}" /> --}}
    <x-jet-label for="date_birth" value="{{ __($comment_enrollment['date_birth']) }}" />
    <x-jet-input id="date_birth" class="block mt-1 w-full" type="date_birth" name="date_birth" :value="old('date_birth')" required  />
</div>

<hr>
<div class="font-semibold text-xl text-gray-800 leading-tight">
    Dirección
</div>


<div>
    {{-- <x-jet-label for="city_birth" value="{{ __('Ciudad de nacimiento') }}" /> --}}
    <x-jet-label for="city_birth" value="{{ __($comment_enrollment['city_birth']) }}" />
    <x-jet-input id="city_birth" class="block mt-1 w-full" type="city_birth" name="city_birth" :value="old('city_birth')" required  />
</div>

<div>
    {{-- <x-jet-label for="town_hall_birth" value="{{ __('Municipio de nacimiento') }}" /> --}}
    <x-jet-label for="town_hall_birth" value="{{ __($comment_enrollment['town_hall_birth']) }}" />
    <x-jet-input id="town_hall_birth" class="block mt-1 w-full" type="town_hall_birth" name="town_hall_birth" :value="old('town_hall_birth')" required  />
</div>

<div>
    {{-- <x-jet-label for="state_birth" value="{{ __('Estado de nacimiento') }}" /> --}}
    <x-jet-label for="state_birth" value="{{ __($comment_enrollment['state_birth']) }}" />
    <x-jet-input id="state_birth" class="block mt-1 w-full" type="state_birth" name="state_birth" :value="old('state_birth')" required  />
</div>

<div>
    {{-- <x-jet-label for="country_birth" value="{{ __('País de nacimiento') }}" /> --}}
    <x-jet-label for="country_birth" value="{{ __($comment_enrollment['country_birth']) }}" />
    <x-jet-input id="country_birth" class="block mt-1 w-full" type="country_birth" name="country_birth" :value="old('country_birth')" required  />
</div>

<div>
    <x-jet-label for="status_nacionality" value="{{ __($comment_enrollment['status_nacionality']) }}" class="inline" />
    <x-jet-checkbox id="status_nacionality" type="status_nacionality" name="status_nacionality" :value="old('status_nacionality')"  required />
</div>

<div>
    {{-- <x-jet-label for="dir_address" value="{{ __('País de nacimiento') }}" /> --}}
    <x-jet-label for="dir_address" value="{{ __($comment_enrollment['dir_address']) }}" />
    <x-jet-input id="dir_address" class="block mt-1 w-full" type="dir_address" name="dir_address" :value="old('dir_address')"  required />
</div>

<hr>
<div class="font-semibold text-xl text-gray-800 leading-tight">
    Datos de contacto
</div>


<div>
    <x-jet-label for="phone" value="{{ __($comment_enrollment['phone']) }}" />
    <x-jet-input id="phone" class="block mt-1 w-full" type="phone" name="phone" :value="old('phone')" required  />
</div>

<div>
    <x-jet-label for="email" value="{{ __($comment_enrollment['email']) }}" />
    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"  required />
</div>

<div>
    <x-jet-label for="twitter" value="{{ __($comment_enrollment['twitter']) }}" />
    <x-jet-input id="twitter" class="block mt-1 w-full" type="twitter" name="twitter" :value="old('twitter')"   />
</div>

<div>
    <x-jet-label for="whatsapp" value="{{ __($comment_enrollment['whatsapp']) }}" />
    <x-jet-input id="whatsapp" class="block mt-1 w-full" type="whatsapp" name="whatsapp" :value="old('whatsapp')"   />
</div>

<div>
    <x-jet-label for="facebook" value="{{ __($comment_enrollment['facebook']) }}" />
    <x-jet-input id="facebook" class="block mt-1 w-full" type="facebook" name="facebook" :value="old('facebook')"   />
</div>

<hr>
<div class="font-semibold text-xl text-gray-800 leading-tight">
    Condición Médica
</div>
<div>
    <x-jet-label for="patology" value="{{ __($comment_enrollment['patology']) }}" />
    <x-jet-input id="patology" class="block mt-1 w-full" type="patology" name="patology" :value="old('patology')"   />
</div>

<div>
    <x-jet-label for="status_patology" value="{{ __($comment_enrollment['status_patology']) }}" class="inline" />
    <x-jet-checkbox id="status_patology" type="status_patology" name="status_patology" :value="old('status_patology')"  required />
</div>


{{-- <div>
    <x-jet-label for="status" value="{{ __($comment_enrollment['status']) }}" />
    <x-jet-input id="status" class="block mt-1 w-full" type="status" name="status" :value="old('status')"   />
</div>

<div>
    <x-jet-label for="description" value="{{ __($comment_enrollment['description']) }}" />
    <x-jet-input id="description" class="block mt-1 w-full" type="description" name="description" :value="old('description')"   />
</div>

<div>
    <x-jet-label for="observations" value="{{ __($comment_enrollment['observations']) }}" />
    <x-jet-input id="observations" class="block mt-1 w-full" type="observations" name="description" :value="old('observations')"   />
</div> --}}
