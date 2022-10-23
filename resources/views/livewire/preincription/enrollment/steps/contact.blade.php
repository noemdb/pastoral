<div wire:key="contact">
    
    <div class="animate__animated animate__fadeIn" >

        <div class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-100">
            Datos de contacto
        </div>
        
        
        <div class="mb-4">
            <x-jet-label for="representant_phone" value="{{ __($comment_enrollment['representant_phone']) }}" />
            <x-input wire:model.lazy="representant_phone" name="representant_phone" class="block mt-1 w-full " />
            @error('representant_phone') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <x-jet-label for="representant_email" value="{{ __($comment_enrollment['representant_email']) }}" />
            <x-input wire:model.lazy="representant_email" name="representant_email" class="block mt-1 w-full" />
            @error('representant_email') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
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