    <x-slot name="header">

        <div class="flex justify-start">

            <x-jet-nav-link class=" shadow py-2 mx-1 rounded" href="{{ route('bmains.index') }}" :active="request()->is('*bmains*')">
                <x-icon-robot class="w-6 h-6 mr-0.5" />
                <div class="mr-0.5 hidden md:flex">{{ __('Bots') }} </div>                        
            </x-jet-nav-link>

        </div>

    </x-slot> 