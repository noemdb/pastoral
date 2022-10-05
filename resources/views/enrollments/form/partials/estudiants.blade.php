<div class="font-semibold text-xl text-gray-800 leading-tight">
    Datos del Estudiante
</div>

{{-- <x-jet-label for="name" value="{{ __('Estudiante') }}" /> --}}

<hr class=" my-1">

<div>
    <x-jet-label for="name" value="{{ __($comment_enrollment['name']) }}" />
    <x-jet-input id="name" class="block mt-1 w-full" type="name" name="name" :value="old('name')"  />
</div>

<div>
    {{-- <x-jet-label for="lastname" value="{{ __('Apellidos') }}" /> --}}
    <x-jet-label for="lastname" value="{{ __($comment_enrollment['lastname']) }}" />
    <x-jet-input id="lastname" class="block mt-1 w-full" type="lastname" name="lastname" :value="old('lastname')"   />
</div>

<div>
    {{-- <x-jet-label for="citype_id" value="{{ __('Tipo de Identificación') }}" /> --}}
    <x-jet-label for="citype_id" value="{{ __($comment_enrollment['citype_id']) }}" />
    {{-- <x-jet-input id="citype_id" class="block mt-1 w-full" type="citype_id" name="citype_id" :value="old('citype_id')"   /> --}}
    <x-select name="citype_id"  :options="$citype_list" class=" w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" />
</div>

<div>
    {{-- <x-jet-label for="ci" value="{{ __('N. de Identificación') }}" /> --}}
    <x-jet-label for="ci" value="{{ __($comment_enrollment['ci']) }}" />
    <x-jet-input id="ci" class="block mt-1 w-full" type="ci" name="ci" :value="old('ci')"   />
</div>

<div>
    {{-- <x-jet-label for="levels" value="{{ __('Curso') }}" /> --}}
    <x-jet-label for="levels" value="{{ __($comment_enrollment['levels']) }}" />
    <x-jet-input id="levels" class="block mt-1 w-full" type="levels" name="levels" :value="old('levels')"   />
</div>


<div>
    {{-- <x-jet-label for="gender" value="{{ __('Género') }}" /> --}}
    <x-jet-label for="gender" value="{{ __($comment_enrollment['gender']) }}" />
    <x-select name="gender" :options="$gender_list" class=" w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" />
    {{-- <x-jet-input id="gender" class="block mt-1 w-full" type="gender" name="gender" :value="old('gender')"   /> --}}
</div>


<div>
    {{-- <x-jet-label for="laterality" value="{{ __('Lateralidad') }}" /> --}}
    <x-jet-label for="laterality" value="{{ __($comment_enrollment['laterality']) }}" />
    <x-jet-input id="laterality" class="block mt-1 w-full" type="laterality" name="laterality" :value="old('laterality')"   />
</div>

<div>
    {{-- <x-jet-label for="date_birth" value="{{ __('Fecha de nacimiento') }}" /> --}}
    <x-jet-label for="date_birth" value="{{ __($comment_enrollment['date_birth']) }}" />
    <x-jet-input id="date_birth" class="block mt-1 w-full" type="date" name="date_birth" :value="old('date_birth')"   />
</div>

<hr>
<div class="font-semibold text-xl text-gray-800 leading-tight">
    Dirección
</div>


<div>
    <x-jet-label for="city_id" value="{{ __($comment_enrollment['city_id']) }}" />
    <x-jet-input id="city_id" class="block mt-1 w-full" type="city_id" name="city_id" :value="old('city_id')"   />
</div>

<div>
    <x-jet-label for="state_id" value="{{ __($comment_enrollment['state_id']) }}" />
    <x-jet-input id="state_id" class="block mt-1 w-full" type="state_id" name="state_id" :value="old('state_id')"   />
</div>

<div>
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

<hr>
<div class="font-semibold text-xl text-gray-800 leading-tight">
    Datos de contacto
</div>


<div>
    <x-jet-label for="phone" value="{{ __($comment_enrollment['phone']) }}" />
    <x-jet-input id="phone" class="block mt-1 w-full" type="phone" name="phone" :value="old('phone')"   />
</div>

<div>
    <x-jet-label for="email" value="{{ __($comment_enrollment['email']) }}" />
    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"   />
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
