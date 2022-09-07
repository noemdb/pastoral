<div>

    <div wire:key="estudiant">

        <div class="animate__animated animate__fadeIn" >

            <div class="font-semibold text-xl text-gray-800 leading-tight">
                Datos de la instituciòn
            </div>

            <hr class=" my-1">

            <div class="mb-4">
                <x-jet-label for="name" value="{{ __($comment_pastoral['name']) }}" />
                <x-input wire:model="name" name="name" class="block mt-1 w-full @error('name') is-invalid @else is-valid @enderror" />
                @error('name') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
            </div>

            <x-jet-button type="button" class="ml-1 bg-green-500 " wire:click="update"> {{ __('Actualizar') }} </x-jet-button>

    </div>


</div>
