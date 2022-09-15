<div wire:key="address">

    <div class="animate__animated animate__fadeIn" >

        <div class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-100">
            Dirección
        </div>


        <div class="mb-4">
            <x-jet-label for="country_id" value="{{ __($comment_enrollment['country_id']) }}" />
            <div wire:loading wire:target="loadState" class=" text-gray-400 text-sm">Obteniendo datos...</div>
            <x-select name="country_id" id="country_id" wire:model="country_id" wire:change="loadState($event.target.value)" :options="$country_list" class=" w-full " />
            @error('country_id') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

        @if ($country)
            <div class="mb-4">
                <div wire:loading wire:target="loadCity" class=" text-gray-400 text-sm">Obteniendo datos...</div>
                <x-jet-label for="state_id" value="{{ __($comment_enrollment['state_id']) }}" />    
                <x-select name="state_id" id="state_id"  wire:model="state_id" wire:change="loadCity($event.target.value)" :options="$state_list" class=" w-full " />
                @error('state_id') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
            </div>

            @if ($state)

                <div class="mb-4">                    
                    <x-jet-label for="city_id" value="{{ __($comment_enrollment['city_id']) }}" />    
                    <x-select name="city_id" id="city_id" wire:model="city_id"  :options="$city_list" class=" w-full" />
                    @error('city_id') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
                </div>

                <div class="mb-4">
                    <x-jet-label for="dir_address" value="{{ __($comment_enrollment['dir_address']) }}" />
                    <x-input wire:model.lazy="dir_address"  name="dir_address" class="block mt-1 w-full @error('dir_address') " />
                    @error('dir_address') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
                </div>

                <div class="mb-4">
                    <x-jet-label for="status_nacionality" value="{{ __($comment_enrollment['status_nacionality']) }}" class="inline" />
                    <x-select wire:model="status_nacionality" name="status_nacionality"  :options="[1=>'SI',0=>'NO']" class=" w-full " />
                    @error('status_nacionality') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
                </div>

            @endif
        @endif

    </div>

</div>

