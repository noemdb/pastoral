<div wire:key="contact">
    
    <div class="animate__animated animate__fadeIn" >

        <div class="font-semibold text-xl text-gray-800 leading-tight">
            Datos de contacto
        </div>


        <div class="mb-4">
            <x-jet-label for="phone" value="{{ __($comment_enrollment['phone']) }}" />
            <x-input wire:model.defer="phone" name="phone" class="block mt-1 w-full @error('phone') is-invalid @else is-valid @enderror" />
            @error('phone') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <x-jet-label for="email" value="{{ __($comment_enrollment['email']) }}" />
            {{-- <x-input wire:model.defer="email" name="email" class="block mt-1 w-full {{ ($errors->has('email')) ? "is-invalid" : "is-valid" }} " /> --}}
            <x-input wire:model.defer="email" name="email" class="block mt-1 w-full" />
            @error('email') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <x-jet-label for="twitter" value="{{ __($comment_enrollment['twitter']) }}" />
            <x-input wire:model.defer="twitter" name="twitter" class="block mt-1 w-full @error('twitter') is-invalid @else is-valid @enderror" />
            @error('twitter') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <x-jet-label for="whatsapp" value="{{ __($comment_enrollment['whatsapp']) }}" />
            <x-input wire:model.defer="whatsapp" name="whatsapp" class="block mt-1 w-full @error('whatsapp') is-invalid @else is-valid @enderror" />
            @error('whatsapp') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <x-jet-label for="facebook" value="{{ __($comment_enrollment['facebook']) }}" />
            <x-input wire:model.defer="facebook" name="facebook" class="block mt-1 w-full @error('facebook') is-invalid @else is-valid @enderror" />
            @error('facebook') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

    </div>
</div>