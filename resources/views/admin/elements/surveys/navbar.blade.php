    <x-slot name="header">

        <div class="flex justify-start">

            <x-jet-nav-link class=" shadow py-2 mx-1 rounded" href="{{ route('pollmains.index') }}" :active="request()->is('*pollmains*')">
                <x-icon-poll class="w-6 h-6 mr-0.5" />
                <div class="mr-0.5 hidden lg:flex">{{ __('Encuestas') }} </div>                        
            </x-jet-nav-link>

        </div>

    </x-slot> 