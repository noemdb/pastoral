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

{{-- <div> --}}
    {{-- <x-jet-label for="levels" value="{{ __('Curso') }}" /> --}}
    {{-- <x-jet-label for="levels" value="{{ __($comment_enrollment['levels']) }}" /> --}}
    {{-- <x-jet-input id="levels" class="block mt-1 w-full" type="levels" name="levels" :value="old('levels')"   /> --}}
{{-- </div> --}}


<div>
    {{-- <x-jet-label for="gender" value="{{ __('Género') }}" /> --}}
    <x-jet-label for="gender" value="{{ __($comment_enrollment['gender']) }}" />
    <x-select name="gender" :options="$gender_list" class=" w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" />
    {{-- <x-jet-input id="gender" class="block mt-1 w-full" type="gender" name="gender" :value="old('gender')"   /> --}}
</div>


<div>
    {{-- <x-jet-label for="laterality" value="{{ __('Lateralidad') }}" /> --}}
    <x-jet-label for="laterality" value="{{ __($comment_enrollment['laterality']) }}" />
    {{-- <x-jet-input id="laterality" class="block mt-1 w-full" type="laterality" name="laterality" :value="old('laterality')"   /> --}}
    <x-select name="laterality" id="laterality" wire:model="laterality" :options="$laterality_list" class=" w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" />
</div>

<div>
    {{-- <x-jet-label for="date_birth" value="{{ __('Fecha de nacimiento') }}" /> --}}
    <x-jet-label for="date_birth" value="{{ __($comment_enrollment['date_birth']) }}" />
    <x-jet-input id="date_birth" class="block mt-1 w-full" type="date" name="date_birth" :value="old('date_birth')"   />
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
