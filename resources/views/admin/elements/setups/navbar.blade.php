    <x-slot name="header">

        <div class="flex justify-start">

            <x-jet-nav-link class=" shadow py-2 mx-1 rounded" href="{{ route('users.index') }}" :active="request()->is('*users*')">
                <x-icon-users class="w-6 h-6 mr-0.5" />
                <div class="mr-0.5 hidden md:flex">{{ __('Usuarios') }} </div>                        
            </x-jet-nav-link>
            <x-jet-nav-link class=" shadow py-2 mx-1 rounded" href="{{ route('roles.index') }}" :active="request()->is('*roles*')">
                <x-icon-note-sticky class="w-6 h-6 mr-0.5" />
                <div class="mr-0.5 hidden md:flex">{{ __('Roles') }} </div>                        
            </x-jet-nav-link>
            <x-jet-nav-link class=" shadow py-2 mx-1 rounded" href="{{ route('profiles.index') }}" :active="request()->is('*profiles*')">
                <x-icon-grip class="w-6 h-6 mr-0.5" />
                <div class="mr-0.5 hidden md:flex">{{ __('Perfiles') }} </div>                        
            </x-jet-nav-link>
        </div>

    </x-slot> 