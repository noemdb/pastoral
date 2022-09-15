<div wire:key="contact">
    
    <div class="animate__animated animate__fadeIn" >

        <div class="font-semibold text-xl text-gray-800 leading-tight">
            Datos de contacto
        </div>


        <div class="mb-4">
            <x-jet-label for="phone" value="{{ __($comment_enrollment['phone']) }}" />
            <x-input wire:model.lazy="phone" name="phone" class="block mt-1 w-full " />
            @error('phone') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <x-jet-label for="email" value="{{ __($comment_enrollment['email']) }}" />
            <x-input wire:model.lazy="email" name="email" class="block mt-1 w-full" />
            @error('email') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <x-jet-label for="twitter" value="{{ __($comment_enrollment['twitter']) }}" />
            <x-input wire:model.lazy="twitter" name="twitter" class="block mt-1 w-full " />
            @error('twitter') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <x-jet-label for="whatsapp" value="{{ __($comment_enrollment['whatsapp']) }}" />
            <x-input wire:model.lazy="whatsapp" name="whatsapp" class="block mt-1 w-full" />
            @error('whatsapp') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <x-jet-label for="facebook" value="{{ __($comment_enrollment['facebook']) }}" />
            <x-input wire:model.lazy="facebook" name="facebook" class="block mt-1 w-full" />
            @error('facebook') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

    </div>
</div>