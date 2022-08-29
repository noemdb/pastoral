<div class="font-semibold text-xl text-gray-800 leading-tight">
    Datos del Estudiante
</div>

<hr class=" my-1">

<div class="mb-4">
    <x-jet-label for="name" value="{{ __($comment_enrollment['name']) }}" />
    <x-jet-input wire:model="name" id="name" class="block mt-1 w-full @error('email') is-invalid @else is-valid @enderror" type="name" name="name" :value="old('name')"  />
    @error('name') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
</div>

<div class="mb-4">
    <x-jet-label for="lastname" value="{{ __($comment_enrollment['lastname']) }}" />
    <x-jet-input wire:model="lastname" id="lastname" class="block mt-1 w-full @error('lastname') is-invalid @else is-valid @enderror" type="lastname" name="lastname" :value="old('lastname')" />
    @error('lastname') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
</div>

<div class="mb-4">
    <x-jet-label for="citype_id" value="{{ __($comment_enrollment['citype_id']) }}" />
    <x-select  wire:model="citype_id" name="citype_id" class="w-full @error('citype_id') is-invalid @else is-valid @enderror" :options="$citype_list" />
    @error('citype_id') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
</div>

<div class="mb-4">
    <x-jet-label for="ci" value="{{ __($comment_enrollment['ci']) }}" />
    <x-jet-input wire:model="ci" id="ci" class="block mt-1 w-full @error('ci') is-invalid @else is-valid @enderror" type="ci" name="ci" :value="old('ci')"   />
    @error('ci') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
</div>

<div class="mb-4">
    <x-jet-label for="gender" value="{{ __($comment_enrollment['gender']) }}" />
    <x-select name="gender" wire:model="gender" :options="$gender_list" class="w-full @error('gender') is-invalid @else is-valid @enderror" />
    @error('gender') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
</div>


<div class="mb-4">
    <x-jet-label for="laterality" value="{{ __($comment_enrollment['laterality']) }}" />
    <x-select name="laterality" wire:model="laterality" id="laterality" wire:model="laterality" :options="$laterality_list" class="w-full @error('laterality') is-invalid @else is-valid @enderror" />
    @error('laterality') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
</div>

<div class="mb-4">
    <x-jet-label for="date_birth" value="{{ __($comment_enrollment['date_birth']) }}" />
    <x-jet-input wire:model="date_birth" id="date_birth" class="block mt-1 w-full @error('date_birth') is-invalid @else is-valid @enderror" type="date" name="date_birth" :value="old('date_birth')"   />
    @error('date_birth') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
</div>






{{-- <div>
    <x-jet-label for="status" value="{{ __($comment_enrollment['status']) }}" />
    <x-jet-input wire:model="state_birth" id="status" class="block mt-1 w-full" type="status" name="status" :value="old('status')"   />
</div>

<div>
    <x-jet-label for="description" value="{{ __($comment_enrollment['description']) }}" />
    <x-jet-input wire:model="state_birth" id="description" class="block mt-1 w-full" type="description" name="description" :value="old('description')"   />
</div>

<div>
    <x-jet-label for="observations" value="{{ __($comment_enrollment['observations']) }}" />
    <x-jet-input wire:model="state_birth" id="observations" class="block mt-1 w-full" type="observations" name="description" :value="old('observations')"   />
</div> --}}
