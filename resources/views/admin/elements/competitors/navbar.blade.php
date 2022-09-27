    <x-slot name="header">

        <div class="flex justify-start">

            <x-jet-nav-link class=" shadow py-2 mx-1 rounded" href="{{ route('estudiants.index') }}" :active="request()->routeIs('*estudiants*')">
                <x-icon-user-pen class="w-6 h-6 mr-0.5" />
                <div class="mr-0.5 hidden md:flex">{{ __('Estudiantes') }} </div>                        
            </x-jet-nav-link>
            <x-jet-nav-link class=" shadow py-2 mx-1 rounded" href="{{ route('estudiants.index') }}" :active="request()->routeIs('*estudiants*')">
                <x-icon-clipboard-user class="w-6 h-6 mr-0.5" />
                <div class="mr-0.5 hidden md:flex">{{ __('Preinscripciones') }} </div>                        
            </x-jet-nav-link>
            <x-jet-nav-link class=" shadow py-2 mx-1 rounded" href="{{ route('estudiants.index') }}" :active="request()->routeIs('*estudiants*')">
                <x-icon-list class="w-6 h-6 mr-0.5" />
                <div class="mr-0.5 hidden md:flex">{{ __('Inscriones') }} </div>                        
            </x-jet-nav-link>
            <x-jet-nav-link class=" shadow py-2 mx-1 rounded" href="{{ route('estudiants.index') }}" :active="request()->routeIs('*estudiants*')">
                <x-icon-user-tie class="w-6 h-6 mr-0.5" />
                <div class="mr-0.5 hidden md:flex">{{ __('Responsables') }} </div>                        
            </x-jet-nav-link>
            <x-jet-nav-link class=" shadow py-2 mx-1 rounded" href="{{ route('estudiants.index') }}" :active="request()->routeIs('*estudiants*')">
                <x-icon-list-ol class="w-6 h-6 mr-0.5" />
                <div class="mr-0.5 hidden md:flex">{{ __('Constancias') }} </div>                        
            </x-jet-nav-link>
            <x-jet-nav-link class=" shadow py-2 mx-1 rounded" href="{{ route('estudiants.index') }}" :active="request()->routeIs('*estudiants*')">
                <x-icon-list-ol class="w-6 h-6 mr-0.5" />
                <div class="mr-0.5 hidden md:flex">{{ __('Informe de Notas') }} </div>                        
            </x-jet-nav-link>
            <x-jet-nav-link class=" shadow py-2 mx-1 rounded" href="{{ route('estudiants.index') }}" :active="request()->routeIs('*estudiants*')">
                <x-icon-random class="w-6 h-6 mr-0.5" />
                <div class="mr-0.5 hidden md:flex">{{ __('Retiros') }} </div>                        
            </x-jet-nav-link>
            <x-jet-nav-link class=" shadow py-2 mx-1 rounded" href="{{ route('estudiants.index') }}" :active="request()->routeIs('*estudiants*')">
                <x-icon-th-large class="w-6 h-6 mr-0.5" />
                <div class="mr-0.5 hidden md:flex">{{ __('Ajustes de Notas') }} </div>                        
            </x-jet-nav-link>

        </div>

    </x-slot> 