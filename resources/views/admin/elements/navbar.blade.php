    <x-slot name="header">

        <x-jet-nav-link class=" shadow py-2 rounded" href="{{ route('institutions.index') }}" :active="request()->routeIs('*institutions*')">
            {{ __('Instituciones') }}            
        </x-jet-nav-link>

        <x-jet-nav-link class=" shadow py-2 rounded" href="{{ route('authorities.index') }}" :active="request()->routeIs('*authorities*')">
            {{ __('Autoridades') }}
        </x-jet-nav-link>
        <x-jet-nav-link title="Perídos Educativo" class=" shadow py-2 rounded" href="{{ route('institutions.index') }}" :active="request()->routeIs('*pescolars*')">
            {{ __('Perídos ') }}
        </x-jet-nav-link>
        <x-jet-nav-link title="Planes de Educativos" class=" shadow py-2 rounded" href="{{ route('institutions.index') }}" :active="request()->routeIs('*curricula*')">
            {{ __('Planes') }}
        </x-jet-nav-link>
        <x-jet-nav-link class=" shadow py-2 rounded" href="{{ route('institutions.index') }}" :active="request()->routeIs('*lapses*')">
            {{ __('Lapsos') }}
        </x-jet-nav-link>
        <x-jet-nav-link class=" shadow py-2 rounded" href="{{ route('institutions.index') }}" :active="request()->routeIs('*levels*')">
            {{ __('Niveles') }}
        </x-jet-nav-link>
        <x-jet-nav-link class=" shadow py-2 rounded" href="{{ route('institutions.index') }}" :active="request()->routeIs('*sections*')">
            {{ __('Secciones') }}
        </x-jet-nav-link>
        <x-jet-nav-link class=" shadow py-2 rounded" href="{{ route('institutions.index') }}" :active="request()->routeIs('*courses*')">
            {{ __('Asignaturas') }}
        </x-jet-nav-link>
        <x-jet-nav-link title="Programas Educativos" class=" shadow py-2 rounded" href="{{ route('institutions.index') }}" :active="request()->routeIs('*pensums*')">
            {{ __('Programas') }}
        </x-jet-nav-link>

    </x-slot> 