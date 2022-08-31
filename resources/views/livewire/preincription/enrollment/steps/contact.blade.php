<div class="font-semibold text-xl text-gray-800 leading-tight">
    Datos de contacto
</div>


<div class="mb-4">
    <x-jet-label for="phone" value="{{ __($comment_enrollment['phone']) }}" />
    <x-input wire:model="phone" name="phone" class="block mt-1 w-full @error('phone') is-invalid @else is-valid @enderror" />
    @error('phone') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
</div>

<div class="mb-4">
    <x-jet-label for="email" value="{{ __($comment_enrollment['email']) }}" />
    <x-input wire:model="email" name="email" class="block mt-1 w-full @error('email') is-invalid @else is-valid @enderror" />
    @error('email') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
</div>

<div class="mb-4">
    <x-jet-label for="twitter" value="{{ __($comment_enrollment['twitter']) }}" />
    <x-input wire:model="twitter" name="twitter" class="block mt-1 w-full @error('twitter') is-invalid @else is-valid @enderror" />
    @error('twitter') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
</div>

<div class="mb-4">
    <x-jet-label for="whatsapp" value="{{ __($comment_enrollment['whatsapp']) }}" />
    <x-input wire:model="whatsapp" name="whatsapp" class="block mt-1 w-full @error('whatsapp') is-invalid @else is-valid @enderror" />
    @error('whatsapp') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
</div>

<div class="mb-4">
    <x-jet-label for="facebook" value="{{ __($comment_enrollment['facebook']) }}" />
    <x-input wire:model="facebook" name="facebook" class="block mt-1 w-full @error('facebook') is-invalid @else is-valid @enderror" />
    @error('facebook') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
</div>