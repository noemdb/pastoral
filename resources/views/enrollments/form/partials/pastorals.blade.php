<div class="font-semibold text-xl text-gray-800 leading-tight">
    Institución
</div>

{{-- <x-jet-label for="name" value="{{ __('Estudiante') }}" /> --}}

<hr class=" my-1">

<div>
    <x-jet-label for="name" value="{{ __($comment_enrollment['name']) }}" />
    <x-jet-input id="name" class="block mt-1 w-full" type="name" name="name" :value="old('name')" required autofocus />
</div>
