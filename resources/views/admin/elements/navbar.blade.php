    <x-slot name="header">

        <div class="flex justify-between">

            <x-jet-nav-link class=" shadow py-2 rounded" href="{{ route('institutions.index') }}" :active="request()->routeIs('*institutions*')">
                <x-icon-building class="w-6 h-6 mr-0.5" />
                <div class="mr-0.5 hidden md:flex">{{ __('Instituciones') }} </div>                        
            </x-jet-nav-link>

            <x-jet-nav-link class="shadow py-2 rounded dark:border-gray-400" href="{{ route('authorities.index') }}" :active="request()->routeIs('*authorities*')">
                <x-icon-stop class="w-6 h-6 mr-0.5" />
                <div class="mr-0.5 hidden md:flex">{{ __('Autoridades') }} </div> 
            </x-jet-nav-link>
            <x-jet-nav-link class="shadow py-2 rounded dark:border-gray-400" title="Perídos Educativo"  href="{{ route('pescolars.index') }}" :active="request()->routeIs('*pescolars*')">
                <x-icon-calendar class="w-6 h-6 mr-0.5" />
                <div class="mr-0.5 hidden md:flex">{{ __('Perídos') }} </div>
            </x-jet-nav-link>
            <x-jet-nav-link class="shadow py-2 rounded dark:border-gray-400" title="Planes de Educativos" href="{{ route('curricula.index') }}" :active="request()->routeIs('*curricula*')">
                <x-icon-table class="w-6 h-6 mr-0.5" />
                <div class="mr-0.5 hidden md:flex">{{ __('Planes') }} </div>
            </x-jet-nav-link>
            <x-jet-nav-link class="shadow py-2 rounded dark:border-gray-400" href="{{ route('institutions.index') }}" :active="request()->routeIs('*lapses*')">
                <x-icon-clock class="w-6 h-6 mr-0.5" />
                <div class="mr-0.5 hidden md:flex">{{ __('Lapsos') }} </div>
            </x-jet-nav-link>
            <x-jet-nav-link class="shadow py-2 rounded dark:border-gray-400" href="{{ route('institutions.index') }}" :active="request()->routeIs('*levels*')">
                <x-icon-chart-bar-v class="w-6 h-6 mr-0.5" />
                <div class="mr-0.5 hidden md:flex">{{ __('Niveles') }} </div>
            </x-jet-nav-link>
            <x-jet-nav-link class="shadow py-2 rounded dark:border-gray-400" href="{{ route('institutions.index') }}" :active="request()->routeIs('*sections*')">
                <x-icon-rectangle-list class="w-6 h-6 mr-0.5" />
                <div class="mr-0.5 hidden md:flex">{{ __('Secciones') }} </div>
            </x-jet-nav-link>
            <x-jet-nav-link class="shadow py-2 rounded dark:border-gray-400" href="{{ route('institutions.index') }}" :active="request()->routeIs('*courses*')">
                <x-icon-window-restore class="w-6 h-6 mr-0.5" />
                <div class="mr-0.5 hidden md:flex">{{ __('Asignaturas') }} </div>
            </x-jet-nav-link>
            <x-jet-nav-link class="shadow py-2 rounded dark:border-gray-400" title="Programas Educativos" href="{{ route('institutions.index') }}" :active="request()->routeIs('*pensums*')">
                <x-icon-archive class="w-6 h-6 mr-0.5" />
                <div class="mr-0.5 hidden md:flex">{{ __('Programas') }} </div>
            </x-jet-nav-link>

        </div>

    </x-slot> 