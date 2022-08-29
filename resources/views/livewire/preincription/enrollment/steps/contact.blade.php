<div class="font-semibold text-xl text-gray-800 leading-tight">
    Datos de contacto
</div>


<div>
    <x-jet-label for="phone" value="{{ __($comment_enrollment['phone']) }}" />
    <x-jet-input wire:model="phone" id="phone" class="block mt-1 w-full @error('phone') is-invalid @else is-valid @enderror" type="phone" name="phone" :value="old('phone')"   />
    @error('phone') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
</div>

<div>
    <x-jet-label for="email" value="{{ __($comment_enrollment['email']) }}" />
    <x-jet-input wire:model="email" id="email" class="block mt-1 w-full @error('email') is-invalid @else is-valid @enderror" type="email" name="email" :value="old('email')"   />
    @error('email') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
</div>

<div>
    <x-jet-label for="twitter" value="{{ __($comment_enrollment['twitter']) }}" />
    <x-jet-input wire:model="twitter" id="twitter" class="block mt-1 w-full @error('twitter') is-invalid @else is-valid @enderror" type="twitter" name="twitter" :value="old('twitter')"   />
    @error('twitter') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
</div>

<div>
    <x-jet-label for="whatsapp" value="{{ __($comment_enrollment['whatsapp']) }}" />
    <x-jet-input wire:model="whatsapp" id="whatsapp" class="block mt-1 w-full @error('whatsapp') is-invalid @else is-valid @enderror" type="whatsapp" name="whatsapp" :value="old('whatsapp')"   />
    @error('whatsapp') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
</div>

<div>
    <x-jet-label for="facebook" value="{{ __($comment_enrollment['facebook']) }}" />
    <x-jet-input wire:model="facebook" id="facebook" class="block mt-1 w-full@error('facebook') is-invalid @else is-valid @enderror @error('city_birth') is-invalid @else is-valid @enderror" type="facebook" name="facebook" :value="old('facebook')"   />
    @error('facebook') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
</div>