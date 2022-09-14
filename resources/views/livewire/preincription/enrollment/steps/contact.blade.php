<div wire:key="contact">
    
    <div class="animate__animated animate__fadeIn" >

        <div class="font-semibold text-xl text-gray-800 leading-tight">
            Datos de contacto
        </div>


        <div class="mb-4">
            <x-jet-label for="phone" value="{{ __($comment_enrollment['phone']) }}" />
            <div class="@error('phone') p-2 border-2 rounded  border-rose-600 bg-red-50 @enderror">
            <x-input wire:model.lazy="phone" name="phone" class="block mt-1 w-full @error('phone') is-invalid @else is-valid @enderror" />
            </div>
            @error('phone') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <x-jet-label for="email" value="{{ __($comment_enrollment['email']) }}" />
            <div class="@error('email') p-2 border-2 rounded  border-rose-600 bg-red-50 @enderror">
            <x-input wire:model.lazy="email" name="email" class="block mt-1 w-full" />
            </div>
            @error('email') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <x-jet-label for="twitter" value="{{ __($comment_enrollment['twitter']) }}" />
            <div class="@error('twitter') p-2 border-2 rounded  border-rose-600 bg-red-50 @enderror">
            <x-input wire:model.lazy="twitter" name="twitter" class="block mt-1 w-full @error('twitter') is-invalid @else is-valid @enderror" />
            </div>
            @error('twitter') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <x-jet-label for="whatsapp" value="{{ __($comment_enrollment['whatsapp']) }}" />
            <div class="@error('whatsapp') p-2 border-2 rounded  border-rose-600 bg-red-50 @enderror">
            <x-input wire:model.lazy="whatsapp" name="whatsapp" class="block mt-1 w-full @error('whatsapp') is-invalid @else is-valid @enderror" />
            </div>
            @error('whatsapp') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <x-jet-label for="facebook" value="{{ __($comment_enrollment['facebook']) }}" />
            <x-input wire:model.lazy="facebook" name="facebook" class="block mt-1 w-full @error('facebook') is-invalid @else is-valid @enderror" />
            <div class="@error('facebook') p-2 border-2 rounded  border-rose-600 bg-red-50 @enderror">
            @error('facebook') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
            </div>
        </div>

    </div>
</div>